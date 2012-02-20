<?php


/**
 * Base class that represents a query for the 'mark' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Mon Feb 20 16:38:40 2012
 *
 * @method     MarkQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MarkQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     MarkQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     MarkQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     MarkQuery groupById() Group by the id column
 * @method     MarkQuery groupByImage() Group by the image column
 * @method     MarkQuery groupByCreatedAt() Group by the created_at column
 * @method     MarkQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     MarkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MarkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MarkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MarkQuery leftJoinObservationPhotoMarkTail($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhotoMarkTail relation
 * @method     MarkQuery rightJoinObservationPhotoMarkTail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhotoMarkTail relation
 * @method     MarkQuery innerJoinObservationPhotoMarkTail($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhotoMarkTail relation
 *
 * @method     MarkQuery leftJoinObservationPhotoMarkDorsalLeft($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhotoMarkDorsalLeft relation
 * @method     MarkQuery rightJoinObservationPhotoMarkDorsalLeft($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhotoMarkDorsalLeft relation
 * @method     MarkQuery innerJoinObservationPhotoMarkDorsalLeft($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhotoMarkDorsalLeft relation
 *
 * @method     MarkQuery leftJoinObservationPhotoMarkDorsalRight($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhotoMarkDorsalRight relation
 * @method     MarkQuery rightJoinObservationPhotoMarkDorsalRight($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhotoMarkDorsalRight relation
 * @method     MarkQuery innerJoinObservationPhotoMarkDorsalRight($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhotoMarkDorsalRight relation
 *
 * @method     Mark findOne(PropelPDO $con = null) Return the first Mark matching the query
 * @method     Mark findOneOrCreate(PropelPDO $con = null) Return the first Mark matching the query, or a new Mark object populated from the query conditions when no match is found
 *
 * @method     Mark findOneById(int $id) Return the first Mark filtered by the id column
 * @method     Mark findOneByImage(string $image) Return the first Mark filtered by the image column
 * @method     Mark findOneByCreatedAt(string $created_at) Return the first Mark filtered by the created_at column
 * @method     Mark findOneByUpdatedAt(string $updated_at) Return the first Mark filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Mark objects filtered by the id column
 * @method     array findByImage(string $image) Return Mark objects filtered by the image column
 * @method     array findByCreatedAt(string $created_at) Return Mark objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Mark objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseMarkQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMarkQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Mark', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MarkQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MarkQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MarkQuery) {
			return $criteria;
		}
		$query = new MarkQuery();
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
	 * @return    Mark|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MarkPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MarkPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MarkPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MarkPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($image)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $image)) {
				$image = str_replace('*', '%', $image);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MarkPeer::IMAGE, $image, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(MarkPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(MarkPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MarkPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(MarkPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(MarkPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MarkPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related ObservationPhotoMarkTail object
	 *
	 * @param     ObservationPhotoMarkTail $observationPhotoMarkTail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByObservationPhotoMarkTail($observationPhotoMarkTail, $comparison = null)
	{
		return $this
			->addUsingAlias(MarkPeer::ID, $observationPhotoMarkTail->getMarkId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhotoMarkTail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function joinObservationPhotoMarkTail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhotoMarkTail');
		
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
			$this->addJoinObject($join, 'ObservationPhotoMarkTail');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhotoMarkTail relation ObservationPhotoMarkTail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkTailQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoMarkTailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinObservationPhotoMarkTail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhotoMarkTail', 'ObservationPhotoMarkTailQuery');
	}

	/**
	 * Filter the query by a related ObservationPhotoMarkDorsalLeft object
	 *
	 * @param     ObservationPhotoMarkDorsalLeft $observationPhotoMarkDorsalLeft  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByObservationPhotoMarkDorsalLeft($observationPhotoMarkDorsalLeft, $comparison = null)
	{
		return $this
			->addUsingAlias(MarkPeer::ID, $observationPhotoMarkDorsalLeft->getMarkId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhotoMarkDorsalLeft relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function joinObservationPhotoMarkDorsalLeft($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhotoMarkDorsalLeft');
		
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
			$this->addJoinObject($join, 'ObservationPhotoMarkDorsalLeft');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhotoMarkDorsalLeft relation ObservationPhotoMarkDorsalLeft object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoMarkDorsalLeftQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinObservationPhotoMarkDorsalLeft($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhotoMarkDorsalLeft', 'ObservationPhotoMarkDorsalLeftQuery');
	}

	/**
	 * Filter the query by a related ObservationPhotoMarkDorsalRight object
	 *
	 * @param     ObservationPhotoMarkDorsalRight $observationPhotoMarkDorsalRight  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function filterByObservationPhotoMarkDorsalRight($observationPhotoMarkDorsalRight, $comparison = null)
	{
		return $this
			->addUsingAlias(MarkPeer::ID, $observationPhotoMarkDorsalRight->getMarkId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhotoMarkDorsalRight relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function joinObservationPhotoMarkDorsalRight($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhotoMarkDorsalRight');
		
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
			$this->addJoinObject($join, 'ObservationPhotoMarkDorsalRight');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhotoMarkDorsalRight relation ObservationPhotoMarkDorsalRight object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkDorsalRightQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoMarkDorsalRightQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinObservationPhotoMarkDorsalRight($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhotoMarkDorsalRight', 'ObservationPhotoMarkDorsalRightQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Mark $mark Object to remove from the list of results
	 *
	 * @return    MarkQuery The current query, for fluid interface
	 */
	public function prune($mark = null)
	{
		if ($mark) {
			$this->addUsingAlias(MarkPeer::ID, $mark->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMarkQuery