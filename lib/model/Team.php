<?php


/**
 * Skeleton subclass for representing a row from the 'team' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Tue Mar  9 10:35:03 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Team extends BaseTeam {
  public function save(PropelPDO $con = null)
  {
    parent::save($con);
    if ( $this->getPhoto() ){
      WideImage::load(sfConfig::get('sf_upload_dir').'/team/'.$this->getPhoto())->resize(140, 500)->saveToFile(sfConfig::get('sf_upload_dir').'/team/tn_'.$this->getPhoto()); 
    }
  }
} // Team
