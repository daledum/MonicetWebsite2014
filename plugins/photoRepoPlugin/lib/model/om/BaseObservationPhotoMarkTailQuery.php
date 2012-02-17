<?php


/**
 * Base class that represents a query for the 'observation_photo_mark_tail' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Fri Feb 17 14:53:21 2012
 *
 * @method     ObservationPhotoMarkTailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ObservationPhotoMarkTailQuery orderByPhotoId($order = Criteria::ASC) Order by the photo_id column
 * @method     ObservationPhotoMarkTailQuery orderByMarkId($order = Criteria::ASC) Order by the mark_id column
 * @method     ObservationPhotoMarkTailQuery orderByLine($order = Criteria::ASC) Order by the line column
 * @method     ObservationPhotoMarkTailQuery orderByColumn($order = Criteria::ASC) Order by the column column
 * @method     ObservationPhotoMarkTailQuery orderByObservation($order = Criteria::ASC) Order by the observation column
 *
 * @method     ObservationPhotoMarkTailQuery groupById() Group by the id column
 * @method     ObservationPhotoMarkTailQuery groupByPhotoId() Group by the photo_id column
 * @method     ObservationPhotoMarkTailQuery groupByMarkId() Group by the mark_id column
 * @method     ObservationPhotoMarkTailQuery groupByLine() Group by the line column
 * @method     ObservationPhotoMarkTailQuery groupByColumn() Group by the column column
 * @method     ObservationPhotoMarkTailQuery groupByObservation() Group by the observation column
 *
 * @method     ObservationPhotoMarkTailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ObservationPhotoMarkTailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ObservationPhotoMarkTailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ObservationPhotoMarkTailQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     ObservationPhotoMarkTailQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     ObservationPhotoMarkTailQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     ObservationPhotoMarkTailQuery leftJoinMark($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mark relation
 * @method     ObservationPhotoMarkTailQuery rightJoinMark($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mark relation
 * @method     ObservationPhotoMarkTailQuery innerJoinMark($relationAlias = null) Adds a INNER JOIN clause to the query using the Mark relation
 *
 * @method     ObservationPhotoMarkTail findOne(PropelPDO $con = null) Return the first ObservationPhotoMarkTail matching the query
 * @method     ObservationPhotoMarkTail findOneOrCreate(PropelPDO $con = null) Return the first ObservationPhotoMarkTail matching the query, or a new ObservationPhotoMarkTail object populated from the query conditions when no match is found
 *
 * @method     ObservationPhotoMarkTail findOneById(int $id) Return the first ObservationPhotoMarkTail filtered by the id column
 * @method     ObservationPhotoMarkTail findOneByPhotoId(int $photo_id) Return the first ObservationPhotoMarkTail filtered by the photo_id column
 * @method     ObservationPhotoMarkTail findOneByMarkId(int $mark_id) Return the first ObservationPhotoMarkTail filtered by the mark_id column
 * @method     ObservationPhotoMarkTail findOneByLine(int $line) Return the first ObservationPhotoMarkTail filtered by the line column
 * @method     ObservationPhotoMarkTail findOneByColumn(int $column) Return the first ObservationPhotoMarkTail filtered by the column column
 * @method     ObservationPhotoMarkTail findOneByObservation(string $observation) Return the first ObservationPhotoMarkTail filtered by the observation column
 *
 * @method     array findById(int $id) Return ObservationPhotoMarkTail objects filtered by the id column
 * @method     array findByPhotoId(int $photo_id) Return ObservationPhotoMarkTail objects filtered by the photo_id column
 * @method     array findByMarkId(int $mark_id) Return ObservationPhotoMarkTail objects filtered by the mark_id column
 * @method     array findByLine(int $line) Return ObservationPhotoMarkTail objects filtered by the line column
 * @method     array findByColumn(int $column) Return ObservationPhotoMarkTail objects filtered by the column column
 * @method     array findByObservation(string $observation) Return ObservationPhotoMarkTail objects filtered by the observation column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseObservationPhotoMarkTailQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseObservationPhotoMarkTailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'ObservationPhotoMarkTail', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ObservationPhotoMarkTailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ObservationPhotoMarkTailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ObservationPhotoMarkTailQuery) {
			return $criteria;
		}
		$query = new ObservationPhotoMarkTailQuery();
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
	 * @return    ObservationPhotoMarkTail|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ObservationPhotoMarkTailPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the photo_id column
	 * 
	 * @param     int|array $photoId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByPhotoId($photoId = null, $comparison = null)
	{
		if (is_array($photoId)) {
			$useMinMax = false;
			if (isset($photoId['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::PHOTO_ID, $photoId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($photoId['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::PHOTO_ID, $photoId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::PHOTO_ID, $photoId, $comparison);
	}

	/**
	 * Filter the query on the mark_id column
	 * 
	 * @param     int|array $markId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByMarkId($markId = null, $comparison = null)
	{
		if (is_array($markId)) {
			$useMinMax = false;
			if (isset($markId['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::MARK_ID, $markId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($markId['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::MARK_ID, $markId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::MARK_ID, $markId, $comparison);
	}

	/**
	 * Filter the query on the line column
	 * 
	 * @param     int|array $line The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByLine($line = null, $comparison = null)
	{
		if (is_array($line)) {
			$useMinMax = false;
			if (isset($line['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::LINE, $line['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($line['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::LINE, $line['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::LINE, $line, $comparison);
	}

	/**
	 * Filter the query on the column column
	 * 
	 * @param     int|array $column The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByColumn($column = null, $comparison = null)
	{
		if (is_array($column)) {
			$useMinMax = false;
			if (isset($column['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::COLUMN, $column['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($column['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkTailPeer::COLUMN, $column['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::COLUMN, $column, $comparison);
	}

	/**
	 * Filter the query on the observation column
	 * 
	 * @param     string $observation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByObservation($observation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($observation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $observation)) {
				$observation = str_replace('*', '%', $observation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkTailPeer::OBSERVATION, $observation, $comparison);
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(ObservationPhotoMarkTailPeer::PHOTO_ID, $observationPhoto->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function joinObservationPhoto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ObservationPhoto');
		
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
			$this->addJoinObject($join, 'ObservationPhoto');
		}
		
		return $this;
	}

	/**
	 * Use the ObservationPhoto relation ObservationPhoto object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoQuery A secondary query class using the current class as primary query
	 */
	public function useObservationPhotoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinObservationPhoto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ObservationPhoto', 'ObservationPhotoQuery');
	}

	/**
	 * Filter the query by a related Mark object
	 *
	 * @param     Mark $mark  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function filterByMark($mark, $comparison = null)
	{
		return $this
			->addUsingAlias(ObservationPhotoMarkTailPeer::MARK_ID, $mark->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Mark relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function joinMark($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Mark');
		
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
			$this->addJoinObject($join, 'Mark');
		}
		
		return $this;
	}

	/**
	 * Use the Mark relation Mark object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MarkQuery A secondary query class using the current class as primary query
	 */
	public function useMarkQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMark($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Mark', 'MarkQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ObservationPhotoMarkTail $observationPhotoMarkTail Object to remove from the list of results
	 *
	 * @return    ObservationPhotoMarkTailQuery The current query, for fluid interface
	 */
	public function prune($observationPhotoMarkTail = null)
	{
		if ($observationPhotoMarkTail) {
			$this->addUsingAlias(ObservationPhotoMarkTailPeer::ID, $observationPhotoMarkTail->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseObservationPhotoMarkTailQuery
