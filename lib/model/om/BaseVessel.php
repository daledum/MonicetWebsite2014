<?php


/**
 * Base class that represents a row from the 'vessel' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVessel extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'VesselPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        VesselPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the company_id field.
	 * @var        int
	 */
	protected $company_id;

	/**
	 * The value for the rec_cet_code field.
	 * @var        string
	 */
	protected $rec_cet_code;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the length field.
	 * @var        int
	 */
	protected $length;

	/**
	 * The value for the power field.
	 * @var        double
	 */
	protected $power;

	/**
	 * The value for the height field.
	 * @var        double
	 */
	protected $height;

	/**
	 * The value for the observations field.
	 * @var        string
	 */
	protected $observations;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the updated_at field.
	 * @var        string
	 */
	protected $updated_at;

	/**
	 * @var        Company
	 */
	protected $aCompany;

	/**
	 * @var        array GeneralInfo[] Collection to store aggregation of GeneralInfo objects.
	 */
	protected $collGeneralInfos;

	/**
	 * @var        array WatchSighting[] Collection to store aggregation of WatchSighting objects.
	 */
	protected $collWatchSightings;

	/**
	 * @var        array ObservationPhoto[] Collection to store aggregation of ObservationPhoto objects.
	 */
	protected $collObservationPhotos;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [company_id] column value.
	 * 
	 * @return     int
	 */
	public function getCompanyId()
	{
		return $this->company_id;
	}

	/**
	 * Get the [rec_cet_code] column value.
	 * 
	 * @return     string
	 */
	public function getRecCetCode()
	{
		return $this->rec_cet_code;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [length] column value.
	 * 
	 * @return     int
	 */
	public function getLength()
	{
		return $this->length;
	}

	/**
	 * Get the [power] column value.
	 * 
	 * @return     double
	 */
	public function getPower()
	{
		return $this->power;
	}

	/**
	 * Get the [height] column value.
	 * 
	 * @return     double
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Get the [observations] column value.
	 * 
	 * @return     string
	 */
	public function getObservations()
	{
		return $this->observations;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [updated_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->updated_at === null) {
			return null;
		}


		if ($this->updated_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->updated_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = VesselPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [company_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setCompanyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->company_id !== $v) {
			$this->company_id = $v;
			$this->modifiedColumns[] = VesselPeer::COMPANY_ID;
		}

		if ($this->aCompany !== null && $this->aCompany->getId() !== $v) {
			$this->aCompany = null;
		}

		return $this;
	} // setCompanyId()

	/**
	 * Set the value of [rec_cet_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setRecCetCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rec_cet_code !== $v) {
			$this->rec_cet_code = $v;
			$this->modifiedColumns[] = VesselPeer::REC_CET_CODE;
		}

		return $this;
	} // setRecCetCode()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = VesselPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [length] column.
	 * 
	 * @param      int $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setLength($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->length !== $v) {
			$this->length = $v;
			$this->modifiedColumns[] = VesselPeer::LENGTH;
		}

		return $this;
	} // setLength()

	/**
	 * Set the value of [power] column.
	 * 
	 * @param      double $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setPower($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->power !== $v) {
			$this->power = $v;
			$this->modifiedColumns[] = VesselPeer::POWER;
		}

		return $this;
	} // setPower()

	/**
	 * Set the value of [height] column.
	 * 
	 * @param      double $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setHeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->height !== $v) {
			$this->height = $v;
			$this->modifiedColumns[] = VesselPeer::HEIGHT;
		}

		return $this;
	} // setHeight()

	/**
	 * Set the value of [observations] column.
	 * 
	 * @param      string $v new value
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setObservations($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->observations !== $v) {
			$this->observations = $v;
			$this->modifiedColumns[] = VesselPeer::OBSERVATIONS;
		}

		return $this;
	} // setObservations()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = VesselPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Vessel The current object (for fluent API support)
	 */
	public function setUpdatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->updated_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->updated_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = VesselPeer::UPDATED_AT;
			}
		} // if either are not null

		return $this;
	} // setUpdatedAt()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->company_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->rec_cet_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->length = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->power = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
			$this->height = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->observations = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->created_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->updated_at = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = VesselPeer::NUM_COLUMNS - VesselPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Vessel object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aCompany !== null && $this->company_id !== $this->aCompany->getId()) {
			$this->aCompany = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VesselPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = VesselPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCompany = null;
			$this->collGeneralInfos = null;

			$this->collWatchSightings = null;

			$this->collObservationPhotos = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VesselPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseVessel:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				VesselQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseVessel:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VesselPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseVessel:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(VesselPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(VesselPeer::CREATED_AT))
				{
				  $this->setCreatedAt(time());
				}

			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseVessel:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				VesselPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCompany !== null) {
				if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
					$affectedRows += $this->aCompany->save($con);
				}
				$this->setCompany($this->aCompany);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = VesselPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(VesselPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.VesselPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += VesselPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collGeneralInfos !== null) {
				foreach ($this->collGeneralInfos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collWatchSightings !== null) {
				foreach ($this->collWatchSightings as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collObservationPhotos !== null) {
				foreach ($this->collObservationPhotos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCompany !== null) {
				if (!$this->aCompany->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCompany->getValidationFailures());
				}
			}


			if (($retval = VesselPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collGeneralInfos !== null) {
					foreach ($this->collGeneralInfos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collWatchSightings !== null) {
					foreach ($this->collWatchSightings as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collObservationPhotos !== null) {
					foreach ($this->collObservationPhotos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VesselPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCompanyId();
				break;
			case 2:
				return $this->getRecCetCode();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getLength();
				break;
			case 5:
				return $this->getPower();
				break;
			case 6:
				return $this->getHeight();
				break;
			case 7:
				return $this->getObservations();
				break;
			case 8:
				return $this->getCreatedAt();
				break;
			case 9:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = VesselPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCompanyId(),
			$keys[2] => $this->getRecCetCode(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getLength(),
			$keys[5] => $this->getPower(),
			$keys[6] => $this->getHeight(),
			$keys[7] => $this->getObservations(),
			$keys[8] => $this->getCreatedAt(),
			$keys[9] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCompany) {
				$result['Company'] = $this->aCompany->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VesselPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCompanyId($value);
				break;
			case 2:
				$this->setRecCetCode($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setLength($value);
				break;
			case 5:
				$this->setPower($value);
				break;
			case 6:
				$this->setHeight($value);
				break;
			case 7:
				$this->setObservations($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
			case 9:
				$this->setUpdatedAt($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VesselPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCompanyId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRecCetCode($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLength($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPower($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHeight($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setObservations($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(VesselPeer::DATABASE_NAME);

		if ($this->isColumnModified(VesselPeer::ID)) $criteria->add(VesselPeer::ID, $this->id);
		if ($this->isColumnModified(VesselPeer::COMPANY_ID)) $criteria->add(VesselPeer::COMPANY_ID, $this->company_id);
		if ($this->isColumnModified(VesselPeer::REC_CET_CODE)) $criteria->add(VesselPeer::REC_CET_CODE, $this->rec_cet_code);
		if ($this->isColumnModified(VesselPeer::NAME)) $criteria->add(VesselPeer::NAME, $this->name);
		if ($this->isColumnModified(VesselPeer::LENGTH)) $criteria->add(VesselPeer::LENGTH, $this->length);
		if ($this->isColumnModified(VesselPeer::POWER)) $criteria->add(VesselPeer::POWER, $this->power);
		if ($this->isColumnModified(VesselPeer::HEIGHT)) $criteria->add(VesselPeer::HEIGHT, $this->height);
		if ($this->isColumnModified(VesselPeer::OBSERVATIONS)) $criteria->add(VesselPeer::OBSERVATIONS, $this->observations);
		if ($this->isColumnModified(VesselPeer::CREATED_AT)) $criteria->add(VesselPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(VesselPeer::UPDATED_AT)) $criteria->add(VesselPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VesselPeer::DATABASE_NAME);
		$criteria->add(VesselPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Vessel (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCompanyId($this->company_id);
		$copyObj->setRecCetCode($this->rec_cet_code);
		$copyObj->setName($this->name);
		$copyObj->setLength($this->length);
		$copyObj->setPower($this->power);
		$copyObj->setHeight($this->height);
		$copyObj->setObservations($this->observations);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getGeneralInfos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addGeneralInfo($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getWatchSightings() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addWatchSighting($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getObservationPhotos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhoto($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Vessel Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     VesselPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new VesselPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Company object.
	 *
	 * @param      Company $v
	 * @return     Vessel The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCompany(Company $v = null)
	{
		if ($v === null) {
			$this->setCompanyId(NULL);
		} else {
			$this->setCompanyId($v->getId());
		}

		$this->aCompany = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Company object, it will not be re-added.
		if ($v !== null) {
			$v->addVessel($this);
		}

		return $this;
	}


	/**
	 * Get the associated Company object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Company The associated Company object.
	 * @throws     PropelException
	 */
	public function getCompany(PropelPDO $con = null)
	{
		if ($this->aCompany === null && ($this->company_id !== null)) {
			$this->aCompany = CompanyQuery::create()->findPk($this->company_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aCompany->addVessels($this);
			 */
		}
		return $this->aCompany;
	}

	/**
	 * Clears out the collGeneralInfos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addGeneralInfos()
	 */
	public function clearGeneralInfos()
	{
		$this->collGeneralInfos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collGeneralInfos collection.
	 *
	 * By default this just sets the collGeneralInfos collection to an empty array (like clearcollGeneralInfos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initGeneralInfos()
	{
		$this->collGeneralInfos = new PropelObjectCollection();
		$this->collGeneralInfos->setModel('GeneralInfo');
	}

	/**
	 * Gets an array of GeneralInfo objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Vessel is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 * @throws     PropelException
	 */
	public function getGeneralInfos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collGeneralInfos || null !== $criteria) {
			if ($this->isNew() && null === $this->collGeneralInfos) {
				// return empty collection
				$this->initGeneralInfos();
			} else {
				$collGeneralInfos = GeneralInfoQuery::create(null, $criteria)
					->filterByVessel($this)
					->find($con);
				if (null !== $criteria) {
					return $collGeneralInfos;
				}
				$this->collGeneralInfos = $collGeneralInfos;
			}
		}
		return $this->collGeneralInfos;
	}

	/**
	 * Returns the number of related GeneralInfo objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related GeneralInfo objects.
	 * @throws     PropelException
	 */
	public function countGeneralInfos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collGeneralInfos || null !== $criteria) {
			if ($this->isNew() && null === $this->collGeneralInfos) {
				return 0;
			} else {
				$query = GeneralInfoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVessel($this)
					->count($con);
			}
		} else {
			return count($this->collGeneralInfos);
		}
	}

	/**
	 * Method called to associate a GeneralInfo object to this object
	 * through the GeneralInfo foreign key attribute.
	 *
	 * @param      GeneralInfo $l GeneralInfo
	 * @return     void
	 * @throws     PropelException
	 */
	public function addGeneralInfo(GeneralInfo $l)
	{
		if ($this->collGeneralInfos === null) {
			$this->initGeneralInfos();
		}
		if (!$this->collGeneralInfos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collGeneralInfos[]= $l;
			$l->setVessel($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinSkipper($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('Skipper', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinGuide($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('Guide', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinCompany($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('Company', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinsfGuardUserRelatedByCreatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByCreatedBy', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinsfGuardUserRelatedByUpdatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByUpdatedBy', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}

	/**
	 * Clears out the collWatchSightings collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addWatchSightings()
	 */
	public function clearWatchSightings()
	{
		$this->collWatchSightings = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collWatchSightings collection.
	 *
	 * By default this just sets the collWatchSightings collection to an empty array (like clearcollWatchSightings());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initWatchSightings()
	{
		$this->collWatchSightings = new PropelObjectCollection();
		$this->collWatchSightings->setModel('WatchSighting');
	}

	/**
	 * Gets an array of WatchSighting objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Vessel is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 * @throws     PropelException
	 */
	public function getWatchSightings($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collWatchSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchSightings) {
				// return empty collection
				$this->initWatchSightings();
			} else {
				$collWatchSightings = WatchSightingQuery::create(null, $criteria)
					->filterByVessel($this)
					->find($con);
				if (null !== $criteria) {
					return $collWatchSightings;
				}
				$this->collWatchSightings = $collWatchSightings;
			}
		}
		return $this->collWatchSightings;
	}

	/**
	 * Returns the number of related WatchSighting objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related WatchSighting objects.
	 * @throws     PropelException
	 */
	public function countWatchSightings(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collWatchSightings || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchSightings) {
				return 0;
			} else {
				$query = WatchSightingQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVessel($this)
					->count($con);
			}
		} else {
			return count($this->collWatchSightings);
		}
	}

	/**
	 * Method called to associate a WatchSighting object to this object
	 * through the WatchSighting foreign key attribute.
	 *
	 * @param      WatchSighting $l WatchSighting
	 * @return     void
	 * @throws     PropelException
	 */
	public function addWatchSighting(WatchSighting $l)
	{
		if ($this->collWatchSightings === null) {
			$this->initWatchSightings();
		}
		if (!$this->collWatchSightings->contains($l)) { // only add it if the **same** object is not already associated
			$this->collWatchSightings[]= $l;
			$l->setVessel($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchInfo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchInfo', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchCode($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchCode', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinWatchVisibility($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('WatchVisibility', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinSpecie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Specie', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinBehaviour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Behaviour', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related WatchSightings from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchSighting[] List of WatchSighting objects
	 */
	public function getWatchSightingsJoinDirection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchSightingQuery::create(null, $criteria);
		$query->joinWith('Direction', $join_behavior);

		return $this->getWatchSightings($query, $con);
	}

	/**
	 * Clears out the collObservationPhotos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotos()
	 */
	public function clearObservationPhotos()
	{
		$this->collObservationPhotos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotos collection.
	 *
	 * By default this just sets the collObservationPhotos collection to an empty array (like clearcollObservationPhotos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotos()
	{
		$this->collObservationPhotos = new PropelObjectCollection();
		$this->collObservationPhotos->setModel('ObservationPhoto');
	}

	/**
	 * Gets an array of ObservationPhoto objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Vessel is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 * @throws     PropelException
	 */
	public function getObservationPhotos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotos || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotos) {
				// return empty collection
				$this->initObservationPhotos();
			} else {
				$collObservationPhotos = ObservationPhotoQuery::create(null, $criteria)
					->filterByVessel($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotos;
				}
				$this->collObservationPhotos = $collObservationPhotos;
			}
		}
		return $this->collObservationPhotos;
	}

	/**
	 * Returns the number of related ObservationPhoto objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhoto objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotos || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotos) {
				return 0;
			} else {
				$query = ObservationPhotoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByVessel($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotos);
		}
	}

	/**
	 * Method called to associate a ObservationPhoto object to this object
	 * through the ObservationPhoto foreign key attribute.
	 *
	 * @param      ObservationPhoto $l ObservationPhoto
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhoto(ObservationPhoto $l)
	{
		if ($this->collObservationPhotos === null) {
			$this->initObservationPhotos();
		}
		if (!$this->collObservationPhotos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotos[]= $l;
			$l->setVessel($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinIndividual($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Individual', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinSpecie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Specie', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinBodyPart($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('BodyPart', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinBehaviour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Behaviour', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinCompany($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Company', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinPhotographer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Photographer', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinSighting($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Sighting', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinsfGuardUserRelatedByLastEditedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByLastEditedBy', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Vessel is new, it will return
	 * an empty collection; or if this Vessel has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Vessel.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinsfGuardUserRelatedByValidatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByValidatedBy', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->company_id = null;
		$this->rec_cet_code = null;
		$this->name = null;
		$this->length = null;
		$this->power = null;
		$this->height = null;
		$this->observations = null;
		$this->created_at = null;
		$this->updated_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collGeneralInfos) {
				foreach ((array) $this->collGeneralInfos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collWatchSightings) {
				foreach ((array) $this->collWatchSightings as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotos) {
				foreach ((array) $this->collObservationPhotos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collGeneralInfos = null;
		$this->collWatchSightings = null;
		$this->collObservationPhotos = null;
		$this->aCompany = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseVessel:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseVessel
