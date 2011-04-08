<?php


/**
 * Base class that represents a query for the 'photo_i18n' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Apr  8 11:45:28 2011
 *
 * @method     PhotoI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PhotoI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method     PhotoI18nQuery orderByCaption($order = Criteria::ASC) Order by the caption column
 *
 * @method     PhotoI18nQuery groupById() Group by the id column
 * @method     PhotoI18nQuery groupByCulture() Group by the culture column
 * @method     PhotoI18nQuery groupByCaption() Group by the caption column
 *
 * @method     PhotoI18n findOne(PropelPDO $con = null) Return the first PhotoI18n matching the query
 * @method     PhotoI18n findOneById(int $id) Return the first PhotoI18n filtered by the id column
 * @method     PhotoI18n findOneByCulture(string $culture) Return the first PhotoI18n filtered by the culture column
 * @method     PhotoI18n findOneByCaption(string $caption) Return the first PhotoI18n filtered by the caption column
 *
 * @method     array findById(int $id) Return PhotoI18n objects filtered by the id column
 * @method     array findByCulture(string $culture) Return PhotoI18n objects filtered by the culture column
 * @method     array findByCaption(string $caption) Return PhotoI18n objects filtered by the caption column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePhotoI18nQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePhotoI18nQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'PhotoI18n', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Find object by primary key
	 * <code>
	 * $obj = $c->findPk(array(34, 634), $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = PhotoI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1])))))) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			return $this
				->filterByPrimaryKey($key)
				->findOne($con);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(PhotoI18nPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(PhotoI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(PhotoI18nPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(PhotoI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(PhotoI18nPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(PhotoI18nPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the culture column
	 * 
	 * @param     string $culture The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterByCulture($culture = null)
	{
		if(preg_match('/[\%\*]/', $culture)) {
			return $this->addUsingAlias(PhotoI18nPeer::CULTURE, str_replace('*', '%', $culture), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(PhotoI18nPeer::CULTURE, $culture, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the caption column
	 * 
	 * @param     string $caption The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterByCaption($caption = null)
	{
		if(preg_match('/[\%\*]/', $caption)) {
			return $this->addUsingAlias(PhotoI18nPeer::CAPTION, str_replace('*', '%', $caption), Criteria::LIKE);
		} else {
			return $this->addUsingAlias(PhotoI18nPeer::CAPTION, $caption, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Photo object
	 *
	 * @param     Photo $photo  the related object to use as filter
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo)
	{
		return $this
			->addUsingAlias(PhotoI18nPeer::ID, $photo->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the Photo relation Photo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PhotoQuery A secondary query class using the current class as primary query
	 */
	public function usePhotoQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Photo' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Photo', 'PhotoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PhotoI18n $photoI18n Object to remove from the list of results
	 *
	 * @return    PhotoI18nQuery The current query, for fluid interface
	 */
	public function prune($photoI18n = null)
	{
		if ($photoI18n) {
			$this->addCond('pruneCond0', $this->getAliasedColName(PhotoI18nPeer::ID), $photoI18n->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(PhotoI18nPeer::CULTURE), $photoI18n->getCulture(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

	/**
	 * Code to execute before every SELECT statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		return $this->preDelete($con);
	}

	/**
	 * Code to execute before every UPDATE statement
	 * 
	 * @param     array $values The associatiove array of columns and values for the update
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreUpdate(&$values, PropelPDO $con)
	{
		return $this->preUpdate($values, $con);
	}

} // BasePhotoI18nQuery
