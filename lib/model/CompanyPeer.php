<?php


/**
 * Skeleton subclass for performing query and update operations on the 'company' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * Fri Dec 18 17:25:54 2009
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class CompanyPeer extends BaseCompanyPeer {
  public static function doSelectUserCompany($user_id)
  {
    $criteria = new Criteria();
    $criteria->addJoin(CompanyUserPeer::COMPANY_ID, CompanyPeer::ID, Criteria::LEFT_JOIN);
    $criteria->add(CompanyUserPeer::USER_ID, $user_id, Criteria::EQUAL);
    $criteria->setLimit(1);
    
    return CompanyPeer::doSelectOne($criteria);
  }
  
  public static function doSelectByCompany() {
        $user = sfContext::getInstance()->getUser()->getGuardUser();
        $company = CompanyPeer::doSelectUserCompany($user->getId());
        if ($company) {
            $query = CompanyQuery::create()
                ->filterById($company->getId())
                ->paginate();
        } else {
            $query = CompanyQuery::create()
                ->paginate();
        }
        return $query;
    }
  
  public static function getEmpresaByNome($nome){
    $c = new Criteria();
    $c->add(CompanyPeer::NAME, $nome);
    $e = CompanyPeer::doSelect($c);
    if(count($e)){
      return $e[0];
    }else{
      return false;
    }
    
  }
  
  
} // CompanyPeer
