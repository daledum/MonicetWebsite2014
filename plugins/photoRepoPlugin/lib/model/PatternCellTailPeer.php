<?php

class PatternCellTailPeer extends BasePatternCellTailPeer {
  
  public static function retrieveByNameAndPatternId($name, $patternId) {
    return PatternCellTailQuery::create()->filterByName($name)->filterByPatternId($patternId)->findOne();
  }

  public static function getForSelect($specieId = null, $with_empty = false, $empty_msg = 'Todas', $empty_code = '' ) {
    if( !$specieId) {
      return array();
    }
    
    $objectos = PatternCellTailQuery::create()
            ->usePatternQuery()
              ->filterBySpecieId($specieId)
            ->endUse()
            ->orderByName()
            ->find();
    
    if($with_empty) {
      return self::fromObjectosToArray($objectos, $empty=true, $empty_msg, $empty_code);
    } 
    return self::fromObjectosToArray($objectos, $empty=false, $empty_msg, $empty_code);
  }
  
  public static function fromObjectosToArray( $objectos, $empty = false, $empty_msg = 'Todas', $empty_code = '' ) {
    $resultados = array();
    if( $empty ) {
      $resultados[$empty_code] = '---'.$empty_msg.'---';
    }
    foreach( $objectos as $objecto ) {
        $resultados[$objecto->getId()] = $objecto->getName();
    }
    return $resultados;
  }
} // PatternCellTailPeer
