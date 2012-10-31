<?php

require_once dirname(__FILE__).'/../lib/prObservationPhotoDorsalRightMarkGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/prObservationPhotoDorsalRightMarkGeneratorHelper.class.php';

class prObservationPhotoDorsalRightMarkActions extends autoPrObservationPhotoDorsalRightMarkActions
{
  public function executeDelete(sfWebRequest $request){
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));
    
    $observationPhotoId = $this->getRoute()->getObject()->getObservationPhotoDorsalRight()->getPhotoId();
    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');

    $this->redirect('@pr_observation_photo_characterize?id='.$observationPhotoId);
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $ObservationPhotoDorsalRightMark = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $ObservationPhotoDorsalRightMark)));

      $this->getUser()->setFlash('notice', $notice);
      
      $this->redirect('@pr_observation_photo_characterize?id='.$ObservationPhotoDorsalRightMark->getObservationPhotoDorsalRight()->getPhotoId());
    } else {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}