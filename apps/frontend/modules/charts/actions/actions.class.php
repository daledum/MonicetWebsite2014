<?php

/**
 * charts actions.
 *
 * @package    monicet
 * @subpackage charts
 * @author     Francisco Cardoso
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class chartsActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->active = 'charts';
    
    $this->associations = AssociationPeer::getAssociations();
    $this->behaviours = BehaviourPeer::getBehaviours();
    $this->sea_states = SeaStatePeer::getSeaStates();
    $this->visibilities = VisibilityPeer::getvisibilities();

    $c = new Criteria();
    $c->addAscendingOrderByColumn(GeneralInfoPeer::DATE);
    $firstGI = GeneralInfoPeer::doSelectOne($c);
    $c = new Criteria();
    $c->addDescendingOrderByColumn(GeneralInfoPeer::DATE);
    $lastGI = GeneralInfoPeer::doSelectOne($c);
    
    $explodedLastDate = explode('-', $lastGI->getDate());
    $explodedFirstDate = explode('-', $firstGI->getDate());
    $this->firstYear = $explodedFirstDate[0];
    $this->lastYear = $explodedLastDate[0];
    
    $months = array();
    
    foreach(range(1, 12) as $monthNumber) {
        $months[$monthNumber] = date("F", mktime(0, 0, 0, $monthNumber, 1, 2000));
    }
    
    $this->months = $months;
  }
  
  public function executeGet_results(sfWebRequest $request)
  {
    $categories = array();
    $series = array();
    $type = $request->getParameter('type');

    if($type == '1') {
        $gi_total = GeneralInfoPeer::getTotalForPeriod($type, $request->getParameter('year'), $request->getParameter('month'));
        $sighted_species = SpeciePeer::getSightedSpeciesOnYearAndMonth($request->getParameter('year'), $request->getParameter('month'));
        
        foreach( $sighted_species as $cont => $specie ) {
          $categories[] = $specie->getCode();
          $series[$specie->formattedString()] = array_fill(1, count($sighted_species), 0);
          $numGI = GeneralInfoPeer::countForSpecieOnMonth($specie->getId(), $request->getParameter('year'), $request->getParameter('month'));
          $series[$specie->formattedString()][$cont+1] = round(($numGI / $gi_total) * 100, 0);
        }
        
    } else {
      $year = $request->getParameter('year', date('Y')); 
      //$gi_total = GeneralInfoPeer::getTotalForPeriod(2, $year);
      $sighted_species = SpeciePeer::getSightedSpeciesOnYearAndMonth($year);
      foreach( $sighted_species as $specie ) {
        $series[$specie->formattedString()] = array();
        for( $month=1; $month<=12; $month++) {
          $gi_total = GeneralInfoPeer::getTotalForPeriod(2, $year, $month);
          $numGI = GeneralInfoPeer::countForSpecieOnMonth($specie->getId(), $year, $month);
          $series[$specie->formattedString()][$month] = round(($numGI / $gi_total) * 100, 0);
        }
      }
      
      foreach(range(1, 12) as $monthNumber) {
          $categories[] = date("M", mktime(0, 0, 0, $monthNumber, 1, 2000));
      }
    }
    
    // mostrar todos ou nenhum, ou predefinidamente mostrar as 4 espécies com mais resultados
    if ( $request->getParameter('select_all') != 'custom' ) {
      if ( $request->getParameter('select_all') == 'all' ) {
        $this->counter = count($series);
      }
      else {
        $this->counter = 0;
      }
    }
    else {
      $this->counter = 4;
    }
    
    $this->series = $this->orderSeriesDesc($series);
    $this->categories = $categories;
  }

  /*
   * Criar um array com as séries ordenadas por ordem decrescente
   */
  public function orderSeriesDesc($series) {
    $totals = array();
    foreach($series as $specie => $values) {
      $total = 0;
      for( $month=1; $month<=12; $month++) {
        $total += $values[$month];
      }
      $totals[$specie] = $total;
    }
    
    // ordenar o array por ordem decrescente
    arsort($totals);
    
    $ordered = array();
    foreach ($totals as $code => $value) {
      $ordered[$code] = $series[$code];
    }
    
    return $ordered;
  }
  
}
