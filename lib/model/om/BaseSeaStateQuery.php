<?php


/**
 * Base class that represents a query for the 'sea_state' table.
 *
 * 
 *
 * @method     SeaStateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SeaStateQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SeaStateQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SeaStateQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SeaStateQuery groupById() Group by the id column
 * @method     SeaStateQuery groupByCode() Group by the code column
 * @method     SeaStateQuery groupByCreatedAt() Group by the created_at column
 * @method     SeaStateQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SeaStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SeaStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SeaStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SeaStateQuery leftJoinSeaStateI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the SeaStateI18n relation
 * @method     SeaStateQuery rightJoinSeaStateI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SeaStateI18n relation
 * @method     SeaStateQuery innerJoinSeaStateI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the SeaStateI18n relation
 *
 * @method     SeaStateQuery leftJoinRecord($relationAlias = null) Adds a LEFT JOIN clause to the query using the Record relation
 * @method     SeaStateQuery rightJoinRecord($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Record relation
 * @method     SeaStateQuery innerJoinRecord($relationAlias = null) Adds a INNER JOIN clause to the query using the Record relation
 *
 * @method     SeaState findOne(PropelPDO $con = null) Return the first SeaState matching the query
 * @method     SeaState findOneOrCreate(PropelPDO $con = null) Return the first SeaState matching the query, or a new SeaState object populated from the query conditions when no match is found
 *
 * @method     SeaState findOneById(int $id) Return the first SeaState filtered by the id column
 * @method     SeaState findOneByCode(int $code) Return the first SeaState filtered by the code column
 * @method     SeaState findOneByCreatedAt(string $created_at) Return the first SeaState filtered by the created_at column
 * @method     SeaState findOneByUpdatedAt(string $updated_at) Return the first SeaState filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SeaState objects filtered by the id column
 * @method     array findByCode(int $code) Return SeaState objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return SeaState objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SeaState objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSeaStateQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSeaStateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'SeaState', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SeaStateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SeaStateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SeaStateQuery) {
			return $criteria;
		}
		$query = new SeaStateQuery();
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
	 * @return    SeaState|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SeaStatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SeaStatePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SeaStatePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SeaStatePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     int|array $code The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (is_array($code)) {
			$useMinMax = false;
			if (isset($code['min'])) {
				$this->addUsingAlias(SeaStatePeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($code['max'])) {
				$this->addUsingAlias(SeaStatePeer::CODE, $code['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SeaStatePeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SeaStatePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SeaStatePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SeaStatePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(SeaStatePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(SeaStatePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SeaStatePeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related SeaStateI18n object
	 *
	 * @param     SeaStateI18n $seaStateI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterBySeaStateI18n($seaStateI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(SeaStatePeer::ID, $seaStateI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the SeaStateI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function joinSeaStateI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('SeaStateI18n');
		
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
			$this->addJoinObject($join, 'SeaStateI18n');
		}
		
		return $this;
	}

	/**
	 * Use the SeaStateI18n relation SeaStateI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SeaStateI18nQuery A secondary query class using the current class as primary query
	 */
	public function useSeaStateI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSeaStateI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SeaStateI18n', 'SeaStateI18nQuery');
	}

	/**
	 * Filter the query by a related Record object
	 *
	 * @param     Record $record  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function filterByRecord($record, $comparison = null)
	{
		return $this
			->addUsingAlias(SeaStatePeer::ID, $record->getSeaStateId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Record relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function joinRecord($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Record');
		
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
			$this->addJoinObject($join, 'Record');
		}
		
		return $this;
	}

	/**
	 * Use the Record relation Record object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RecordQuery A secondary query class using the current class as primary query
	 */
	public function useRecordQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRecord($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Record', 'RecordQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SeaState $seaState Object to remove from the list of results
	 *
	 * @return    SeaStateQuery The current query, for fluid interface
	 */
	public function prune($seaState = null)
	{
		if ($seaState) {
			$this->addUsingAlias(SeaStatePeer::ID, $seaState->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSeaStateQuery
