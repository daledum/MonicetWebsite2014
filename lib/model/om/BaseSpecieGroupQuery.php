<?php


/**
 * Base class that represents a query for the 'specie_group' table.
 *
 * 
 *
 * @method     SpecieGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SpecieGroupQuery orderByScientificName($order = Criteria::ASC) Order by the scientific_name column
 * @method     SpecieGroupQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SpecieGroupQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SpecieGroupQuery groupById() Group by the id column
 * @method     SpecieGroupQuery groupByScientificName() Group by the scientific_name column
 * @method     SpecieGroupQuery groupByCreatedAt() Group by the created_at column
 * @method     SpecieGroupQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SpecieGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SpecieGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SpecieGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SpecieGroupQuery leftJoinSpecieGroupI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpecieGroupI18n relation
 * @method     SpecieGroupQuery rightJoinSpecieGroupI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpecieGroupI18n relation
 * @method     SpecieGroupQuery innerJoinSpecieGroupI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the SpecieGroupI18n relation
 *
 * @method     SpecieGroupQuery leftJoinSpecie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Specie relation
 * @method     SpecieGroupQuery rightJoinSpecie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Specie relation
 * @method     SpecieGroupQuery innerJoinSpecie($relationAlias = null) Adds a INNER JOIN clause to the query using the Specie relation
 *
 * @method     SpecieGroup findOne(PropelPDO $con = null) Return the first SpecieGroup matching the query
 * @method     SpecieGroup findOneOrCreate(PropelPDO $con = null) Return the first SpecieGroup matching the query, or a new SpecieGroup object populated from the query conditions when no match is found
 *
 * @method     SpecieGroup findOneById(int $id) Return the first SpecieGroup filtered by the id column
 * @method     SpecieGroup findOneByScientificName(string $scientific_name) Return the first SpecieGroup filtered by the scientific_name column
 * @method     SpecieGroup findOneByCreatedAt(string $created_at) Return the first SpecieGroup filtered by the created_at column
 * @method     SpecieGroup findOneByUpdatedAt(string $updated_at) Return the first SpecieGroup filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SpecieGroup objects filtered by the id column
 * @method     array findByScientificName(string $scientific_name) Return SpecieGroup objects filtered by the scientific_name column
 * @method     array findByCreatedAt(string $created_at) Return SpecieGroup objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SpecieGroup objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSpecieGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSpecieGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'SpecieGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SpecieGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SpecieGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SpecieGroupQuery) {
			return $criteria;
		}
		$query = new SpecieGroupQuery();
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
	 * @return    SpecieGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SpecieGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SpecieGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SpecieGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SpecieGroupPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the scientific_name column
	 * 
	 * @param     string $scientificName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByScientificName($scientificName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($scientificName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $scientificName)) {
				$scientificName = str_replace('*', '%', $scientificName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SpecieGroupPeer::SCIENTIFIC_NAME, $scientificName, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SpecieGroupPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SpecieGroupPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related SpecieGroupI18n object
	 *
	 * @param     SpecieGroupI18n $specieGroupI18n  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterBySpecieGroupI18n($specieGroupI18n, $comparison = null)
	{
		return $this
			->addUsingAlias(SpecieGroupPeer::ID, $specieGroupI18n->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the SpecieGroupI18n relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function joinSpecieGroupI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('SpecieGroupI18n');
		
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
			$this->addJoinObject($join, 'SpecieGroupI18n');
		}
		
		return $this;
	}

	/**
	 * Use the SpecieGroupI18n relation SpecieGroupI18n object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieGroupI18nQuery A secondary query class using the current class as primary query
	 */
	public function useSpecieGroupI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSpecieGroupI18n($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SpecieGroupI18n', 'SpecieGroupI18nQuery');
	}

	/**
	 * Filter the query by a related Specie object
	 *
	 * @param     Specie $specie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function filterBySpecie($specie, $comparison = null)
	{
		return $this
			->addUsingAlias(SpecieGroupPeer::ID, $specie->getSpecieGroupId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Specie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function joinSpecie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Specie');
		
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
			$this->addJoinObject($join, 'Specie');
		}
		
		return $this;
	}

	/**
	 * Use the Specie relation Specie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SpecieQuery A secondary query class using the current class as primary query
	 */
	public function useSpecieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSpecie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Specie', 'SpecieQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SpecieGroup $specieGroup Object to remove from the list of results
	 *
	 * @return    SpecieGroupQuery The current query, for fluid interface
	 */
	public function prune($specieGroup = null)
	{
		if ($specieGroup) {
			$this->addUsingAlias(SpecieGroupPeer::ID, $specieGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSpecieGroupQuery
