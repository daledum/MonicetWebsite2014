<?php

/**
 * Base class that represents a row from the 'sighting' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.0 on:
 *
 * Sat Jan 16 22:17:34 2010
 *
 * @package    lib.model.om
 */
abstract class BaseSighting extends BaseObject  implements Persistent {


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
	 * @var        int
	 */
	protected $adults;

	/**
	 * The value for the juveniles field.
	 * @var        int
	 */
	protected $juveniles;

	/**
	 * The value for the cubs field.
	 * @var        int
	 */
	protected $cubs;

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

	// symfony behavior
	
	const PEER = 'SightingPeer';

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
	 * @return     int
	 */
	public function getAdults()
	{
		return $this->adults;
	}

	/**
	 * Get the [juveniles] column value.
	 * 
	 * @return     int
	 */
	public function getJuveniles()
	{
		return $this->juveniles;
	}

	/**
	 * Get the [cubs] column value.
	 * 
	 * @return     int
	 */
	public function getCubs()
	{
		return $this->cubs;
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
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setAdults($v)
	{
		if ($v !== null) {
			$v = (int) $v;
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
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setJuveniles($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->juveniles !== $v) {
			$this->juveniles = $v;
			$this->modifiedColumns[] = SightingPeer::JUVENILES;
		}

		return $this;
	} // setJuveniles()

	/**
	 * Set the value of [cubs] column.
	 * 
	 * @param      int $v new value
	 * @return     Sighting The current object (for fluent API support)
	 */
	public function setCubs($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cubs !== $v) {
			$this->cubs = $v;
			$this->modifiedColumns[] = SightingPeer::CUBS;
		}

		return $this;
	} // setCubs()

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
			$this->adults = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->juveniles = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->cubs = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 8; // 8 = SightingPeer::NUM_COLUMNS - SightingPeer::NUM_LAZY_LOAD_COLUMNS).

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
			  if ($ret = call_user_func($callable, $this, $con))
			  {
			    return;
			  }
			}

			if ($ret) {
				SightingPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseSighting:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
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
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
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

				$con->commit();
				SightingPeer::addInstanceToPool($this);
				return $affectedRows;
			}
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
					$pk = SightingPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += SightingPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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
				return $this->getCubs();
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
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
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
			$keys[7] => $this->getCubs(),
		);
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
				$this->setCubs($value);
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
		if (array_key_exists($keys[7], $arr)) $this->setCubs($arr[$keys[7]]);
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
		if ($this->isColumnModified(SightingPeer::CUBS)) $criteria->add(SightingPeer::CUBS, $this->cubs);

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

		$copyObj->setCubs($this->cubs);


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
			$this->aRecord = RecordPeer::retrieveByPk($this->record_id);
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
			$this->aSpecie = SpeciePeer::retrieveByPk($this->specie_id);
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
			$this->aBehaviour = BehaviourPeer::retrieveByPk($this->behaviour_id);
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
			$this->aAssociation = AssociationPeer::retrieveByPk($this->association_id);
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
		} // if ($deep)

			$this->aRecord = null;
			$this->aSpecie = null;
			$this->aBehaviour = null;
			$this->aAssociation = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseSighting:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseSighting::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseSighting