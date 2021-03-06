<?php


/**
 * Base class that represents a query for the 'direction' table.
 *
 * 
 *
 * @method     DirectionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DirectionQuery orderByAcronym($order = Criteria::ASC) Order by the acronym column
 * @method     DirectionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     DirectionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     DirectionQuery groupById() Group by the id column
 * @method     DirectionQuery groupByAcronym() Group by the acronym column
 * @method     DirectionQuery groupByCreatedAt() Group by the created_at column
 * @method     DirectionQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     DirectionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DirectionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DirectionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DirectionQuery leftJoinWatchSighting($relationAlias = null) Adds a LEFT JOIN clause to the query using the WatchSighting relation
 * @method     DirectionQuery rightJoinWatchSighting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WatchSighting relation
 * @method     DirectionQuery innerJoinWatchSighting($relationAlias = null) Adds a INNER JOIN clause to the query using the WatchSighting relation
 *
 * @method     Direction findOne(PropelPDO $con = null) Return the first Direction matching the query
 * @method     Direction findOneOrCreate(PropelPDO $con = null) Return the first Direction matching the query, or a new Direction object populated from the query conditions when no match is found
 *
 * @method     Direction findOneById(int $id) Return the first Direction filtered by the id column
 * @method     Direction findOneByAcronym(string $acronym) Return the first Direction filtered by the acronym column
 * @method     Direction findOneByCreatedAt(string $created_at) Return the first Direction filtered by the created_at column
 * @method     Direction findOneByUpdatedAt(string $updated_at) Return the first Direction filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Direction objects filtered by the id column
 * @method     array findByAcronym(string $acronym) Return Direction objects filtered by the acronym column
 * @method     array findByCreatedAt(string $created_at) Return Direction objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Direction objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDirectionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDirectionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Direction', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DirectionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DirectionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DirectionQuery) {
			return $criteria;
		}
		$query = new DirectionQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
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
	 * @return    Direction|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DirectionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
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
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DirectionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DirectionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DirectionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the acronym column
	 * 
	 * @param     string $acronym The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByAcronym($acronym = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($acronym)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $acronym)) {
				$acronym = str_replace('*', '%', $acronym);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DirectionPeer::ACRONYM, $acronym, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(DirectionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(DirectionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DirectionPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(DirectionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(DirectionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DirectionPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related WatchSighting object
	 *
	 * @param     WatchSighting $watchSighting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function filterByWatchSighting($watchSighting, $comparison = null)
	{
		return $this
			->addUsingAlias(DirectionPeer::ID, $watchSighting->getDirectionId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the WatchSighting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function joinWatchSighting($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('WatchSighting');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'WatchSighting');
		}
		
		return $this;
	}

	/**
	 * Use the WatchSighting relation WatchSighting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    WatchSightingQuery A secondary query class using the current class as primary query
	 */
	public function useWatchSightingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinWatchSighting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'WatchSighting', 'WatchSightingQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Direction $direction Object to remove from the list of results
	 *
	 * @return    DirectionQuery The current query, for fluid interface
	 */
	public function prune($direction = null)
	{
		if ($direction) {
			$this->addUsingAlias(DirectionPeer::ID, $direction->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDirectionQuery
