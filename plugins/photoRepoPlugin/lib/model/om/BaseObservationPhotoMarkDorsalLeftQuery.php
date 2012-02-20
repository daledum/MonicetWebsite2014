<?php


/**
 * Base class that represents a query for the 'observation_photo_mark_dorsal_left' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Mon Feb 20 16:38:40 2012
 *
 * @method     ObservationPhotoMarkDorsalLeftQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ObservationPhotoMarkDorsalLeftQuery orderByPhotoId($order = Criteria::ASC) Order by the photo_id column
 * @method     ObservationPhotoMarkDorsalLeftQuery orderByMarkId($order = Criteria::ASC) Order by the mark_id column
 * @method     ObservationPhotoMarkDorsalLeftQuery orderByLine($order = Criteria::ASC) Order by the line column
 * @method     ObservationPhotoMarkDorsalLeftQuery orderByColumn($order = Criteria::ASC) Order by the column column
 * @method     ObservationPhotoMarkDorsalLeftQuery orderByObservation($order = Criteria::ASC) Order by the observation column
 *
 * @method     ObservationPhotoMarkDorsalLeftQuery groupById() Group by the id column
 * @method     ObservationPhotoMarkDorsalLeftQuery groupByPhotoId() Group by the photo_id column
 * @method     ObservationPhotoMarkDorsalLeftQuery groupByMarkId() Group by the mark_id column
 * @method     ObservationPhotoMarkDorsalLeftQuery groupByLine() Group by the line column
 * @method     ObservationPhotoMarkDorsalLeftQuery groupByColumn() Group by the column column
 * @method     ObservationPhotoMarkDorsalLeftQuery groupByObservation() Group by the observation column
 *
 * @method     ObservationPhotoMarkDorsalLeftQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ObservationPhotoMarkDorsalLeftQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ObservationPhotoMarkDorsalLeftQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ObservationPhotoMarkDorsalLeftQuery leftJoinObservationPhoto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ObservationPhoto relation
 * @method     ObservationPhotoMarkDorsalLeftQuery rightJoinObservationPhoto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ObservationPhoto relation
 * @method     ObservationPhotoMarkDorsalLeftQuery innerJoinObservationPhoto($relationAlias = null) Adds a INNER JOIN clause to the query using the ObservationPhoto relation
 *
 * @method     ObservationPhotoMarkDorsalLeftQuery leftJoinMark($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mark relation
 * @method     ObservationPhotoMarkDorsalLeftQuery rightJoinMark($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mark relation
 * @method     ObservationPhotoMarkDorsalLeftQuery innerJoinMark($relationAlias = null) Adds a INNER JOIN clause to the query using the Mark relation
 *
 * @method     ObservationPhotoMarkDorsalLeft findOne(PropelPDO $con = null) Return the first ObservationPhotoMarkDorsalLeft matching the query
 * @method     ObservationPhotoMarkDorsalLeft findOneOrCreate(PropelPDO $con = null) Return the first ObservationPhotoMarkDorsalLeft matching the query, or a new ObservationPhotoMarkDorsalLeft object populated from the query conditions when no match is found
 *
 * @method     ObservationPhotoMarkDorsalLeft findOneById(int $id) Return the first ObservationPhotoMarkDorsalLeft filtered by the id column
 * @method     ObservationPhotoMarkDorsalLeft findOneByPhotoId(int $photo_id) Return the first ObservationPhotoMarkDorsalLeft filtered by the photo_id column
 * @method     ObservationPhotoMarkDorsalLeft findOneByMarkId(int $mark_id) Return the first ObservationPhotoMarkDorsalLeft filtered by the mark_id column
 * @method     ObservationPhotoMarkDorsalLeft findOneByLine(int $line) Return the first ObservationPhotoMarkDorsalLeft filtered by the line column
 * @method     ObservationPhotoMarkDorsalLeft findOneByColumn(int $column) Return the first ObservationPhotoMarkDorsalLeft filtered by the column column
 * @method     ObservationPhotoMarkDorsalLeft findOneByObservation(string $observation) Return the first ObservationPhotoMarkDorsalLeft filtered by the observation column
 *
 * @method     array findById(int $id) Return ObservationPhotoMarkDorsalLeft objects filtered by the id column
 * @method     array findByPhotoId(int $photo_id) Return ObservationPhotoMarkDorsalLeft objects filtered by the photo_id column
 * @method     array findByMarkId(int $mark_id) Return ObservationPhotoMarkDorsalLeft objects filtered by the mark_id column
 * @method     array findByLine(int $line) Return ObservationPhotoMarkDorsalLeft objects filtered by the line column
 * @method     array findByColumn(int $column) Return ObservationPhotoMarkDorsalLeft objects filtered by the column column
 * @method     array findByObservation(string $observation) Return ObservationPhotoMarkDorsalLeft objects filtered by the observation column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseObservationPhotoMarkDorsalLeftQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseObservationPhotoMarkDorsalLeftQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'ObservationPhotoMarkDorsalLeft', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ObservationPhotoMarkDorsalLeftQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ObservationPhotoMarkDorsalLeftQuery) {
			return $criteria;
		}
		$query = new ObservationPhotoMarkDorsalLeftQuery();
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
	 * @return    ObservationPhotoMarkDorsalLeft|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ObservationPhotoMarkDorsalLeftPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the photo_id column
	 * 
	 * @param     int|array $photoId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByPhotoId($photoId = null, $comparison = null)
	{
		if (is_array($photoId)) {
			$useMinMax = false;
			if (isset($photoId['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::PHOTO_ID, $photoId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($photoId['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::PHOTO_ID, $photoId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::PHOTO_ID, $photoId, $comparison);
	}

	/**
	 * Filter the query on the mark_id column
	 * 
	 * @param     int|array $markId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByMarkId($markId = null, $comparison = null)
	{
		if (is_array($markId)) {
			$useMinMax = false;
			if (isset($markId['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::MARK_ID, $markId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($markId['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::MARK_ID, $markId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::MARK_ID, $markId, $comparison);
	}

	/**
	 * Filter the query on the line column
	 * 
	 * @param     int|array $line The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByLine($line = null, $comparison = null)
	{
		if (is_array($line)) {
			$useMinMax = false;
			if (isset($line['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::LINE, $line['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($line['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::LINE, $line['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::LINE, $line, $comparison);
	}

	/**
	 * Filter the query on the column column
	 * 
	 * @param     int|array $column The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByColumn($column = null, $comparison = null)
	{
		if (is_array($column)) {
			$useMinMax = false;
			if (isset($column['min'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::COLUMN, $column['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($column['max'])) {
				$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::COLUMN, $column['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::COLUMN, $column, $comparison);
	}

	/**
	 * Filter the query on the observation column
	 * 
	 * @param     string $observation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::OBSERVATION, $observation, $comparison);
	}

	/**
	 * Filter the query by a related ObservationPhoto object
	 *
	 * @param     ObservationPhoto $observationPhoto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByObservationPhoto($observationPhoto, $comparison = null)
	{
		return $this
			->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::PHOTO_ID, $observationPhoto->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ObservationPhoto relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
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
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function filterByMark($mark, $comparison = null)
	{
		return $this
			->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::MARK_ID, $mark->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Mark relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
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
	 * @param     ObservationPhotoMarkDorsalLeft $observationPhotoMarkDorsalLeft Object to remove from the list of results
	 *
	 * @return    ObservationPhotoMarkDorsalLeftQuery The current query, for fluid interface
	 */
	public function prune($observationPhotoMarkDorsalLeft = null)
	{
		if ($observationPhotoMarkDorsalLeft) {
			$this->addUsingAlias(ObservationPhotoMarkDorsalLeftPeer::ID, $observationPhotoMarkDorsalLeft->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseObservationPhotoMarkDorsalLeftQuery