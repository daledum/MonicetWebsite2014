<?php

class prMainActions extends sfActions {
  public function executeControlPanel(sfWebRequest $request) {
    $this->uploadPhotos = UploadedPhotoPeer::countNotProcessed();
    $this->notProcessedPhotos = $this->countNotProcessedPhotos();
    $this->processedPhotos = $this->countProcessedPhotos();
    $this->individuals = IndividualQuery::create()->count();
    $this->species = SpecieQuery::create()->count();
    $this->patterns = PatternQuery::create()->count();
  }
  
  public function executeUploadPhotosBulk( sfWebRequest $request ){
    $this->form = new addPhotosForm();
  }
  
  public function executeProcessUploadPhotosBulk( sfWebRequest $request ){
    
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new addPhotosForm();
    $this->form->bind($request->getParameter('add_photos'), $request->getFiles('add_photos'));
    if($this->form->isValid()) {
      $values = $this->form->getValues();
      
      $file = $this->form->getValue('photo');
      if( $values['photo']->getOriginalExtension() == '.zip'){
        $ok = true;
        // salvar ficheiro zip e descompactar na pasta temporária
        $fileAddress = sfConfig::get('sf_upload_dir').'/pr_repo_temp/'.$values['photo']->getOriginalName();
        $finalTempfileAddress = sfConfig::get('sf_upload_dir').'/pr_repo_temp/';
        $file->save( $fileAddress );
        system('unzip '.$fileAddress.' -d '.$finalTempfileAddress);
        system('rm '.$fileAddress);
        
        // validar o nome dos ficheiros
        $current_dir = sfConfig::get('sf_upload_dir').'/pr_repo_temp';
        $dir = opendir($current_dir);        // Open the sucker
        while ($file = readdir($dir)) {
          if( $file != '.' && $file != '..' ){
            if( !$this->validateFilename($file) ) {
              $ok = false;
            }
          }
        }
        if( $ok ) {
          system('cp '.$finalTempfileAddress.'* '.sfConfig::get('sf_upload_dir').'/pr_repo');
          $this->getUser()->setFlash('notice', 'A fotografias foram carregadas com sucesso.');
          system('rm '.$finalTempfileAddress.'*');
          $this->redirect('@recognition_of_cetaceans_app');
        } else {
          system('rm '.$finalTempfileAddress.'*');
          $this->getUser()->setFlash('error', 'Pelo menos um ficheiro contido no ficheiro .zip tem um formato inválido');
        }
        
      } else {
        if( in_array($values['photo']->getOriginalExtension(), array('.jpg', '.JPG'))){
          if( $this->validateFileName($values['photo']->getOriginalName()) ) {
            $fileAddress = sfConfig::get('sf_upload_dir').'/pr_repo/'.$values['photo']->getOriginalName();
            $file->save( $fileAddress );
            $this->getUser()->setFlash('notice', 'A fotografia foi carregada com sucesso.');
            $this->redirect('@recognition_of_cetaceans_app');
          } else {
            $this->getUser()->setFlash('error', 'A fotografia enviada contém um formato inválido.');
          }
        } else {
          $this->getUser()->setFlash('error', 'A fotografia enviada contém uma extensão inválida.');
        }
      }
    }
    $this->setTemplate('uploadPhotosBulk');
  }
  
  public function executePendentPhotoList( sfWebRequest $request ){
    $this->form = new findPendentPhotosForm();
    
    $this->sort = $request->getParameter('sort', 'asc');

    $args = $request->getParameter('find_pendent_photos');
    $this->argumentos = $args;
    $this->resultados = $this->findPendentPhotos($args, $this->sort);/*mfPlanoPeer::pesquisaAlunosComPlanos($args);*/
    
    $this->invalidPhotos = $this->findInvalidNamePhotos($this->sort);
  }
  
  public function executeDeleteInvalidPendentPhoto( sfWebRequest $request ){
    
    $this->forward404Unless($request->isMethod('post'));
    
    $invalidPhotos = $this->findInvalidNamePhotos();
    
    foreach( $invalidPhotos as $invalidPhoto) {
      $filename = sfConfig::get('sf_upload_dir').'/pr_repo/'.$invalidPhoto;
      if( file_exists( $filename ) ){
        unlink($filename);
      }
    }
    
    $this->getUser()->setFlash('notice', 'As fotografias foram apagadas com sucesso.');
    $this->redirect('@pr_pendent_photos_list');
  }
  
  public function executeDeletePendentPhoto( sfWebRequest $request ){
    $this->forward404Unless($request->isMethod('post'));
    
    $filename = sfConfig::get('sf_upload_dir').'/pr_repo/'.$request->getParameter('filename').'.'.$request->getParameter('extension');
    if( file_exists( $filename ) ){
      unlink($filename);
    }
    $args = $request->getParameter('args');
    $this->getUser()->setFlash('notice', 'A fotografia foi apagada com sucesso.');
    $this->redirect('@pr_pendent_photos_list');
  }
  
  
  
  /**
   *
   *  Accessory methods
   * 
   */
  function countNotProcessedPhotos(){
    $current_dir = sfConfig::get('sf_upload_dir').'/pr_repo';
    $dir = opendir($current_dir);        // Open the sucker
    $counter = 0;
    while ($file = readdir($dir)) {
      $parts = explode(".", $file);
      if (is_array($parts) && count($parts) == 2 && in_array($parts[1], array('png', 'jpg', 'PNG', 'JPG'))){
        $counter++;
      }
    }
    return $counter;
  }
  
  function countProcessedPhotos(){
    $current_dir = sfConfig::get('sf_web_dir').'/images/pr';
    $dir = opendir($current_dir);        // Open the sucker
    $counter = 0;
    while ($file = readdir($dir)) {
      $parts = explode(".", $file);
      if (is_array($parts) && count($parts) == 2 && in_array($parts[1], array('png', 'jpg', 'PNG', 'JPG'))){
        $counter++;
      }
    }
    return $counter;
  }
  
  function findPendentPhotos( $args = array(), $sort = 'asc' ){
    //print_r($args);
    $results = array();
    $current_dir = sfConfig::get('sf_upload_dir').'/pr_repo';
    $dir = opendir($current_dir);        // Open the sucker
    $counter = 0;
    while ($file = readdir($dir)) {
      $parts = explode("-", $file);
      if (is_array($parts) && count($parts) == 3 ){
        $valid = true;
        $dateFile = substr($parts[0], 0, 4).'-'.substr($parts[0], 4, 2).'-'.substr($parts[0], 6, 2);
        
        //Date filter
        if( isset($args['date_from']) && strlen($args['date_from']) && !mfData::isPosteriorEqual($dateFile, $args['date_from'])){
          $valid = false;
        }
        if( isset($args['date_to']) && strlen($args['date_to']) && !mfData::isAnteriorEqual($dateFile, $args['date_to'])){
          $valid = false;
        }
        
        //Photographer filter
        if( isset($args['photographer']) &&  strlen($args['photographer']) && $args['photographer'] != $parts[1]){
          $valid = false;
        }
        
        if( $valid ){
          $results[] = $file;
        }
      }
    }
    
    if( $sort == 'asc' ) {
      sort($results);
    } else {
      rsort($results);
    }
    
    return $results;
  }
  
  function findInvalidNamePhotos( $sort = 'asc' ){
    $results = array();
    $current_dir = sfConfig::get('sf_upload_dir').'/pr_repo';
    $dir = opendir($current_dir);        // Open the sucker
    $counter = 0;
    while ($file = readdir($dir)) {
      if($file != '.' && $file != '..'){
        $parts = explode(".", $file);
        if( !is_array($parts) || count($parts) != 2 || ($parts[1] != 'jpg' && $parts[1] != 'JPG') ){
          $results[] = $file;
        } else {
          $nameParts = explode('-', $parts[0]);
          if( !is_array($nameParts) || count($nameParts) != 3 ){
            $results[] = $file;
          }
        }
      }
    }
    if( $sort == 'asc' ) {
      sort($results);
    } else {
      rsort($results);
    }
    return $results;
  }
  
  function validateFilename($filename){
    $valid = false;
    $parts = explode(".", $filename);
    if( is_array($parts) && count($parts) == 2 && ($parts[1] == 'jpg' || $parts[1] == 'JPG') ){
      $nameParts = explode('-', $parts[0]);
      if( is_array($nameParts) && count($nameParts) == 3 ){
        $valid = true;
      }
    }
    return $valid;
  }
}
