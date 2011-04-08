<?php


/**
 * Base class that represents a query for the 'association' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Apr  8 11:45:24 2011
 *
 * @method     AssociationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AssociationQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     AssociationQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     AssociationQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     AssociationQuery groupById() Group by the id column
 * @method     AssociationQuery groupByCode() Group by the code column
 * @method     AssociationQuery groupByCreatedAt() Group by the created_at column
 * @method     AssociationQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     Association findOne(PropelPDO $con = null) Return the first Association matching the query
 * @method     Association findOneById(int $id) Return the first Association filtered by the id column
 * @method     Association findOneByCode(int $code) Return the first Association filtered by the code column
 * @method     Association findOneByCreatedAt(string $created_at) Return the first Association filtered by the created_at column
 * @method     Association findOneByUpdatedAt(string $updated_at) Return the first Association filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Association objects filtered by the id column
 * @method     array findByCode(int $code) Return Association objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return Association objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Association objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAssociationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAssociationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Association', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = AssociationPeer::getInstanceFromPool((string) $key)))) {
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
	 * $objs = $c->findPks(array(12, 56, 832), $con);
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
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AssociationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AssociationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(AssociationPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(AssociationPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     int|array $code The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null)
	{
		if (is_array($code)) {
			if (array_values($code) === $code) {
				return $this->addUsingAlias(AssociationPeer::CODE, $code, Criteria::IN);
			} else {
				if (isset($code['min'])) {
					$this->addUsingAlias(AssociationPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($code['max'])) {
					$this->addUsingAlias(AssociationPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(AssociationPeer::CODE, $code, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $created_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null)
	{
		if (is_array($createdAt)) {
			if (array_values($createdAt) === $createdAt) {
				return $this->addUsingAlias(AssociationPeer::CREATED_AT, $createdAt, Criteria::IN);
			} else {
				if (isset($createdAt['min'])) {
					$this->addUsingAlias(AssociationPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($createdAt['max'])) {
					$this->addUsingAlias(AssociationPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(AssociationPeer::CREATED_AT, $createdAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updated_at The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null)
	{
		if (is_array($updatedAt)) {
			if (array_values($updatedAt) === $updatedAt) {
				return $this->addUsingAlias(AssociationPeer::UPDATED_AT, $updatedAt, Criteria::IN);
			} else {
				if (isset($updatedAt['min'])) {
					$this->addUsingAlias(AssociationPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($updatedAt['max'])) {
					$this->addUsingAlias(AssociationPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(AssociationPeer::UPDATED_AT, $updatedAt, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related AssociationI18n object
	 *
	 * @param     AssociationI18n $associationI18n  the related object to use as filter
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterByAssociationI18n($associationI18n)
	{
		return $this
			->addUsingAlias(AssociationPeer::ID, $associationI18n->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the AssociationI18n relation AssociationI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AssociationI18nQuery A secondary query class using the current class as primary query
	 */
	public function useAssociationI18nQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('AssociationI18n' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AssociationI18n', 'AssociationI18nQuery');
	}

	/**
	 * Filter the query by a related Sighting object
	 *
	 * @param     Sighting $sighting  the related object to use as filter
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function filterBySighting($sighting)
	{
		return $this
			->addUsingAlias(AssociationPeer::ID, $sighting->getAssociationId(), Criteria::EQUAL);
	}

	/**
	 * Use the Sighting relation Sighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SightingQuery A secondary query class using the current class as primary query
	 */
	public function useSightingQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('Sighting' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sighting', 'SightingQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Association $association Object to remove from the list of results
	 *
	 * @return    AssociationQuery The current query, for fluid interface
	 */
	public function prune($association = null)
	{
		if ($association) {
			$this->addUsingAlias(AssociationPeer::ID, $association->getId(), Criteria::NOT_EQUAL);
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

} // BaseAssociationQuery
