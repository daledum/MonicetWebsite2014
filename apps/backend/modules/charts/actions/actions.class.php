<?php

/**
 * charts actions.
 *
 * @package    monicet
 * @subpackage charts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class chartsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
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
  
  public function executeMonth(sfWebRequest $request)
  {
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
    
    $this->companies = CompanyPeer::doSelect(new Criteria());
    
  }
  
  public function executeSpecies(sfWebRequest $request) {
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
    
    $this->companies = CompanyPeer::doSelect(new Criteria());
    
  }
  
  public function executeDeparture(sfWebRequest $request) {
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
    
    $this->companies = CompanyPeer::doSelect(new Criteria());
    
  }
  
  public function executeGet_month_results(sfWebRequest $request)
  {
    $series = array();
    
    $g_infos = GeneralInfoPeer::doSelectByPeriod($request->getParameter('year'), 0);
    $items = array();
    
    if (!$this->getUser()->getGuardUser()->getIsSuperAdmin()) {
        $user = $this->getUser()->getGuardUser();
        $company = CompanyPeer::doSelectUserCompany($user->getId());
    }
    else {
        $company = CompanyPeer::retrieveByPK($request->getParameter('company_id'));
    }
    
    if ($request->getParameter('chart-item') == 0) {
        foreach ($g_infos as $gi) {
            if (!in_array($gi->getVesselId(),$items)) {
                $items[] = $gi->getVesselId();
                $data = array();
                if ($vessel = VesselPeer::retrieveByPK($gi->getVesselId())) {
                    
                    $valid = false;
                    if ($this->getUser()->getGuardUser()->getIsSuperAdmin()) {
                        if ($company) {
                            if ($vessel->getCompanyId() == $company->getId()) {
                                $valid = true;
                            }
                        }
                        else{
                            $valid = true;
                        }
                    }
                    else {
                        if ($vessel->getCompanyId() == $company->getId()) {
                            $valid = true;
                        }
                    }
                    
                    if ($valid) {
                        for ($i = 1; $i<=12; $i++) {
                            $data[] = $vessel->getTotalMonth($request->getParameter('year'), $i);
                        }
                        $series[$vessel->getName()] = $data;
                    }
                }
            }
        }
    }
    elseif ($request->getParameter('chart-item') == 1) {
        foreach ($g_infos as $gi) {
            if (!in_array($gi->getGuideId(),$items)) {
                $items[] = $gi->getGuideId();
                $data = array();
                if ($guide = GuidePeer::retrieveByPK($gi->getGuideId())) {
                    
                    $valid = false;
                    if ($this->getUser()->getGuardUser()->getIsSuperAdmin()) {
                        if ($company) {
                            if ($guide->getCompanyId() == $company->getId()) {
                                $valid = true;
                            }
                        }
                        else{
                            $valid = true;
                        }
                    }
                    else {
                        if ($guide->getCompanyId() == $company->getId()) {
                            $valid = true;
                        }
                    }
                    
                    if ($valid) {
                        for ($i = 1; $i<=12; $i++) {
                            $data[] = $guide->getTotalMonth($request->getParameter('year'), $i);
                        }
                        $series[$guide->getName()] = $data;
                    }
                }
            }
        }
    }
    
    foreach(range(1, 12) as $monthNumber) {
        $categories[] = date("M", mktime(0, 0, 0, $monthNumber, 1, 2000));
    }
    $this->series = $series;
    $this->categories = $categories;
  }

  public function executeGet_species_results(sfWebRequest $request)
  {
    $series = array();
    
    $g_infos = GeneralInfoPeer::doSelectByPeriod($request->getParameter('year'), 0);
    $items = array();
    
    if (!$this->getUser()->getGuardUser()->getIsSuperAdmin()) {
        $user = $this->getUser()->getGuardUser();
        $company = CompanyPeer::doSelectUserCompany($user->getId());
    }
    else {
        $company = CompanyPeer::retrieveByPK($request->getParameter('company_id'));
    }
    
    foreach ($g_infos as $gi) {
        foreach ($gi->getSpecies() as $specie){
            
            $valid = false;
            if ($this->getUser()->getGuardUser()->getIsSuperAdmin()) {
                if ($company) {
                    if ($company->getId() == $gi->getCompanyId()) {
                        $valid = true;
                    }
                }
                else{
                    $valid = true;
                }
            }
            else {
                if ($gi->getCompanyId() == $company->getId()) {
                    $valid = true;
                }
            }
            
            if ($valid) {
                if (!in_array($specie->getId(),$items)) {
                    $items[] = $specie->getId();
                    $data = array();
                    for ($i = 1; $i<=12; $i++) {
                        $data[] = $specie->getTotalMonth($request->getParameter('year'), $i);
                    }
                    $series[$specie->formattedString()] = $data;
                }
            }
        }
    }
    
    foreach(range(1, 12) as $monthNumber) {
        $categories[] = date("M", mktime(0, 0, 0, $monthNumber, 1, 2000));
    }
    $this->series = $this->orderSpeciesDesc($series);
    $this->categories = $categories;
  }

  public function executeGet_departure_results(sfWebRequest $request)
  {
    $series = array();
    $values = array();
    
    if (!$this->getUser()->getGuardUser()->getIsSuperAdmin()) {
        $user = $this->getUser()->getGuardUser();
        $company = CompanyPeer::doSelectUserCompany($user->getId());
    }
    else {
        $company = CompanyPeer::retrieveByPK($request->getParameter('company_id'));
    }
    
    if ($request->getParameter('chart-type') == 0) {
        foreach (range(1, 12) as $monthNumber) {
            $species = array();
            $categories[] = date("M", mktime(0, 0, 0, $monthNumber, 1, 2000));
            $g_infos = GeneralInfoPeer::doSelectByPeriod($request->getParameter('year'), $monthNumber);
            $total = count($g_infos);
            $with_species = 0;
            
            foreach (SpeciePeer::getAllOrdered() as $s) {
                $species[$s->getCode()] = 0;
            }
            
            foreach ($g_infos as $gi) {
                
                $valid = false;
                if ($this->getUser()->getGuardUser()->getIsSuperAdmin()) {
                    if ($company) {
                        if ($company->getId() == $gi->getCompanyId()) {
                            $valid = true;
                        }
                    }
                    else{
                        $valid = true;
                    }
                }
                else {
                    if ($gi->getCompanyId() == $company->getId()) {
                        $valid = true;
                    }
                }
                
                if ($valid) {
                    if (count($gi->getSpecies()) > 0) {
                        $species_counted = array();
                        foreach ($gi->getSpecies() as $s) {
                            if (!in_array($s->getCode(),$species_counted)) {
                                $species[$s->getCode()]++;
                                $species_counted[] = $s->getCode();
                            }
                        }
                    }
                }
            }
            
            foreach (SpeciePeer::getAllOrdered() as $s) {
                $series[$s->getCode()][] = ($total > 0)? round(($species[$s->getCode()]/$total) * 100, 2) : "null";
            }
        }
    }
    elseif ($request->getParameter('chart-type') == 1) {
        foreach (range(1, 12) as $monthNumber) {
            $categories[] = date("M", mktime(0, 0, 0, $monthNumber, 1, 2000));
            $g_infos = GeneralInfoPeer::doSelectByPeriod($request->getParameter('year'), $monthNumber);
            $total = count($g_infos);
            $totalSighted = array();
            
            foreach (SpeciePeer::getAllOrdered() as $s) {
                $totalSighted[$s->getCode()] = 0;
            }
            
            foreach ($g_infos as $gi) {
                
                $valid = false;
                if ($this->getUser()->getGuardUser()->getIsSuperAdmin()) {
                    if ($company) {
                        if ($company->getId() == $gi->getCompanyId()) {
                            $valid = true;
                        }
                    }
                    else{
                        $valid = true;
                    }
                }
                else {
                    if ($gi->getCompanyId() == $company->getId()) {
                        $valid = true;
                    }
                }
                
                if ($valid) {
                    foreach (SpeciePeer::getAllOrdered() as $s) {
                        $totalSighted[$s->getCode()] += $gi->getTotalSighted($s->getId());
                    }
                }
            }
            
            foreach (SpeciePeer::getAllOrdered() as $s) {
                $series[$s->getCode()][] = ($total > 0)? round(($totalSighted[$s->getCode()]/$total), 0) : "null";
            }
        }
    }
    
    
    //$series['values'] = $values;
    
    $this->series = $this->orderSpeciesDesc($series);
    $this->categories = $categories;
  }

    
  public function orderSpeciesDesc($array) {
      
      $pos = 0;
      $to_order = array();
      
      foreach ($array as $i => $values ) {
          $sum = 0;
          foreach ($values as $value) {
              if ($value != "null") {
                  $sum += $value;
              }
          }
          $to_order[$pos] = array('index' => $i, 'value' => $sum);
          $pos++;
      }
      
      $ordered = array();
      $is_ordered = false;
      do {
          $times = 0;
          for ($i = 1; $i < count($to_order); $i++) {
              if ($to_order[$i]['value'] > $to_order[$i-1]['value']) {
                  $temp = $to_order[$i-1];
                  $to_order[$i-1] = $to_order[$i];
                  $to_order[$i] = $temp;
                  $times++;
              }
          }
          
          if ($times == 0) {
              $is_ordered = true;
          }
          
      } while ($is_ordered == false);
      
      foreach ($to_order as $value) {
          $ordered[$value['index']] = $array[$value['index']];
      }
      
      return $ordered;
      
  }
    
  
}
