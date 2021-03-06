<?php


/**
 * Base class that represents a row from the 'pattern' table.
 *
 * 
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BasePattern extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PatternPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PatternPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the specie_id field.
	 * @var        int
	 */
	protected $specie_id;

	/**
	 * The value for the image_tail field.
	 * @var        string
	 */
	protected $image_tail;

	/**
	 * The value for the image_dorsal_left field.
	 * @var        string
	 */
	protected $image_dorsal_left;

	/**
	 * The value for the image_dorsal_right field.
	 * @var        string
	 */
	protected $image_dorsal_right;

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
	 * @var        Specie
	 */
	protected $aSpecie;

	/**
	 * @var        array PatternCellTail[] Collection to store aggregation of PatternCellTail objects.
	 */
	protected $collPatternCellTails;

	/**
	 * @var        array PatternCellDorsalLeft[] Collection to store aggregation of PatternCellDorsalLeft objects.
	 */
	protected $collPatternCellDorsalLefts;

	/**
	 * @var        array PatternCellDorsalRight[] Collection to store aggregation of PatternCellDorsalRight objects.
	 */
	protected $collPatternCellDorsalRights;

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
	 * Get the [specie_id] column value.
	 * 
	 * @return     int
	 */
	public function getSpecieId()
	{
		return $this->specie_id;
	}

	/**
	 * Get the [image_tail] column value.
	 * 
	 * @return     string
	 */
	public function getImageTail()
	{
		return $this->image_tail;
	}

	/**
	 * Get the [image_dorsal_left] column value.
	 * 
	 * @return     string
	 */
	public function getImageDorsalLeft()
	{
		return $this->image_dorsal_left;
	}

	/**
	 * Get the [image_dorsal_right] column value.
	 * 
	 * @return     string
	 */
	public function getImageDorsalRight()
	{
		return $this->image_dorsal_right;
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
	 * @return     Pattern The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PatternPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [specie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Pattern The current object (for fluent API support)
	 */
	public function setSpecieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->specie_id !== $v) {
			$this->specie_id = $v;
			$this->modifiedColumns[] = PatternPeer::SPECIE_ID;
		}

		if ($this->aSpecie !== null && $this->aSpecie->getId() !== $v) {
			$this->aSpecie = null;
		}

		return $this;
	} // setSpecieId()

	/**
	 * Set the value of [image_tail] column.
	 * 
	 * @param      string $v new value
	 * @return     Pattern The current object (for fluent API support)
	 */
	public function setImageTail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->image_tail !== $v) {
			$this->image_tail = $v;
			$this->modifiedColumns[] = PatternPeer::IMAGE_TAIL;
		}

		return $this;
	} // setImageTail()

	/**
	 * Set the value of [image_dorsal_left] column.
	 * 
	 * @param      string $v new value
	 * @return     Pattern The current object (for fluent API support)
	 */
	public function setImageDorsalLeft($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->image_dorsal_left !== $v) {
			$this->image_dorsal_left = $v;
			$this->modifiedColumns[] = PatternPeer::IMAGE_DORSAL_LEFT;
		}

		return $this;
	} // setImageDorsalLeft()

	/**
	 * Set the value of [image_dorsal_right] column.
	 * 
	 * @param      string $v new value
	 * @return     Pattern The current object (for fluent API support)
	 */
	public function setImageDorsalRight($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->image_dorsal_right !== $v) {
			$this->image_dorsal_right = $v;
			$this->modifiedColumns[] = PatternPeer::IMAGE_DORSAL_RIGHT;
		}

		return $this;
	} // setImageDorsalRight()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Pattern The current object (for fluent API support)
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
				$this->modifiedColumns[] = PatternPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Pattern The current object (for fluent API support)
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
				$this->modifiedColumns[] = PatternPeer::UPDATED_AT;
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
			$this->specie_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->image_tail = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->image_dorsal_left = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->image_dorsal_right = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->updated_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = PatternPeer::NUM_COLUMNS - PatternPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Pattern object", $e);
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

		if ($this->aSpecie !== null && $this->specie_id !== $this->aSpecie->getId()) {
			$this->aSpecie = null;
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
			$con = Propel::getConnection(PatternPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PatternPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aSpecie = null;
			$this->collPatternCellTails = null;

			$this->collPatternCellDorsalLefts = null;

			$this->collPatternCellDorsalRights = null;

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
			$con = Propel::getConnection(PatternPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePattern:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				PatternQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePattern:delete:post') as $callable)
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
			$con = Propel::getConnection(PatternPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePattern:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(PatternPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(PatternPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BasePattern:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				PatternPeer::addInstanceToPool($this);
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

			if ($this->aSpecie !== null) {
				if ($this->aSpecie->isModified() || $this->aSpecie->isNew()) {
					$affectedRows += $this->aSpecie->save($con);
				}
				$this->setSpecie($this->aSpecie);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PatternPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PatternPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PatternPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PatternPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPatternCellTails !== null) {
				foreach ($this->collPatternCellTails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPatternCellDorsalLefts !== null) {
				foreach ($this->collPatternCellDorsalLefts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPatternCellDorsalRights !== null) {
				foreach ($this->collPatternCellDorsalRights as $referrerFK) {
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

			if ($this->aSpecie !== null) {
				if (!$this->aSpecie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSpecie->getValidationFailures());
				}
			}


			if (($retval = PatternPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPatternCellTails !== null) {
					foreach ($this->collPatternCellTails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPatternCellDorsalLefts !== null) {
					foreach ($this->collPatternCellDorsalLefts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPatternCellDorsalRights !== null) {
					foreach ($this->collPatternCellDorsalRights as $referrerFK) {
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
		$pos = PatternPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSpecieId();
				break;
			case 2:
				return $this->getImageTail();
				break;
			case 3:
				return $this->getImageDorsalLeft();
				break;
			case 4:
				return $this->getImageDorsalRight();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
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
		$keys = PatternPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSpecieId(),
			$keys[2] => $this->getImageTail(),
			$keys[3] => $this->getImageDorsalLeft(),
			$keys[4] => $this->getImageDorsalRight(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aSpecie) {
				$result['Specie'] = $this->aSpecie->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = PatternPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSpecieId($value);
				break;
			case 2:
				$this->setImageTail($value);
				break;
			case 3:
				$this->setImageDorsalLeft($value);
				break;
			case 4:
				$this->setImageDorsalRight($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
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
		$keys = PatternPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSpecieId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImageTail($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setImageDorsalLeft($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setImageDorsalRight($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PatternPeer::DATABASE_NAME);

		if ($this->isColumnModified(PatternPeer::ID)) $criteria->add(PatternPeer::ID, $this->id);
		if ($this->isColumnModified(PatternPeer::SPECIE_ID)) $criteria->add(PatternPeer::SPECIE_ID, $this->specie_id);
		if ($this->isColumnModified(PatternPeer::IMAGE_TAIL)) $criteria->add(PatternPeer::IMAGE_TAIL, $this->image_tail);
		if ($this->isColumnModified(PatternPeer::IMAGE_DORSAL_LEFT)) $criteria->add(PatternPeer::IMAGE_DORSAL_LEFT, $this->image_dorsal_left);
		if ($this->isColumnModified(PatternPeer::IMAGE_DORSAL_RIGHT)) $criteria->add(PatternPeer::IMAGE_DORSAL_RIGHT, $this->image_dorsal_right);
		if ($this->isColumnModified(PatternPeer::CREATED_AT)) $criteria->add(PatternPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(PatternPeer::UPDATED_AT)) $criteria->add(PatternPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(PatternPeer::DATABASE_NAME);
		$criteria->add(PatternPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Pattern (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setSpecieId($this->specie_id);
		$copyObj->setImageTail($this->image_tail);
		$copyObj->setImageDorsalLeft($this->image_dorsal_left);
		$copyObj->setImageDorsalRight($this->image_dorsal_right);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPatternCellTails() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPatternCellTail($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPatternCellDorsalLefts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPatternCellDorsalLeft($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPatternCellDorsalRights() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPatternCellDorsalRight($relObj->copy($deepCopy));
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
	 * @return     Pattern Clone of current object.
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
	 * @return     PatternPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PatternPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Specie object.
	 *
	 * @param      Specie $v
	 * @return     Pattern The current object (for fluent API support)
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
			$v->addPattern($this);
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
				 $this->aSpecie->addPatterns($this);
			 */
		}
		return $this->aSpecie;
	}

	/**
	 * Clears out the collPatternCellTails collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPatternCellTails()
	 */
	public function clearPatternCellTails()
	{
		$this->collPatternCellTails = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPatternCellTails collection.
	 *
	 * By default this just sets the collPatternCellTails collection to an empty array (like clearcollPatternCellTails());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPatternCellTails()
	{
		$this->collPatternCellTails = new PropelObjectCollection();
		$this->collPatternCellTails->setModel('PatternCellTail');
	}

	/**
	 * Gets an array of PatternCellTail objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Pattern is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PatternCellTail[] List of PatternCellTail objects
	 * @throws     PropelException
	 */
	public function getPatternCellTails($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellTails || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellTails) {
				// return empty collection
				$this->initPatternCellTails();
			} else {
				$collPatternCellTails = PatternCellTailQuery::create(null, $criteria)
					->filterByPattern($this)
					->find($con);
				if (null !== $criteria) {
					return $collPatternCellTails;
				}
				$this->collPatternCellTails = $collPatternCellTails;
			}
		}
		return $this->collPatternCellTails;
	}

	/**
	 * Returns the number of related PatternCellTail objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PatternCellTail objects.
	 * @throws     PropelException
	 */
	public function countPatternCellTails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellTails || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellTails) {
				return 0;
			} else {
				$query = PatternCellTailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPattern($this)
					->count($con);
			}
		} else {
			return count($this->collPatternCellTails);
		}
	}

	/**
	 * Method called to associate a PatternCellTail object to this object
	 * through the PatternCellTail foreign key attribute.
	 *
	 * @param      PatternCellTail $l PatternCellTail
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPatternCellTail(PatternCellTail $l)
	{
		if ($this->collPatternCellTails === null) {
			$this->initPatternCellTails();
		}
		if (!$this->collPatternCellTails->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPatternCellTails[]= $l;
			$l->setPattern($this);
		}
	}

	/**
	 * Clears out the collPatternCellDorsalLefts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPatternCellDorsalLefts()
	 */
	public function clearPatternCellDorsalLefts()
	{
		$this->collPatternCellDorsalLefts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPatternCellDorsalLefts collection.
	 *
	 * By default this just sets the collPatternCellDorsalLefts collection to an empty array (like clearcollPatternCellDorsalLefts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPatternCellDorsalLefts()
	{
		$this->collPatternCellDorsalLefts = new PropelObjectCollection();
		$this->collPatternCellDorsalLefts->setModel('PatternCellDorsalLeft');
	}

	/**
	 * Gets an array of PatternCellDorsalLeft objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Pattern is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PatternCellDorsalLeft[] List of PatternCellDorsalLeft objects
	 * @throws     PropelException
	 */
	public function getPatternCellDorsalLefts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellDorsalLefts || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellDorsalLefts) {
				// return empty collection
				$this->initPatternCellDorsalLefts();
			} else {
				$collPatternCellDorsalLefts = PatternCellDorsalLeftQuery::create(null, $criteria)
					->filterByPattern($this)
					->find($con);
				if (null !== $criteria) {
					return $collPatternCellDorsalLefts;
				}
				$this->collPatternCellDorsalLefts = $collPatternCellDorsalLefts;
			}
		}
		return $this->collPatternCellDorsalLefts;
	}

	/**
	 * Returns the number of related PatternCellDorsalLeft objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PatternCellDorsalLeft objects.
	 * @throws     PropelException
	 */
	public function countPatternCellDorsalLefts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellDorsalLefts || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellDorsalLefts) {
				return 0;
			} else {
				$query = PatternCellDorsalLeftQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPattern($this)
					->count($con);
			}
		} else {
			return count($this->collPatternCellDorsalLefts);
		}
	}

	/**
	 * Method called to associate a PatternCellDorsalLeft object to this object
	 * through the PatternCellDorsalLeft foreign key attribute.
	 *
	 * @param      PatternCellDorsalLeft $l PatternCellDorsalLeft
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPatternCellDorsalLeft(PatternCellDorsalLeft $l)
	{
		if ($this->collPatternCellDorsalLefts === null) {
			$this->initPatternCellDorsalLefts();
		}
		if (!$this->collPatternCellDorsalLefts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPatternCellDorsalLefts[]= $l;
			$l->setPattern($this);
		}
	}

	/**
	 * Clears out the collPatternCellDorsalRights collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPatternCellDorsalRights()
	 */
	public function clearPatternCellDorsalRights()
	{
		$this->collPatternCellDorsalRights = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPatternCellDorsalRights collection.
	 *
	 * By default this just sets the collPatternCellDorsalRights collection to an empty array (like clearcollPatternCellDorsalRights());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPatternCellDorsalRights()
	{
		$this->collPatternCellDorsalRights = new PropelObjectCollection();
		$this->collPatternCellDorsalRights->setModel('PatternCellDorsalRight');
	}

	/**
	 * Gets an array of PatternCellDorsalRight objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Pattern is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PatternCellDorsalRight[] List of PatternCellDorsalRight objects
	 * @throws     PropelException
	 */
	public function getPatternCellDorsalRights($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellDorsalRights || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellDorsalRights) {
				// return empty collection
				$this->initPatternCellDorsalRights();
			} else {
				$collPatternCellDorsalRights = PatternCellDorsalRightQuery::create(null, $criteria)
					->filterByPattern($this)
					->find($con);
				if (null !== $criteria) {
					return $collPatternCellDorsalRights;
				}
				$this->collPatternCellDorsalRights = $collPatternCellDorsalRights;
			}
		}
		return $this->collPatternCellDorsalRights;
	}

	/**
	 * Returns the number of related PatternCellDorsalRight objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PatternCellDorsalRight objects.
	 * @throws     PropelException
	 */
	public function countPatternCellDorsalRights(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPatternCellDorsalRights || null !== $criteria) {
			if ($this->isNew() && null === $this->collPatternCellDorsalRights) {
				return 0;
			} else {
				$query = PatternCellDorsalRightQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPattern($this)
					->count($con);
			}
		} else {
			return count($this->collPatternCellDorsalRights);
		}
	}

	/**
	 * Method called to associate a PatternCellDorsalRight object to this object
	 * through the PatternCellDorsalRight foreign key attribute.
	 *
	 * @param      PatternCellDorsalRight $l PatternCellDorsalRight
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPatternCellDorsalRight(PatternCellDorsalRight $l)
	{
		if ($this->collPatternCellDorsalRights === null) {
			$this->initPatternCellDorsalRights();
		}
		if (!$this->collPatternCellDorsalRights->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPatternCellDorsalRights[]= $l;
			$l->setPattern($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->specie_id = null;
		$this->image_tail = null;
		$this->image_dorsal_left = null;
		$this->image_dorsal_right = null;
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
			if ($this->collPatternCellTails) {
				foreach ((array) $this->collPatternCellTails as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPatternCellDorsalLefts) {
				foreach ((array) $this->collPatternCellDorsalLefts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPatternCellDorsalRights) {
				foreach ((array) $this->collPatternCellDorsalRights as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collPatternCellTails = null;
		$this->collPatternCellDorsalLefts = null;
		$this->collPatternCellDorsalRights = null;
		$this->aSpecie = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePattern:' . $name))
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

} // BasePattern
