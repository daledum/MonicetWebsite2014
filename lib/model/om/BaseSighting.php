<?php


/**
 * Base class that represents a row from the 'sighting' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSighting extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SightingPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SightingPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the record_id field.
	 * @var        int
	 */
	protected $record_id;

	/**
	 * The value for the specie_id field.
	 * @var        int
	 */
	protected $specie_id;

	/**
	 * The value for the behaviour_id field.
	 * @var        int
	 */
	protected $behaviour_id;

	/**
	 * The value for the association_id field.
	 * @var        int
	 */
	protected $association_id;

	/**
	 * The value for the adults field.
	 * @var        string
	 */
	protected $adults;

	/**
	 * The value for the juveniles field.
	 * @var        string
	 */
	protected $juveniles;

	/**
	 * The value for the calves field.
	 * @var        string
	 */
	protected $calves;

	/**
	 * The value for the total field.
	 * @var        int
	 */
	protected $total;

	/**
	 * The value for the comments field.
	 * @var        string
	 */
	protected $comments;

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
	 * @var        Record
	 */
	protected $aRecord;

	/**
	 * @var        Specie
	 */
	protected $aSpecie;

	/**
	 * @var        Behaviour
	 */
	protected $aBehaviour;

	/**
	 * @var        Association
	 */
	protected $aAssociation;

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
	 * Get the [record_id] column value.
	 * 
	 * @return     int
	 */
	public function getRecordId()
	{
		return $this->record_id;
	}

	/**
	 * Get the [specie_id] column value.
	 * 
	 * @return     int
	 */
	public function getSpecieId()
	{
		return $this->specie_id;
	}

	/**
	 * Get the [behaviour_id] column value.
	 * 
	 * @return     int
	 */
	public function getBehaviourId()
	{
		return $this->behaviour_id;
	}

	/**
	 * Get the [association_id] column value.
	 * 
	 * @return     int
	 */
	public function getAssociationId()
	{
		return $this->association_id;
	}

	/**
	 * Get the [adults] column value.
	 * 
	 * @return     string
	 */
	public function getAdults()
	{
		return $this->adults;
	}

	/**
	 * Get the [juveniles] column value.
	 * 
	 * @return     string
	 */
	public function getJuveniles()
	{
		return $this->juveniles;
	}

	/**
	 * Get the [calves] column value.
	 * 
	 * @return     string
	 */
	public function getCalves()
	{
		return $this->calves;
	}

	/**
	 * Get the [total] column value.
	 * 
	 * @return     int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * Get the [comments] column value.
	 * 
	 * @return     string
	 */
	public function getComments()
	{
		return $this->comments;
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
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SightingPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [record_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setRecordId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->record_id !== $v) {
			$this->record_id = $v;
			$this->modifiedColumns[] = SightingPeer::RECORD_ID;
		}

		if ($this->aRecord !== null && $this->aRecord->getId() !== $v) {
			$this->aRecord = null;
		}

		return $this;
	} // setRecordId()

	/**
	 * Set the value of [specie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setSpecieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->specie_id !== $v) {
			$this->specie_id = $v;
			$this->modifiedColumns[] = SightingPeer::SPECIE_ID;
		}

		if ($this->aSpecie !== null && $this->aSpecie->getId() !== $v) {
			$this->aSpecie = null;
		}

		return $this;
	} // setSpecieId()

	/**
	 * Set the value of [behaviour_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setBehaviourId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->behaviour_id !== $v) {
			$this->behaviour_id = $v;
			$this->modifiedColumns[] = SightingPeer::BEHAVIOUR_ID;
		}

		if ($this->aBehaviour !== null && $this->aBehaviour->getId() !== $v) {
			$this->aBehaviour = null;
		}

		return $this;
	} // setBehaviourId()

	/**
	 * Set the value of [association_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setAssociationId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->association_id !== $v) {
			$this->association_id = $v;
			$this->modifiedColumns[] = SightingPeer::ASSOCIATION_ID;
		}

		if ($this->aAssociation !== null && $this->aAssociation->getId() !== $v) {
			$this->aAssociation = null;
		}

		return $this;
	} // setAssociationId()

	/**
	 * Set the value of [adults] column.
	 * 
	 * @param      string $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setAdults($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->adults !== $v) {
			$this->adults = $v;
			$this->modifiedColumns[] = SightingPeer::ADULTS;
		}

		return $this;
	} // setAdults()

	/**
	 * Set the value of [juveniles] column.
	 * 
	 * @param      string $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setJuveniles($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->juveniles !== $v) {
			$this->juveniles = $v;
			$this->modifiedColumns[] = SightingPeer::JUVENILES;
		}

		return $this;
	} // setJuveniles()

	/**
	 * Set the value of [calves] column.
	 * 
	 * @param      string $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setCalves($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->calves !== $v) {
			$this->calves = $v;
			$this->modifiedColumns[] = SightingPeer::CALVES;
		}

		return $this;
	} // setCalves()

	/**
	 * Set the value of [total] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setTotal($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->total !== $v) {
			$this->total = $v;
			$this->modifiedColumns[] = SightingPeer::TOTAL;
		}

		return $this;
	} // setTotal()

	/**
	 * Set the value of [comments] column.
	 * 
	 * @param      string $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comments !== $v) {
			$this->comments = $v;
			$this->modifiedColumns[] = SightingPeer::COMMENTS;
		}

		return $this;
	} // setComments()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sighting The current object (for fluent API support)
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
				$this->modifiedColumns[] = SightingPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Sighting The current object (for fluent API support)
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
				$this->modifiedColumns[] = SightingPeer::UPDATED_AT;
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
			$this->record_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->specie_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->behaviour_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->association_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->adults = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->juveniles = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->calves = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->total = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->comments = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->created_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->updated_at = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Sighting object", $e);
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

		if ($this->aRecord !== null && $this->record_id !== $this->aRecord->getId()) {
			$this->aRecord = null;
		}
		if ($this->aSpecie !== null && $this->specie_id !== $this->aSpecie->getId()) {
			$this->aSpecie = null;
		}
		if ($this->aBehaviour !== null && $this->behaviour_id !== $this->aBehaviour->getId()) {
			$this->aBehaviour = null;
		}
		if ($this->aAssociation !== null && $this->association_id !== $this->aAssociation->getId()) {
			$this->aAssociation = null;
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
			$con = Propel::getConnection(SightingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SightingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aRecord = null;
			$this->aSpecie = null;
			$this->aBehaviour = null;
			$this->aAssociation = null;
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
			$con = Propel::getConnection(SightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSighting:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				SightingQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseSighting:delete:post') as $callable)
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
			$con = Propel::getConnection(SightingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSighting:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(SightingPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(SightingPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseSighting:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				SightingPeer::addInstanceToPool($this);
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

			if ($this->aRecord !== null) {
				if ($this->aRecord->isModified() || $this->aRecord->isNew()) {
					$affectedRows += $this->aRecord->save($con);
				}
				$this->setRecord($this->aRecord);
			}

			if ($this->aSpecie !== null) {
				if ($this->aSpecie->isModified() || $this->aSpecie->isNew()) {
					$affectedRows += $this->aSpecie->save($con);
				}
				$this->setSpecie($this->aSpecie);
			}

			if ($this->aBehaviour !== null) {
				if ($this->aBehaviour->isModified() || $this->aBehaviour->isNew()) {
					$affectedRows += $this->aBehaviour->save($con);
				}
				$this->setBehaviour($this->aBehaviour);
			}

			if ($this->aAssociation !== null) {
				if ($this->aAssociation->isModified() || $this->aAssociation->isNew()) {
					$affectedRows += $this->aAssociation->save($con);
				}
				$this->setAssociation($this->aAssociation);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SightingPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SightingPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SightingPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += SightingPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

			if ($this->aRecord !== null) {
				if (!$this->aRecord->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRecord->getValidationFailures());
				}
			}

			if ($this->aSpecie !== null) {
				if (!$this->aSpecie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSpecie->getValidationFailures());
				}
			}

			if ($this->aBehaviour !== null) {
				if (!$this->aBehaviour->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBehaviour->getValidationFailures());
				}
			}

			if ($this->aAssociation !== null) {
				if (!$this->aAssociation->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAssociation->getValidationFailures());
				}
			}


			if (($retval = SightingPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = SightingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRecordId();
				break;
			case 2:
				return $this->getSpecieId();
				break;
			case 3:
				return $this->getBehaviourId();
				break;
			case 4:
				return $this->getAssociationId();
				break;
			case 5:
				return $this->getAdults();
				break;
			case 6:
				return $this->getJuveniles();
				break;
			case 7:
				return $this->getCalves();
				break;
			case 8:
				return $this->getTotal();
				break;
			case 9:
				return $this->getComments();
				break;
			case 10:
				return $this->getCreatedAt();
				break;
			case 11:
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
		$keys = SightingPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRecordId(),
			$keys[2] => $this->getSpecieId(),
			$keys[3] => $this->getBehaviourId(),
			$keys[4] => $this->getAssociationId(),
			$keys[5] => $this->getAdults(),
			$keys[6] => $this->getJuveniles(),
			$keys[7] => $this->getCalves(),
			$keys[8] => $this->getTotal(),
			$keys[9] => $this->getComments(),
			$keys[10] => $this->getCreatedAt(),
			$keys[11] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aRecord) {
				$result['Record'] = $this->aRecord->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aSpecie) {
				$result['Specie'] = $this->aSpecie->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBehaviour) {
				$result['Behaviour'] = $this->aBehaviour->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aAssociation) {
				$result['Association'] = $this->aAssociation->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = SightingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRecordId($value);
				break;
			case 2:
				$this->setSpecieId($value);
				break;
			case 3:
				$this->setBehaviourId($value);
				break;
			case 4:
				$this->setAssociationId($value);
				break;
			case 5:
				$this->setAdults($value);
				break;
			case 6:
				$this->setJuveniles($value);
				break;
			case 7:
				$this->setCalves($value);
				break;
			case 8:
				$this->setTotal($value);
				break;
			case 9:
				$this->setComments($value);
				break;
			case 10:
				$this->setCreatedAt($value);
				break;
			case 11:
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
		$keys = SightingPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRecordId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSpecieId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBehaviourId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAssociationId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAdults($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setJuveniles($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCalves($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTotal($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setComments($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCreatedAt($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUpdatedAt($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SightingPeer::DATABASE_NAME);

		if ($this->isColumnModified(SightingPeer::ID)) $criteria->add(SightingPeer::ID, $this->id);
		if ($this->isColumnModified(SightingPeer::RECORD_ID)) $criteria->add(SightingPeer::RECORD_ID, $this->record_id);
		if ($this->isColumnModified(SightingPeer::SPECIE_ID)) $criteria->add(SightingPeer::SPECIE_ID, $this->specie_id);
		if ($this->isColumnModified(SightingPeer::BEHAVIOUR_ID)) $criteria->add(SightingPeer::BEHAVIOUR_ID, $this->behaviour_id);
		if ($this->isColumnModified(SightingPeer::ASSOCIATION_ID)) $criteria->add(SightingPeer::ASSOCIATION_ID, $this->association_id);
		if ($this->isColumnModified(SightingPeer::ADULTS)) $criteria->add(SightingPeer::ADULTS, $this->adults);
		if ($this->isColumnModified(SightingPeer::JUVENILES)) $criteria->add(SightingPeer::JUVENILES, $this->juveniles);
		if ($this->isColumnModified(SightingPeer::CALVES)) $criteria->add(SightingPeer::CALVES, $this->calves);
		if ($this->isColumnModified(SightingPeer::TOTAL)) $criteria->add(SightingPeer::TOTAL, $this->total);
		if ($this->isColumnModified(SightingPeer::COMMENTS)) $criteria->add(SightingPeer::COMMENTS, $this->comments);
		if ($this->isColumnModified(SightingPeer::CREATED_AT)) $criteria->add(SightingPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SightingPeer::UPDATED_AT)) $criteria->add(SightingPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(SightingPeer::DATABASE_NAME);
		$criteria->add(SightingPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Sighting (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setRecordId($this->record_id);
		$copyObj->setSpecieId($this->specie_id);
		$copyObj->setBehaviourId($this->behaviour_id);
		$copyObj->setAssociationId($this->association_id);
		$copyObj->setAdults($this->adults);
		$copyObj->setJuveniles($this->juveniles);
		$copyObj->setCalves($this->calves);
		$copyObj->setTotal($this->total);
		$copyObj->setComments($this->comments);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

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
	 * @return     Sighting Clone of current object.
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
	 * @return     SightingPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SightingPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Record object.
	 *
	 * @param      Record $v
	 * @return     Sighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRecord(Record $v = null)
	{
		if ($v === null) {
			$this->setRecordId(NULL);
		} else {
			$this->setRecordId($v->getId());
		}

		$this->aRecord = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Record object, it will not be re-added.
		if ($v !== null) {
			$v->addSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Record object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Record The associated Record object.
	 * @throws     PropelException
	 */
	public function getRecord(PropelPDO $con = null)
	{
		if ($this->aRecord === null && ($this->record_id !== null)) {
			$this->aRecord = RecordQuery::create()->findPk($this->record_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aRecord->addSightings($this);
			 */
		}
		return $this->aRecord;
	}

	/**
	 * Declares an association between this object and a Specie object.
	 *
	 * @param      Specie $v
	 * @return     Sighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSpecie(Specie $v = null)
	{
		if ($v === null) {
			$this->setSpecieId(NULL);
		} else {
			$this->setSpecieId($v->getId());
		}

		$this->aSpecie = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Specie object, it will not be re-added.
		if ($v !== null) {
			$v->addSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Specie object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Specie The associated Specie object.
	 * @throws     PropelException
	 */
	public function getSpecie(PropelPDO $con = null)
	{
		if ($this->aSpecie === null && ($this->specie_id !== null)) {
			$this->aSpecie = SpecieQuery::create()->findPk($this->specie_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSpecie->addSightings($this);
			 */
		}
		return $this->aSpecie;
	}

	/**
	 * Declares an association between this object and a Behaviour object.
	 *
	 * @param      Behaviour $v
	 * @return     Sighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBehaviour(Behaviour $v = null)
	{
		if ($v === null) {
			$this->setBehaviourId(NULL);
		} else {
			$this->setBehaviourId($v->getId());
		}

		$this->aBehaviour = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Behaviour object, it will not be re-added.
		if ($v !== null) {
			$v->addSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Behaviour object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Behaviour The associated Behaviour object.
	 * @throws     PropelException
	 */
	public function getBehaviour(PropelPDO $con = null)
	{
		if ($this->aBehaviour === null && ($this->behaviour_id !== null)) {
			$this->aBehaviour = BehaviourQuery::create()->findPk($this->behaviour_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aBehaviour->addSightings($this);
			 */
		}
		return $this->aBehaviour;
	}

	/**
	 * Declares an association between this object and a Association object.
	 *
	 * @param      Association $v
	 * @return     Sighting The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setAssociation(Association $v = null)
	{
		if ($v === null) {
			$this->setAssociationId(NULL);
		} else {
			$this->setAssociationId($v->getId());
		}

		$this->aAssociation = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Association object, it will not be re-added.
		if ($v !== null) {
			$v->addSighting($this);
		}

		return $this;
	}


	/**
	 * Get the associated Association object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Association The associated Association object.
	 * @throws     PropelException
	 */
	public function getAssociation(PropelPDO $con = null)
	{
		if ($this->aAssociation === null && ($this->association_id !== null)) {
			$this->aAssociation = AssociationQuery::create()->findPk($this->association_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aAssociation->addSightings($this);
			 */
		}
		return $this->aAssociation;
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
	 * If this Sighting is new, it will return
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
					->filterBySighting($this)
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
					->filterBySighting($this)
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
			$l->setSighting($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array ObservationPhoto[] List of ObservationPhoto objects
	 */
	public function getObservationPhotosJoinVessel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ObservationPhotoQuery::create(null, $criteria);
		$query->joinWith('Vessel', $join_behavior);

		return $this->getObservationPhotos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
	 * Otherwise if this Sighting is new, it will return
	 * an empty collection; or if this Sighting has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Sighting.
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
		$this->record_id = null;
		$this->specie_id = null;
		$this->behaviour_id = null;
		$this->association_id = null;
		$this->adults = null;
		$this->juveniles = null;
		$this->calves = null;
		$this->total = null;
		$this->comments = null;
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
			if ($this->collObservationPhotos) {
				foreach ((array) $this->collObservationPhotos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collObservationPhotos = null;
		$this->aRecord = null;
		$this->aSpecie = null;
		$this->aBehaviour = null;
		$this->aAssociation = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseSighting:' . $name))
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

} // BaseSighting
