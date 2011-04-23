<?php

/**
 * maps actions.
 *
 * @package    monicet
 * @subpackage maps
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mapsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    
    $this->speciesList = SpeciePeer::getAllOrdered();
    
    $this->companies = CompanyPeer::doSelectByCompany();
    $this->associations = AssociationPeer::getAssociations();
    $this->behaviours = BehaviourPeer::getBehaviours();
    $this->sea_states = SeaStatePeer::getSeaStates();
    $this->visibilities = VisibilityPeer::getvisibilities();
    
    
  }
  
  public function executeTime(sfWebRequest $request){
    
    $this->speciesList = SpeciePeer::getAllOrdered();
    
    $this->companies = CompanyPeer::doSelectByCompany();
    $this->associations = AssociationPeer::getAssociations();
    $this->behaviours = BehaviourPeer::getBehaviours();
    $this->sea_states = SeaStatePeer::getSeaStates();
    $this->visibilities = VisibilityPeer::getvisibilities();
    
    
  }
  
  
}
