<?php


/**
 * Base class that represents a query for the 'guide' table.
 *
 * 
 *
 * @method     GuideQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GuideQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method     GuideQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GuideQuery orderByObservations($order = Criteria::ASC) Order by the observations column
 * @method     GuideQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     GuideQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     GuideQuery groupById() Group by the id column
 * @method     GuideQuery groupByCompanyId() Group by the company_id column
 * @method     GuideQuery groupByName() Group by the name column
 * @method     GuideQuery groupByObservations() Group by the observations column
 * @method     GuideQuery groupByCreatedAt() Group by the created_at column
 * @method     GuideQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     GuideQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GuideQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GuideQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GuideQuery leftJoinCompany($relationAlias = null) Adds a LEFT JOIN clause to the query using the Company relation
 * @method     GuideQuery rightJoinCompany($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Company relation
 * @method     GuideQuery innerJoinCompany($relationAlias = null) Adds a INNER JOIN clause to the query using the Company relation
 *
 * @method     GuideQuery leftJoinGeneralInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneralInfo relation
 * @method     GuideQuery rightJoinGeneralInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneralInfo relation
 * @method     GuideQuery innerJoinGeneralInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneralInfo relation
 *
 * @method     Guide findOne(PropelPDO $con = null) Return the first Guide matching the query
 * @method     Guide findOneOrCreate(PropelPDO $con = null) Return the first Guide matching the query, or a new Guide object populated from the query conditions when no match is found
 *
 * @method     Guide findOneById(int $id) Return the first Guide filtered by the id column
 * @method     Guide findOneByCompanyId(int $company_id) Return the first Guide filtered by the company_id column
 * @method     Guide findOneByName(string $name) Return the first Guide filtered by the name column
 * @method     Guide findOneByObservations(string $observations) Return the first Guide filtered by the observations column
 * @method     Guide findOneByCreatedAt(string $created_at) Return the first Guide filtered by the created_at column
 * @method     Guide findOneByUpdatedAt(string $updated_at) Return the first Guide filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Guide objects filtered by the id column
 * @method     array findByCompanyId(int $company_id) Return Guide objects filtered by the company_id column
 * @method     array findByName(string $name) Return Guide objects filtered by the name column
 * @method     array findByObservations(string $observations) Return Guide objects filtered by the observations column
 * @method     array findByCreatedAt(string $created_at) Return Guide objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Guide objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseGuideQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGuideQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Guide', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GuideQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GuideQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GuideQuery) {
			return $criteria;
		}
		$query = new GuideQuery();
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
	 * @return    Guide|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GuidePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GuidePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GuidePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GuidePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the company_id column
	 * 
	 * @param     int|array $companyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByCompanyId($companyId = null, $comparison = null)
	{
		if (is_array($companyId)) {
			$useMinMax = false;
			if (isset($companyId['min'])) {
				$this->addUsingAlias(GuidePeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($companyId['max'])) {
				$this->addUsingAlias(GuidePeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GuidePeer::COMPANY_ID, $companyId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GuidePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the observations column
	 * 
	 * @param     string $observations The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByObservations($observations = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($observations)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $observations)) {
				$observations = str_replace('*', '%', $observations);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GuidePeer::OBSERVATIONS, $observations, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(GuidePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(GuidePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GuidePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(GuidePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(GuidePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GuidePeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related Company object
	 *
	 * @param     Company $company  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByCompany($company, $comparison = null)
	{
		return $this
			->addUsingAlias(GuidePeer::COMPANY_ID, $company->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Company relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function joinCompany($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Company');
		
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
			$this->addJoinObject($join, 'Company');
		}
		
		return $this;
	}

	/**
	 * Use the Company relation Company object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CompanyQuery A secondary query class using the current class as primary query
	 */
	public function useCompanyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCompany($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
	}

	/**
	 * Filter the query by a related GeneralInfo object
	 *
	 * @param     GeneralInfo $generalInfo  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function filterByGeneralInfo($generalInfo, $comparison = null)
	{
		return $this
			->addUsingAlias(GuidePeer::ID, $generalInfo->getGuideId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the GeneralInfo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function joinGeneralInfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GeneralInfo');
		
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
			$this->addJoinObject($join, 'GeneralInfo');
		}
		
		return $this;
	}

	/**
	 * Use the GeneralInfo relation GeneralInfo object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneralInfoQuery A secondary query class using the current class as primary query
	 */
	public function useGeneralInfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinGeneralInfo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GeneralInfo', 'GeneralInfoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Guide $guide Object to remove from the list of results
	 *
	 * @return    GuideQuery The current query, for fluid interface
	 */
	public function prune($guide = null)
	{
		if ($guide) {
			$this->addUsingAlias(GuidePeer::ID, $guide->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGuideQuery
