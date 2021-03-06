<?php


/**
 * Base static class for performing query and update operations on the 'observation_photo' table.
 *
 * 
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseObservationPhotoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'observation_photo';

	/** the related Propel class for this table */
	const OM_CLASS = 'ObservationPhoto';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'plugins.photoRepoPlugin.lib.model.ObservationPhoto';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ObservationPhotoTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 28;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'observation_photo.ID';

	/** the column name for the CODE field */
	const CODE = 'observation_photo.CODE';

	/** the column name for the FILE_NAME field */
	const FILE_NAME = 'observation_photo.FILE_NAME';

	/** the column name for the PHOTO_DATE field */
	const PHOTO_DATE = 'observation_photo.PHOTO_DATE';

	/** the column name for the PHOTO_TIME field */
	const PHOTO_TIME = 'observation_photo.PHOTO_TIME';

	/** the column name for the INDIVIDUAL_ID field */
	const INDIVIDUAL_ID = 'observation_photo.INDIVIDUAL_ID';

	/** the column name for the SPECIE_ID field */
	const SPECIE_ID = 'observation_photo.SPECIE_ID';

	/** the column name for the ISLAND field */
	const ISLAND = 'observation_photo.ISLAND';

	/** the column name for the BODY_PART_ID field */
	const BODY_PART_ID = 'observation_photo.BODY_PART_ID';

	/** the column name for the GENDER field */
	const GENDER = 'observation_photo.GENDER';

	/** the column name for the AGE_GROUP field */
	const AGE_GROUP = 'observation_photo.AGE_GROUP';

	/** the column name for the BEHAVIOUR_ID field */
	const BEHAVIOUR_ID = 'observation_photo.BEHAVIOUR_ID';

	/** the column name for the LATITUDE field */
	const LATITUDE = 'observation_photo.LATITUDE';

	/** the column name for the LONGITUDE field */
	const LONGITUDE = 'observation_photo.LONGITUDE';

	/** the column name for the COMPANY_ID field */
	const COMPANY_ID = 'observation_photo.COMPANY_ID';

	/** the column name for the VESSEL_ID field */
	const VESSEL_ID = 'observation_photo.VESSEL_ID';

	/** the column name for the PHOTOGRAPHER_ID field */
	const PHOTOGRAPHER_ID = 'observation_photo.PHOTOGRAPHER_ID';

	/** the column name for the KIND_OF_PHOTO field */
	const KIND_OF_PHOTO = 'observation_photo.KIND_OF_PHOTO';

	/** the column name for the PHOTO_QUALITY field */
	const PHOTO_QUALITY = 'observation_photo.PHOTO_QUALITY';

	/** the column name for the SIGHTING_ID field */
	const SIGHTING_ID = 'observation_photo.SIGHTING_ID';

	/** the column name for the IS_BEST field */
	const IS_BEST = 'observation_photo.IS_BEST';

	/** the column name for the NOTES field */
	const NOTES = 'observation_photo.NOTES';

	/** the column name for the UPLOADED_AT field */
	const UPLOADED_AT = 'observation_photo.UPLOADED_AT';

	/** the column name for the STATUS field */
	const STATUS = 'observation_photo.STATUS';

	/** the column name for the LAST_EDITED_BY field */
	const LAST_EDITED_BY = 'observation_photo.LAST_EDITED_BY';

	/** the column name for the VALIDATED_BY field */
	const VALIDATED_BY = 'observation_photo.VALIDATED_BY';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'observation_photo.CREATED_AT';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'observation_photo.UPDATED_AT';

	/**
	 * An identiy map to hold any loaded instances of ObservationPhoto objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ObservationPhoto[]
	 */
	public static $instances = array();


	// symfony behavior
	
	/**
	 * Indicates whether the current model includes I18N.
	 */
	const IS_I18N = true;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Code', 'FileName', 'PhotoDate', 'PhotoTime', 'IndividualId', 'SpecieId', 'Island', 'BodyPartId', 'Gender', 'AgeGroup', 'BehaviourId', 'Latitude', 'Longitude', 'CompanyId', 'VesselId', 'PhotographerId', 'KindOfPhoto', 'PhotoQuality', 'SightingId', 'IsBest', 'Notes', 'UploadedAt', 'Status', 'LastEditedBy', 'ValidatedBy', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'code', 'fileName', 'photoDate', 'photoTime', 'individualId', 'specieId', 'island', 'bodyPartId', 'gender', 'ageGroup', 'behaviourId', 'latitude', 'longitude', 'companyId', 'vesselId', 'photographerId', 'kindOfPhoto', 'photoQuality', 'sightingId', 'isBest', 'notes', 'uploadedAt', 'status', 'lastEditedBy', 'validatedBy', 'createdAt', 'updatedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::CODE, self::FILE_NAME, self::PHOTO_DATE, self::PHOTO_TIME, self::INDIVIDUAL_ID, self::SPECIE_ID, self::ISLAND, self::BODY_PART_ID, self::GENDER, self::AGE_GROUP, self::BEHAVIOUR_ID, self::LATITUDE, self::LONGITUDE, self::COMPANY_ID, self::VESSEL_ID, self::PHOTOGRAPHER_ID, self::KIND_OF_PHOTO, self::PHOTO_QUALITY, self::SIGHTING_ID, self::IS_BEST, self::NOTES, self::UPLOADED_AT, self::STATUS, self::LAST_EDITED_BY, self::VALIDATED_BY, self::CREATED_AT, self::UPDATED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CODE', 'FILE_NAME', 'PHOTO_DATE', 'PHOTO_TIME', 'INDIVIDUAL_ID', 'SPECIE_ID', 'ISLAND', 'BODY_PART_ID', 'GENDER', 'AGE_GROUP', 'BEHAVIOUR_ID', 'LATITUDE', 'LONGITUDE', 'COMPANY_ID', 'VESSEL_ID', 'PHOTOGRAPHER_ID', 'KIND_OF_PHOTO', 'PHOTO_QUALITY', 'SIGHTING_ID', 'IS_BEST', 'NOTES', 'UPLOADED_AT', 'STATUS', 'LAST_EDITED_BY', 'VALIDATED_BY', 'CREATED_AT', 'UPDATED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'code', 'file_name', 'photo_date', 'photo_time', 'individual_id', 'specie_id', 'island', 'body_part_id', 'gender', 'age_group', 'behaviour_id', 'latitude', 'longitude', 'company_id', 'vessel_id', 'photographer_id', 'kind_of_photo', 'photo_quality', 'sighting_id', 'is_best', 'notes', 'uploaded_at', 'status', 'last_edited_by', 'validated_by', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Code' => 1, 'FileName' => 2, 'PhotoDate' => 3, 'PhotoTime' => 4, 'IndividualId' => 5, 'SpecieId' => 6, 'Island' => 7, 'BodyPartId' => 8, 'Gender' => 9, 'AgeGroup' => 10, 'BehaviourId' => 11, 'Latitude' => 12, 'Longitude' => 13, 'CompanyId' => 14, 'VesselId' => 15, 'PhotographerId' => 16, 'KindOfPhoto' => 17, 'PhotoQuality' => 18, 'SightingId' => 19, 'IsBest' => 20, 'Notes' => 21, 'UploadedAt' => 22, 'Status' => 23, 'LastEditedBy' => 24, 'ValidatedBy' => 25, 'CreatedAt' => 26, 'UpdatedAt' => 27, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'code' => 1, 'fileName' => 2, 'photoDate' => 3, 'photoTime' => 4, 'individualId' => 5, 'specieId' => 6, 'island' => 7, 'bodyPartId' => 8, 'gender' => 9, 'ageGroup' => 10, 'behaviourId' => 11, 'latitude' => 12, 'longitude' => 13, 'companyId' => 14, 'vesselId' => 15, 'photographerId' => 16, 'kindOfPhoto' => 17, 'photoQuality' => 18, 'sightingId' => 19, 'isBest' => 20, 'notes' => 21, 'uploadedAt' => 22, 'status' => 23, 'lastEditedBy' => 24, 'validatedBy' => 25, 'createdAt' => 26, 'updatedAt' => 27, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::CODE => 1, self::FILE_NAME => 2, self::PHOTO_DATE => 3, self::PHOTO_TIME => 4, self::INDIVIDUAL_ID => 5, self::SPECIE_ID => 6, self::ISLAND => 7, self::BODY_PART_ID => 8, self::GENDER => 9, self::AGE_GROUP => 10, self::BEHAVIOUR_ID => 11, self::LATITUDE => 12, self::LONGITUDE => 13, self::COMPANY_ID => 14, self::VESSEL_ID => 15, self::PHOTOGRAPHER_ID => 16, self::KIND_OF_PHOTO => 17, self::PHOTO_QUALITY => 18, self::SIGHTING_ID => 19, self::IS_BEST => 20, self::NOTES => 21, self::UPLOADED_AT => 22, self::STATUS => 23, self::LAST_EDITED_BY => 24, self::VALIDATED_BY => 25, self::CREATED_AT => 26, self::UPDATED_AT => 27, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CODE' => 1, 'FILE_NAME' => 2, 'PHOTO_DATE' => 3, 'PHOTO_TIME' => 4, 'INDIVIDUAL_ID' => 5, 'SPECIE_ID' => 6, 'ISLAND' => 7, 'BODY_PART_ID' => 8, 'GENDER' => 9, 'AGE_GROUP' => 10, 'BEHAVIOUR_ID' => 11, 'LATITUDE' => 12, 'LONGITUDE' => 13, 'COMPANY_ID' => 14, 'VESSEL_ID' => 15, 'PHOTOGRAPHER_ID' => 16, 'KIND_OF_PHOTO' => 17, 'PHOTO_QUALITY' => 18, 'SIGHTING_ID' => 19, 'IS_BEST' => 20, 'NOTES' => 21, 'UPLOADED_AT' => 22, 'STATUS' => 23, 'LAST_EDITED_BY' => 24, 'VALIDATED_BY' => 25, 'CREATED_AT' => 26, 'UPDATED_AT' => 27, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'code' => 1, 'file_name' => 2, 'photo_date' => 3, 'photo_time' => 4, 'individual_id' => 5, 'specie_id' => 6, 'island' => 7, 'body_part_id' => 8, 'gender' => 9, 'age_group' => 10, 'behaviour_id' => 11, 'latitude' => 12, 'longitude' => 13, 'company_id' => 14, 'vessel_id' => 15, 'photographer_id' => 16, 'kind_of_photo' => 17, 'photo_quality' => 18, 'sighting_id' => 19, 'is_best' => 20, 'notes' => 21, 'uploaded_at' => 22, 'status' => 23, 'last_edited_by' => 24, 'validated_by' => 25, 'created_at' => 26, 'updated_at' => 27, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ObservationPhotoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ObservationPhotoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(ObservationPhotoPeer::ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::CODE);
			$criteria->addSelectColumn(ObservationPhotoPeer::FILE_NAME);
			$criteria->addSelectColumn(ObservationPhotoPeer::PHOTO_DATE);
			$criteria->addSelectColumn(ObservationPhotoPeer::PHOTO_TIME);
			$criteria->addSelectColumn(ObservationPhotoPeer::INDIVIDUAL_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::SPECIE_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::ISLAND);
			$criteria->addSelectColumn(ObservationPhotoPeer::BODY_PART_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::GENDER);
			$criteria->addSelectColumn(ObservationPhotoPeer::AGE_GROUP);
			$criteria->addSelectColumn(ObservationPhotoPeer::BEHAVIOUR_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::LATITUDE);
			$criteria->addSelectColumn(ObservationPhotoPeer::LONGITUDE);
			$criteria->addSelectColumn(ObservationPhotoPeer::COMPANY_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::VESSEL_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::PHOTOGRAPHER_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::KIND_OF_PHOTO);
			$criteria->addSelectColumn(ObservationPhotoPeer::PHOTO_QUALITY);
			$criteria->addSelectColumn(ObservationPhotoPeer::SIGHTING_ID);
			$criteria->addSelectColumn(ObservationPhotoPeer::IS_BEST);
			$criteria->addSelectColumn(ObservationPhotoPeer::NOTES);
			$criteria->addSelectColumn(ObservationPhotoPeer::UPLOADED_AT);
			$criteria->addSelectColumn(ObservationPhotoPeer::STATUS);
			$criteria->addSelectColumn(ObservationPhotoPeer::LAST_EDITED_BY);
			$criteria->addSelectColumn(ObservationPhotoPeer::VALIDATED_BY);
			$criteria->addSelectColumn(ObservationPhotoPeer::CREATED_AT);
			$criteria->addSelectColumn(ObservationPhotoPeer::UPDATED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.CODE');
			$criteria->addSelectColumn($alias . '.FILE_NAME');
			$criteria->addSelectColumn($alias . '.PHOTO_DATE');
			$criteria->addSelectColumn($alias . '.PHOTO_TIME');
			$criteria->addSelectColumn($alias . '.INDIVIDUAL_ID');
			$criteria->addSelectColumn($alias . '.SPECIE_ID');
			$criteria->addSelectColumn($alias . '.ISLAND');
			$criteria->addSelectColumn($alias . '.BODY_PART_ID');
			$criteria->addSelectColumn($alias . '.GENDER');
			$criteria->addSelectColumn($alias . '.AGE_GROUP');
			$criteria->addSelectColumn($alias . '.BEHAVIOUR_ID');
			$criteria->addSelectColumn($alias . '.LATITUDE');
			$criteria->addSelectColumn($alias . '.LONGITUDE');
			$criteria->addSelectColumn($alias . '.COMPANY_ID');
			$criteria->addSelectColumn($alias . '.VESSEL_ID');
			$criteria->addSelectColumn($alias . '.PHOTOGRAPHER_ID');
			$criteria->addSelectColumn($alias . '.KIND_OF_PHOTO');
			$criteria->addSelectColumn($alias . '.PHOTO_QUALITY');
			$criteria->addSelectColumn($alias . '.SIGHTING_ID');
			$criteria->addSelectColumn($alias . '.IS_BEST');
			$criteria->addSelectColumn($alias . '.NOTES');
			$criteria->addSelectColumn($alias . '.UPLOADED_AT');
			$criteria->addSelectColumn($alias . '.STATUS');
			$criteria->addSelectColumn($alias . '.LAST_EDITED_BY');
			$criteria->addSelectColumn($alias . '.VALIDATED_BY');
			$criteria->addSelectColumn($alias . '.CREATED_AT');
			$criteria->addSelectColumn($alias . '.UPDATED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     ObservationPhoto
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ObservationPhotoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ObservationPhotoPeer::populateObjects(ObservationPhotoPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ObservationPhotoPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      ObservationPhoto $value A ObservationPhoto object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ObservationPhoto $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A ObservationPhoto object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ObservationPhoto) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ObservationPhoto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     ObservationPhoto Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to observation_photo
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in ObservationPhotoTailPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		ObservationPhotoTailPeer::clearInstancePool();
		// Invalidate objects in ObservationPhotoDorsalLeftPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		ObservationPhotoDorsalLeftPeer::clearInstancePool();
		// Invalidate objects in ObservationPhotoDorsalRightPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		ObservationPhotoDorsalRightPeer::clearInstancePool();
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ObservationPhotoPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ObservationPhotoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ObservationPhotoPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (ObservationPhoto object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ObservationPhotoPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ObservationPhotoPeer::NUM_COLUMNS;
		} else {
			$cls = ObservationPhotoPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ObservationPhotoPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Individual table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinIndividual(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Specie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinSpecie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related BodyPart table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinBodyPart(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Behaviour table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinBehaviour(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Company table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCompany(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Vessel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinVessel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Photographer table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinPhotographer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Sighting table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinSighting(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related sfGuardUserRelatedByLastEditedBy table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinsfGuardUserRelatedByLastEditedBy(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related sfGuardUserRelatedByValidatedBy table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinsfGuardUserRelatedByValidatedBy(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Individual objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinIndividual(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		IndividualPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = IndividualPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Specie objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinSpecie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		SpeciePeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = SpeciePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = SpeciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					SpeciePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Specie)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their BodyPart objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinBodyPart(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		BodyPartPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = BodyPartPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = BodyPartPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					BodyPartPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (BodyPart)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Behaviour objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinBehaviour(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		BehaviourPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = BehaviourPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = BehaviourPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					BehaviourPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Behaviour)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Company objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCompany(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		CompanyPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = CompanyPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CompanyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					CompanyPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Company)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Vessel objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinVessel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		VesselPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = VesselPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = VesselPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					VesselPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Vessel)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Photographer objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinPhotographer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		PhotographerPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = PhotographerPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = PhotographerPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					PhotographerPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Photographer)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their Sighting objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinSighting(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		SightingPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = SightingPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = SightingPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					SightingPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (Sighting)
				$obj2->addObservationPhoto($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their sfGuardUser objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinsfGuardUserRelatedByLastEditedBy(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		sfGuardUserPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = sfGuardUserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = sfGuardUserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					sfGuardUserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (sfGuardUser)
				$obj2->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with their sfGuardUser objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinsfGuardUserRelatedByValidatedBy(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
		sfGuardUserPeer::addSelectColumns($criteria);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = sfGuardUserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = sfGuardUserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					sfGuardUserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to $obj2 (sfGuardUser)
				$obj2->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol12 = $startcol11 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Individual rows

			$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = IndividualPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Specie rows

			$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = SpeciePeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined BodyPart rows

			$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = BodyPartPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Behaviour rows

			$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = BehaviourPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Company rows

			$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = CompanyPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Vessel rows

			$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = VesselPeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Vessel)
				$obj7->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Photographer rows

			$key8 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol8);
			if ($key8 !== null) {
				$obj8 = PhotographerPeer::getInstanceFromPool($key8);
				if (!$obj8) {

					$cls = PhotographerPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					PhotographerPeer::addInstanceToPool($obj8, $key8);
				} // if obj8 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Photographer)
				$obj8->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined Sighting rows

			$key9 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol9);
			if ($key9 !== null) {
				$obj9 = SightingPeer::getInstanceFromPool($key9);
				if (!$obj9) {

					$cls = SightingPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					SightingPeer::addInstanceToPool($obj9, $key9);
				} // if obj9 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (Sighting)
				$obj9->addObservationPhoto($obj1);
			} // if joined row not null

			// Add objects for joined sfGuardUser rows

			$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
			if ($key10 !== null) {
				$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
				if (!$obj10) {

					$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if obj10 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByLastEditedBy($obj1);
			} // if joined row not null

			// Add objects for joined sfGuardUser rows

			$key11 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol11);
			if ($key11 !== null) {
				$obj11 = sfGuardUserPeer::getInstanceFromPool($key11);
				if (!$obj11) {

					$cls = sfGuardUserPeer::getOMClass(false);

					$obj11 = new $cls();
					$obj11->hydrate($row, $startcol11);
					sfGuardUserPeer::addInstanceToPool($obj11, $key11);
				} // if obj11 loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj11 (sfGuardUser)
				$obj11->addObservationPhotoRelatedByValidatedBy($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Individual table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptIndividual(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Specie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptSpecie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related BodyPart table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptBodyPart(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Behaviour table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptBehaviour(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Company table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptCompany(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Vessel table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptVessel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Photographer table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptPhotographer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Sighting table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptSighting(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related sfGuardUserRelatedByLastEditedBy table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptsfGuardUserRelatedByLastEditedBy(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related sfGuardUserRelatedByValidatedBy table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptsfGuardUserRelatedByValidatedBy(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ObservationPhotoPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Individual.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptIndividual(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Specie rows

				$key2 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = SpeciePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					SpeciePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Specie)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key3 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BodyPartPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BodyPartPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (BodyPart)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key4 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BehaviourPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BehaviourPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (Behaviour)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key5 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = CompanyPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					CompanyPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Company)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key6 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = VesselPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					VesselPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Vessel)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Specie.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptSpecie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key3 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BodyPartPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BodyPartPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (BodyPart)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key4 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BehaviourPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BehaviourPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (Behaviour)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key5 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = CompanyPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					CompanyPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Company)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key6 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = VesselPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					VesselPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Vessel)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except BodyPart.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptBodyPart(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key4 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BehaviourPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BehaviourPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (Behaviour)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key5 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = CompanyPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					CompanyPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Company)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key6 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = VesselPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					VesselPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Vessel)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Behaviour.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptBehaviour(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key5 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = CompanyPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					CompanyPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Company)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key6 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = VesselPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					VesselPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Vessel)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Company.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptCompany(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key6 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = VesselPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					VesselPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Vessel)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Vessel.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptVessel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = CompanyPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key7 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = PhotographerPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					PhotographerPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Photographer)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Photographer.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptPhotographer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = CompanyPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Vessel)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key8 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = SightingPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					SightingPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Sighting)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except Sighting.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptSighting(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		sfGuardUserPeer::addSelectColumns($criteria);
		$startcol11 = $startcol10 + (sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::LAST_EDITED_BY, sfGuardUserPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VALIDATED_BY, sfGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = CompanyPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Vessel)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key8 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = PhotographerPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					PhotographerPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Photographer)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key9 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = sfGuardUserPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					sfGuardUserPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (sfGuardUser)
				$obj9->addObservationPhotoRelatedByLastEditedBy($obj1);

			} // if joined row is not null

				// Add objects for joined sfGuardUser rows

				$key10 = sfGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol10);
				if ($key10 !== null) {
					$obj10 = sfGuardUserPeer::getInstanceFromPool($key10);
					if (!$obj10) {
	
						$cls = sfGuardUserPeer::getOMClass(false);

					$obj10 = new $cls();
					$obj10->hydrate($row, $startcol10);
					sfGuardUserPeer::addInstanceToPool($obj10, $key10);
				} // if $obj10 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj10 (sfGuardUser)
				$obj10->addObservationPhotoRelatedByValidatedBy($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except sfGuardUserRelatedByLastEditedBy.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptsfGuardUserRelatedByLastEditedBy(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = CompanyPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Vessel)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key8 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = PhotographerPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					PhotographerPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Photographer)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key9 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = SightingPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					SightingPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (Sighting)
				$obj9->addObservationPhoto($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of ObservationPhoto objects pre-filled with all related objects except sfGuardUserRelatedByValidatedBy.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of ObservationPhoto objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptsfGuardUserRelatedByValidatedBy(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		ObservationPhotoPeer::addSelectColumns($criteria);
		$startcol2 = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);

		IndividualPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (IndividualPeer::NUM_COLUMNS - IndividualPeer::NUM_LAZY_LOAD_COLUMNS);

		SpeciePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (SpeciePeer::NUM_COLUMNS - SpeciePeer::NUM_LAZY_LOAD_COLUMNS);

		BodyPartPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BodyPartPeer::NUM_COLUMNS - BodyPartPeer::NUM_LAZY_LOAD_COLUMNS);

		BehaviourPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (BehaviourPeer::NUM_COLUMNS - BehaviourPeer::NUM_LAZY_LOAD_COLUMNS);

		CompanyPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + (CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS);

		VesselPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + (VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS);

		PhotographerPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + (PhotographerPeer::NUM_COLUMNS - PhotographerPeer::NUM_LAZY_LOAD_COLUMNS);

		SightingPeer::addSelectColumns($criteria);
		$startcol10 = $startcol9 + (SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(ObservationPhotoPeer::INDIVIDUAL_ID, IndividualPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SPECIE_ID, SpeciePeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BODY_PART_ID, BodyPartPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::BEHAVIOUR_ID, BehaviourPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::COMPANY_ID, CompanyPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::VESSEL_ID, VesselPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::PHOTOGRAPHER_ID, PhotographerPeer::ID, $join_behavior);

		$criteria->addJoin(ObservationPhotoPeer::SIGHTING_ID, SightingPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseObservationPhotoPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = ObservationPhotoPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Individual rows

				$key2 = IndividualPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = IndividualPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = IndividualPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					IndividualPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj2 (Individual)
				$obj2->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Specie rows

				$key3 = SpeciePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = SpeciePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = SpeciePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					SpeciePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj3 (Specie)
				$obj3->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined BodyPart rows

				$key4 = BodyPartPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BodyPartPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BodyPartPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BodyPartPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj4 (BodyPart)
				$obj4->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Behaviour rows

				$key5 = BehaviourPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = BehaviourPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = BehaviourPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					BehaviourPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj5 (Behaviour)
				$obj5->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Company rows

				$key6 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = CompanyPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = CompanyPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					CompanyPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj6 (Company)
				$obj6->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Vessel rows

				$key7 = VesselPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = VesselPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = VesselPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					VesselPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj7 (Vessel)
				$obj7->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Photographer rows

				$key8 = PhotographerPeer::getPrimaryKeyHashFromRow($row, $startcol8);
				if ($key8 !== null) {
					$obj8 = PhotographerPeer::getInstanceFromPool($key8);
					if (!$obj8) {
	
						$cls = PhotographerPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					PhotographerPeer::addInstanceToPool($obj8, $key8);
				} // if $obj8 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj8 (Photographer)
				$obj8->addObservationPhoto($obj1);

			} // if joined row is not null

				// Add objects for joined Sighting rows

				$key9 = SightingPeer::getPrimaryKeyHashFromRow($row, $startcol9);
				if ($key9 !== null) {
					$obj9 = SightingPeer::getInstanceFromPool($key9);
					if (!$obj9) {
	
						$cls = SightingPeer::getOMClass(false);

					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					SightingPeer::addInstanceToPool($obj9, $key9);
				} // if $obj9 already loaded

				// Add the $obj1 (ObservationPhoto) to the collection in $obj9 (Sighting)
				$obj9->addObservationPhoto($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseObservationPhotoPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseObservationPhotoPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ObservationPhotoTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? ObservationPhotoPeer::CLASS_DEFAULT : ObservationPhotoPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ObservationPhoto or Criteria object.
	 *
	 * @param      mixed $values Criteria or ObservationPhoto object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ObservationPhoto object
		}

		if ($criteria->containsKey(ObservationPhotoPeer::ID) && $criteria->keyContainsValue(ObservationPhotoPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ObservationPhotoPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a ObservationPhoto or Criteria object.
	 *
	 * @param      mixed $values Criteria or ObservationPhoto object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ObservationPhotoPeer::ID);
			$value = $criteria->remove(ObservationPhotoPeer::ID);
			if ($value) {
				$selectCriteria->add(ObservationPhotoPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ObservationPhotoPeer::TABLE_NAME);
			}

		} else { // $values is ObservationPhoto object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the observation_photo table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += ObservationPhotoPeer::doOnDeleteCascade(new Criteria(ObservationPhotoPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(ObservationPhotoPeer::TABLE_NAME, $con, ObservationPhotoPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ObservationPhotoPeer::clearInstancePool();
			ObservationPhotoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ObservationPhoto or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ObservationPhoto object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ObservationPhoto) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ObservationPhotoPeer::ID, (array) $values, Criteria::IN);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			// cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
			$c = clone $criteria;
			$affectedRows += ObservationPhotoPeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				ObservationPhotoPeer::clearInstancePool();
			} elseif ($values instanceof ObservationPhoto) { // it's a model object
				ObservationPhotoPeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					ObservationPhotoPeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ObservationPhotoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
	{
		// initialize var to track total num of affected rows
		$affectedRows = 0;

		// first find the objects that are implicated by the $criteria
		$objects = ObservationPhotoPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related ObservationPhotoTail objects
			$criteria = new Criteria(ObservationPhotoTailPeer::DATABASE_NAME);
			
			$criteria->add(ObservationPhotoTailPeer::PHOTO_ID, $obj->getId());
			$affectedRows += ObservationPhotoTailPeer::doDelete($criteria, $con);

			// delete related ObservationPhotoDorsalLeft objects
			$criteria = new Criteria(ObservationPhotoDorsalLeftPeer::DATABASE_NAME);
			
			$criteria->add(ObservationPhotoDorsalLeftPeer::PHOTO_ID, $obj->getId());
			$affectedRows += ObservationPhotoDorsalLeftPeer::doDelete($criteria, $con);

			// delete related ObservationPhotoDorsalRight objects
			$criteria = new Criteria(ObservationPhotoDorsalRightPeer::DATABASE_NAME);
			
			$criteria->add(ObservationPhotoDorsalRightPeer::PHOTO_ID, $obj->getId());
			$affectedRows += ObservationPhotoDorsalRightPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given ObservationPhoto object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ObservationPhoto $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ObservationPhoto $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ObservationPhotoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ObservationPhotoPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(ObservationPhotoPeer::DATABASE_NAME, ObservationPhotoPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ObservationPhoto
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ObservationPhotoPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ObservationPhotoPeer::DATABASE_NAME);
		$criteria->add(ObservationPhotoPeer::ID, $pk);

		$v = ObservationPhotoPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ObservationPhotoPeer::DATABASE_NAME);
			$criteria->add(ObservationPhotoPeer::ID, $pks, Criteria::IN);
			$objs = ObservationPhotoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseObservationPhotoPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

	// symfony_i18n behavior
	
	/**
	 * Returns the i18n model class name.
	 *
	 * @return string The i18n model class name
	 */
	static public function getI18nModel()
	{
	  return 'ObservationPhotoI18n';
	}
	
	/**
	 * Selects a collection of {@link ObservationPhoto} objects with a {@link ObservationPhotoI18n} translation populated.
	 *
	 * @param Criteria  $criteria
	 * @param string    $culture
	 * @param PropelPDO $con
	 * @param string    $join_behavior
	 *
	 * @return array
	 */
	static public function doSelectWithI18n(Criteria $criteria, $culture = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
	  $criteria = clone $criteria;
	
	  if (null === $culture)
	  {
	    $culture = sfPropel::getDefaultCulture();
	  }
	
	  // Set the correct dbName if it has not been overridden
	  if ($criteria->getDbName() == Propel::getDefaultDB()) {
	  	$criteria->setDbName(self::DATABASE_NAME);
	  }
	
	  ObservationPhotoPeer::addSelectColumns($criteria);
	  $startcol = (ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS);
	  ObservationPhotoI18nPeer::addSelectColumns($criteria);
	  $criteria->addJoin(ObservationPhotoPeer::ID, ObservationPhotoI18nPeer::ID, $join_behavior);
	  $criteria->add(ObservationPhotoI18nPeer::CULTURE, $culture);
	
	  foreach (sfMixer::getCallables('BaseObservationPhoto:doSelectJoin:doSelectJoin') as $sf_hook)
	  {
	    call_user_func($sf_hook, 'ObservationPhoto', $criteria, $con);
	  }
	
	  $stmt = BasePeer::doSelect($criteria, $con);
		$results = array();
	
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = ObservationPhotoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = ObservationPhotoPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
	  		// See http://propel.phpdb.org/trac/ticket/509
	  		// $obj1->hydrate($row, 0, true); // rehydrate
	  	} else {
				$cls = ObservationPhotoPeer::getOMClass(false);
				$obj1 = new $cls();
				$obj1->hydrate($row);
	      ObservationPhotoPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded
	
			$key2 = ObservationPhotoI18nPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ObservationPhotoI18nPeer::getInstanceFromPool($key2);
				if (!$obj2) {
					$cls = ObservationPhotoI18nPeer::getOMClass(false);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ObservationPhotoI18nPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded
	
	      $obj1->setObservationPhotoI18nForCulture($obj2, $culture);
			} // if joined row was not null
	
			$results[] = $obj1;
		}
	
		$stmt->closeCursor();
	
		return $results;
	}

} // BaseObservationPhotoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseObservationPhotoPeer::buildTableMap();

