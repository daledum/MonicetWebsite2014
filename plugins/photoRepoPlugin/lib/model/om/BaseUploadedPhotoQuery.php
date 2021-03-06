<?php


/**
 * Base class that represents a query for the 'uploaded_photo' table.
 *
 * 
 *
 * @method     UploadedPhotoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UploadedPhotoQuery orderByUploaderName($order = Criteria::ASC) Order by the uploader_name column
 * @method     UploadedPhotoQuery orderByUploaderEmail($order = Criteria::ASC) Order by the uploader_email column
 * @method     UploadedPhotoQuery orderByPhotoDate($order = Criteria::ASC) Order by the photo_date column
 * @method     UploadedPhotoQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     UploadedPhotoQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     UploadedPhotoQuery orderByProcessed($order = Criteria::ASC) Order by the processed column
 * @method     UploadedPhotoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     UploadedPhotoQuery groupById() Group by the id column
 * @method     UploadedPhotoQuery groupByUploaderName() Group by the uploader_name column
 * @method     UploadedPhotoQuery groupByUploaderEmail() Group by the uploader_email column
 * @method     UploadedPhotoQuery groupByPhotoDate() Group by the photo_date column
 * @method     UploadedPhotoQuery groupByPhoto() Group by the photo column
 * @method     UploadedPhotoQuery groupByComment() Group by the comment column
 * @method     UploadedPhotoQuery groupByProcessed() Group by the processed column
 * @method     UploadedPhotoQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     UploadedPhotoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UploadedPhotoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UploadedPhotoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UploadedPhoto findOne(PropelPDO $con = null) Return the first UploadedPhoto matching the query
 * @method     UploadedPhoto findOneOrCreate(PropelPDO $con = null) Return the first UploadedPhoto matching the query, or a new UploadedPhoto object populated from the query conditions when no match is found
 *
 * @method     UploadedPhoto findOneById(int $id) Return the first UploadedPhoto filtered by the id column
 * @method     UploadedPhoto findOneByUploaderName(string $uploader_name) Return the first UploadedPhoto filtered by the uploader_name column
 * @method     UploadedPhoto findOneByUploaderEmail(string $uploader_email) Return the first UploadedPhoto filtered by the uploader_email column
 * @method     UploadedPhoto findOneByPhotoDate(string $photo_date) Return the first UploadedPhoto filtered by the photo_date column
 * @method     UploadedPhoto findOneByPhoto(string $photo) Return the first UploadedPhoto filtered by the photo column
 * @method     UploadedPhoto findOneByComment(string $comment) Return the first UploadedPhoto filtered by the comment column
 * @method     UploadedPhoto findOneByProcessed(boolean $processed) Return the first UploadedPhoto filtered by the processed column
 * @method     UploadedPhoto findOneByCreatedAt(string $created_at) Return the first UploadedPhoto filtered by the created_at column
 *
 * @method     array findById(int $id) Return UploadedPhoto objects filtered by the id column
 * @method     array findByUploaderName(string $uploader_name) Return UploadedPhoto objects filtered by the uploader_name column
 * @method     array findByUploaderEmail(string $uploader_email) Return UploadedPhoto objects filtered by the uploader_email column
 * @method     array findByPhotoDate(string $photo_date) Return UploadedPhoto objects filtered by the photo_date column
 * @method     array findByPhoto(string $photo) Return UploadedPhoto objects filtered by the photo column
 * @method     array findByComment(string $comment) Return UploadedPhoto objects filtered by the comment column
 * @method     array findByProcessed(boolean $processed) Return UploadedPhoto objects filtered by the processed column
 * @method     array findByCreatedAt(string $created_at) Return UploadedPhoto objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseUploadedPhotoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUploadedPhotoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'UploadedPhoto', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UploadedPhotoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UploadedPhotoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UploadedPhotoQuery) {
			return $criteria;
		}
		$query = new UploadedPhotoQuery();
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
	 * @return    UploadedPhoto|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UploadedPhotoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UploadedPhotoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UploadedPhotoPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UploadedPhotoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the uploader_name column
	 * 
	 * @param     string $uploaderName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByUploaderName($uploaderName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($uploaderName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $uploaderName)) {
				$uploaderName = str_replace('*', '%', $uploaderName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::UPLOADER_NAME, $uploaderName, $comparison);
	}

	/**
	 * Filter the query on the uploader_email column
	 * 
	 * @param     string $uploaderEmail The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByUploaderEmail($uploaderEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($uploaderEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $uploaderEmail)) {
				$uploaderEmail = str_replace('*', '%', $uploaderEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::UPLOADER_EMAIL, $uploaderEmail, $comparison);
	}

	/**
	 * Filter the query on the photo_date column
	 * 
	 * @param     string|array $photoDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByPhotoDate($photoDate = null, $comparison = null)
	{
		if (is_array($photoDate)) {
			$useMinMax = false;
			if (isset($photoDate['min'])) {
				$this->addUsingAlias(UploadedPhotoPeer::PHOTO_DATE, $photoDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($photoDate['max'])) {
				$this->addUsingAlias(UploadedPhotoPeer::PHOTO_DATE, $photoDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::PHOTO_DATE, $photoDate, $comparison);
	}

	/**
	 * Filter the query on the photo column
	 * 
	 * @param     string $photo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photo)) {
				$photo = str_replace('*', '%', $photo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::PHOTO, $photo, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the processed column
	 * 
	 * @param     boolean|string $processed The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByProcessed($processed = null, $comparison = null)
	{
		if (is_string($processed)) {
			$processed = in_array(strtolower($processed), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(UploadedPhotoPeer::PROCESSED, $processed, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(UploadedPhotoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(UploadedPhotoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UploadedPhotoPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UploadedPhoto $uploadedPhoto Object to remove from the list of results
	 *
	 * @return    UploadedPhotoQuery The current query, for fluid interface
	 */
	public function prune($uploadedPhoto = null)
	{
		if ($uploadedPhoto) {
			$this->addUsingAlias(UploadedPhotoPeer::ID, $uploadedPhoto->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUploadedPhotoQuery
