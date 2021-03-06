<?php


/**
 * Base class that represents a row from the 'observation_photo' table.
 *
 * 
 *
 * @package    propel.generator.plugins.photoRepoPlugin.lib.model.om
 */
abstract class BaseObservationPhoto extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ObservationPhotoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ObservationPhotoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the code field.
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the file_name field.
	 * @var        string
	 */
	protected $file_name;

	/**
	 * The value for the photo_date field.
	 * @var        string
	 */
	protected $photo_date;

	/**
	 * The value for the photo_time field.
	 * @var        string
	 */
	protected $photo_time;

	/**
	 * The value for the individual_id field.
	 * @var        int
	 */
	protected $individual_id;

	/**
	 * The value for the specie_id field.
	 * @var        int
	 */
	protected $specie_id;

	/**
	 * The value for the island field.
	 * @var        string
	 */
	protected $island;

	/**
	 * The value for the body_part_id field.
	 * @var        int
	 */
	protected $body_part_id;

	/**
	 * The value for the gender field.
	 * @var        string
	 */
	protected $gender;

	/**
	 * The value for the age_group field.
	 * @var        string
	 */
	protected $age_group;

	/**
	 * The value for the behaviour_id field.
	 * @var        int
	 */
	protected $behaviour_id;

	/**
	 * The value for the latitude field.
	 * @var        string
	 */
	protected $latitude;

	/**
	 * The value for the longitude field.
	 * @var        string
	 */
	protected $longitude;

	/**
	 * The value for the company_id field.
	 * @var        int
	 */
	protected $company_id;

	/**
	 * The value for the vessel_id field.
	 * @var        int
	 */
	protected $vessel_id;

	/**
	 * The value for the photographer_id field.
	 * @var        int
	 */
	protected $photographer_id;

	/**
	 * The value for the kind_of_photo field.
	 * @var        string
	 */
	protected $kind_of_photo;

	/**
	 * The value for the photo_quality field.
	 * @var        string
	 */
	protected $photo_quality;

	/**
	 * The value for the sighting_id field.
	 * @var        int
	 */
	protected $sighting_id;

	/**
	 * The value for the is_best field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_best;

	/**
	 * The value for the notes field.
	 * @var        string
	 */
	protected $notes;

	/**
	 * The value for the uploaded_at field.
	 * @var        string
	 */
	protected $uploaded_at;

	/**
	 * The value for the status field.
	 * @var        string
	 */
	protected $status;

	/**
	 * The value for the last_edited_by field.
	 * @var        int
	 */
	protected $last_edited_by;

	/**
	 * The value for the validated_by field.
	 * @var        int
	 */
	protected $validated_by;

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
	 * @var        Individual
	 */
	protected $aIndividual;

	/**
	 * @var        Specie
	 */
	protected $aSpecie;

	/**
	 * @var        BodyPart
	 */
	protected $aBodyPart;

	/**
	 * @var        Behaviour
	 */
	protected $aBehaviour;

	/**
	 * @var        Company
	 */
	protected $aCompany;

	/**
	 * @var        Vessel
	 */
	protected $aVessel;

	/**
	 * @var        Photographer
	 */
	protected $aPhotographer;

	/**
	 * @var        Sighting
	 */
	protected $aSighting;

	/**
	 * @var        sfGuardUser
	 */
	protected $asfGuardUserRelatedByLastEditedBy;

	/**
	 * @var        sfGuardUser
	 */
	protected $asfGuardUserRelatedByValidatedBy;

	/**
	 * @var        array ObservationPhotoI18n[] Collection to store aggregation of ObservationPhotoI18n objects.
	 */
	protected $collObservationPhotoI18ns;

	/**
	 * @var        array ObservationPhotoTail[] Collection to store aggregation of ObservationPhotoTail objects.
	 */
	protected $collObservationPhotoTails;

	/**
	 * @var        array ObservationPhotoDorsalLeft[] Collection to store aggregation of ObservationPhotoDorsalLeft objects.
	 */
	protected $collObservationPhotoDorsalLefts;

	/**
	 * @var        array ObservationPhotoDorsalRight[] Collection to store aggregation of ObservationPhotoDorsalRight objects.
	 */
	protected $collObservationPhotoDorsalRights;

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

	// symfony_i18n behavior
	
	/**
	 * @var string The value for the culture field
	 */
	protected $culture = null;
	
	/**
	 * @var array Current I18N objects
	 */
	protected $current_i18n = array();

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->is_best = false;
	}

	/**
	 * Initializes internal state of BaseObservationPhoto object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

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
	 * Get the [code] column value.
	 * 
	 * @return     string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the [file_name] column value.
	 * 
	 * @return     string
	 */
	public function getFileName()
	{
		return $this->file_name;
	}

	/**
	 * Get the [optionally formatted] temporal [photo_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPhotoDate($format = 'Y-m-d')
	{
		if ($this->photo_date === null) {
			return null;
		}


		if ($this->photo_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->photo_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->photo_date, true), $x);
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
	 * Get the [optionally formatted] temporal [photo_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPhotoTime($format = 'H:i:s')
	{
		if ($this->photo_time === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->photo_time);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->photo_time, true), $x);
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
	 * Get the [individual_id] column value.
	 * 
	 * @return     int
	 */
	public function getIndividualId()
	{
		return $this->individual_id;
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
	 * Get the [island] column value.
	 * 
	 * @return     string
	 */
	public function getIsland()
	{
		return $this->island;
	}

	/**
	 * Get the [body_part_id] column value.
	 * 
	 * @return     int
	 */
	public function getBodyPartId()
	{
		return $this->body_part_id;
	}

	/**
	 * Get the [gender] column value.
	 * 
	 * @return     string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Get the [age_group] column value.
	 * 
	 * @return     string
	 */
	public function getAgeGroup()
	{
		return $this->age_group;
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
	 * Get the [latitude] column value.
	 * 
	 * @return     string
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * Get the [longitude] column value.
	 * 
	 * @return     string
	 */
	public function getLongitude()
	{
		return $this->longitude;
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
	 * Get the [vessel_id] column value.
	 * 
	 * @return     int
	 */
	public function getVesselId()
	{
		return $this->vessel_id;
	}

	/**
	 * Get the [photographer_id] column value.
	 * 
	 * @return     int
	 */
	public function getPhotographerId()
	{
		return $this->photographer_id;
	}

	/**
	 * Get the [kind_of_photo] column value.
	 * 
	 * @return     string
	 */
	public function getKindOfPhoto()
	{
		return $this->kind_of_photo;
	}

	/**
	 * Get the [photo_quality] column value.
	 * 
	 * @return     string
	 */
	public function getPhotoQuality()
	{
		return $this->photo_quality;
	}

	/**
	 * Get the [sighting_id] column value.
	 * 
	 * @return     int
	 */
	public function getSightingId()
	{
		return $this->sighting_id;
	}

	/**
	 * Get the [is_best] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsBest()
	{
		return $this->is_best;
	}

	/**
	 * Get the [notes] column value.
	 * 
	 * @return     string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

	/**
	 * Get the [optionally formatted] temporal [uploaded_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUploadedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->uploaded_at === null) {
			return null;
		}


		if ($this->uploaded_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->uploaded_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->uploaded_at, true), $x);
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
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Get the [last_edited_by] column value.
	 * 
	 * @return     int
	 */
	public function getLastEditedBy()
	{
		return $this->last_edited_by;
	}

	/**
	 * Get the [validated_by] column value.
	 * 
	 * @return     int
	 */
	public function getValidatedBy()
	{
		return $this->validated_by;
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
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [file_name] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setFileName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->file_name !== $v) {
			$this->file_name = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::FILE_NAME;
		}

		return $this;
	} // setFileName()

	/**
	 * Sets the value of [photo_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setPhotoDate($v)
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

		if ( $this->photo_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->photo_date !== null && $tmpDt = new DateTime($this->photo_date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->photo_date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = ObservationPhotoPeer::PHOTO_DATE;
			}
		} // if either are not null

		return $this;
	} // setPhotoDate()

	/**
	 * Sets the value of [photo_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setPhotoTime($v)
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

		if ( $this->photo_time !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->photo_time !== null && $tmpDt = new DateTime($this->photo_time)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->photo_time = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = ObservationPhotoPeer::PHOTO_TIME;
			}
		} // if either are not null

		return $this;
	} // setPhotoTime()

	/**
	 * Set the value of [individual_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setIndividualId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->individual_id !== $v) {
			$this->individual_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::INDIVIDUAL_ID;
		}

		if ($this->aIndividual !== null && $this->aIndividual->getId() !== $v) {
			$this->aIndividual = null;
		}

		return $this;
	} // setIndividualId()

	/**
	 * Set the value of [specie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setSpecieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->specie_id !== $v) {
			$this->specie_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::SPECIE_ID;
		}

		if ($this->aSpecie !== null && $this->aSpecie->getId() !== $v) {
			$this->aSpecie = null;
		}

		return $this;
	} // setSpecieId()

	/**
	 * Set the value of [island] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setIsland($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->island !== $v) {
			$this->island = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::ISLAND;
		}

		return $this;
	} // setIsland()

	/**
	 * Set the value of [body_part_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setBodyPartId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->body_part_id !== $v) {
			$this->body_part_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::BODY_PART_ID;
		}

		if ($this->aBodyPart !== null && $this->aBodyPart->getId() !== $v) {
			$this->aBodyPart = null;
		}

		return $this;
	} // setBodyPartId()

	/**
	 * Set the value of [gender] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setGender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::GENDER;
		}

		return $this;
	} // setGender()

	/**
	 * Set the value of [age_group] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setAgeGroup($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->age_group !== $v) {
			$this->age_group = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::AGE_GROUP;
		}

		return $this;
	} // setAgeGroup()

	/**
	 * Set the value of [behaviour_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setBehaviourId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->behaviour_id !== $v) {
			$this->behaviour_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::BEHAVIOUR_ID;
		}

		if ($this->aBehaviour !== null && $this->aBehaviour->getId() !== $v) {
			$this->aBehaviour = null;
		}

		return $this;
	} // setBehaviourId()

	/**
	 * Set the value of [latitude] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setLatitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->latitude !== $v) {
			$this->latitude = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::LATITUDE;
		}

		return $this;
	} // setLatitude()

	/**
	 * Set the value of [longitude] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setLongitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->longitude !== $v) {
			$this->longitude = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::LONGITUDE;
		}

		return $this;
	} // setLongitude()

	/**
	 * Set the value of [company_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setCompanyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->company_id !== $v) {
			$this->company_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::COMPANY_ID;
		}

		if ($this->aCompany !== null && $this->aCompany->getId() !== $v) {
			$this->aCompany = null;
		}

		return $this;
	} // setCompanyId()

	/**
	 * Set the value of [vessel_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setVesselId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->vessel_id !== $v) {
			$this->vessel_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::VESSEL_ID;
		}

		if ($this->aVessel !== null && $this->aVessel->getId() !== $v) {
			$this->aVessel = null;
		}

		return $this;
	} // setVesselId()

	/**
	 * Set the value of [photographer_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setPhotographerId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->photographer_id !== $v) {
			$this->photographer_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::PHOTOGRAPHER_ID;
		}

		if ($this->aPhotographer !== null && $this->aPhotographer->getId() !== $v) {
			$this->aPhotographer = null;
		}

		return $this;
	} // setPhotographerId()

	/**
	 * Set the value of [kind_of_photo] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setKindOfPhoto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->kind_of_photo !== $v) {
			$this->kind_of_photo = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::KIND_OF_PHOTO;
		}

		return $this;
	} // setKindOfPhoto()

	/**
	 * Set the value of [photo_quality] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setPhotoQuality($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->photo_quality !== $v) {
			$this->photo_quality = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::PHOTO_QUALITY;
		}

		return $this;
	} // setPhotoQuality()

	/**
	 * Set the value of [sighting_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setSightingId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sighting_id !== $v) {
			$this->sighting_id = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::SIGHTING_ID;
		}

		if ($this->aSighting !== null && $this->aSighting->getId() !== $v) {
			$this->aSighting = null;
		}

		return $this;
	} // setSightingId()

	/**
	 * Set the value of [is_best] column.
	 * 
	 * @param      boolean $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setIsBest($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_best !== $v || $this->isNew()) {
			$this->is_best = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::IS_BEST;
		}

		return $this;
	} // setIsBest()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Sets the value of [uploaded_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setUploadedAt($v)
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

		if ( $this->uploaded_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->uploaded_at !== null && $tmpDt = new DateTime($this->uploaded_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->uploaded_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ObservationPhotoPeer::UPLOADED_AT;
			}
		} // if either are not null

		return $this;
	} // setUploadedAt()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Set the value of [last_edited_by] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setLastEditedBy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->last_edited_by !== $v) {
			$this->last_edited_by = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::LAST_EDITED_BY;
		}

		if ($this->asfGuardUserRelatedByLastEditedBy !== null && $this->asfGuardUserRelatedByLastEditedBy->getId() !== $v) {
			$this->asfGuardUserRelatedByLastEditedBy = null;
		}

		return $this;
	} // setLastEditedBy()

	/**
	 * Set the value of [validated_by] column.
	 * 
	 * @param      int $v new value
	 * @return     ObservationPhoto The current object (for fluent API support)
	 */
	public function setValidatedBy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->validated_by !== $v) {
			$this->validated_by = $v;
			$this->modifiedColumns[] = ObservationPhotoPeer::VALIDATED_BY;
		}

		if ($this->asfGuardUserRelatedByValidatedBy !== null && $this->asfGuardUserRelatedByValidatedBy->getId() !== $v) {
			$this->asfGuardUserRelatedByValidatedBy = null;
		}

		return $this;
	} // setValidatedBy()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ObservationPhoto The current object (for fluent API support)
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
				$this->modifiedColumns[] = ObservationPhotoPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ObservationPhoto The current object (for fluent API support)
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
				$this->modifiedColumns[] = ObservationPhotoPeer::UPDATED_AT;
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
			if ($this->is_best !== false) {
				return false;
			}

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
			$this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->file_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->photo_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->photo_time = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->individual_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->specie_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->island = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->body_part_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->gender = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->age_group = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->behaviour_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->latitude = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->longitude = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->company_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->vessel_id = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->photographer_id = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->kind_of_photo = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->photo_quality = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->sighting_id = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->is_best = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
			$this->notes = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->uploaded_at = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->status = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->last_edited_by = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->validated_by = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->created_at = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->updated_at = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 28; // 28 = ObservationPhotoPeer::NUM_COLUMNS - ObservationPhotoPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ObservationPhoto object", $e);
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

		if ($this->aIndividual !== null && $this->individual_id !== $this->aIndividual->getId()) {
			$this->aIndividual = null;
		}
		if ($this->aSpecie !== null && $this->specie_id !== $this->aSpecie->getId()) {
			$this->aSpecie = null;
		}
		if ($this->aBodyPart !== null && $this->body_part_id !== $this->aBodyPart->getId()) {
			$this->aBodyPart = null;
		}
		if ($this->aBehaviour !== null && $this->behaviour_id !== $this->aBehaviour->getId()) {
			$this->aBehaviour = null;
		}
		if ($this->aCompany !== null && $this->company_id !== $this->aCompany->getId()) {
			$this->aCompany = null;
		}
		if ($this->aVessel !== null && $this->vessel_id !== $this->aVessel->getId()) {
			$this->aVessel = null;
		}
		if ($this->aPhotographer !== null && $this->photographer_id !== $this->aPhotographer->getId()) {
			$this->aPhotographer = null;
		}
		if ($this->aSighting !== null && $this->sighting_id !== $this->aSighting->getId()) {
			$this->aSighting = null;
		}
		if ($this->asfGuardUserRelatedByLastEditedBy !== null && $this->last_edited_by !== $this->asfGuardUserRelatedByLastEditedBy->getId()) {
			$this->asfGuardUserRelatedByLastEditedBy = null;
		}
		if ($this->asfGuardUserRelatedByValidatedBy !== null && $this->validated_by !== $this->asfGuardUserRelatedByValidatedBy->getId()) {
			$this->asfGuardUserRelatedByValidatedBy = null;
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
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ObservationPhotoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aIndividual = null;
			$this->aSpecie = null;
			$this->aBodyPart = null;
			$this->aBehaviour = null;
			$this->aCompany = null;
			$this->aVessel = null;
			$this->aPhotographer = null;
			$this->aSighting = null;
			$this->asfGuardUserRelatedByLastEditedBy = null;
			$this->asfGuardUserRelatedByValidatedBy = null;
			$this->collObservationPhotoI18ns = null;

			$this->collObservationPhotoTails = null;

			$this->collObservationPhotoDorsalLefts = null;

			$this->collObservationPhotoDorsalRights = null;

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
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseObservationPhoto:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				ObservationPhotoQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseObservationPhoto:delete:post') as $callable)
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
			$con = Propel::getConnection(ObservationPhotoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseObservationPhoto:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(ObservationPhotoPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(ObservationPhotoPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseObservationPhoto:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ObservationPhotoPeer::addInstanceToPool($this);
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

			if ($this->aIndividual !== null) {
				if ($this->aIndividual->isModified() || $this->aIndividual->isNew()) {
					$affectedRows += $this->aIndividual->save($con);
				}
				$this->setIndividual($this->aIndividual);
			}

			if ($this->aSpecie !== null) {
				if ($this->aSpecie->isModified() || $this->aSpecie->isNew()) {
					$affectedRows += $this->aSpecie->save($con);
				}
				$this->setSpecie($this->aSpecie);
			}

			if ($this->aBodyPart !== null) {
				if ($this->aBodyPart->isModified() || $this->aBodyPart->isNew()) {
					$affectedRows += $this->aBodyPart->save($con);
				}
				$this->setBodyPart($this->aBodyPart);
			}

			if ($this->aBehaviour !== null) {
				if ($this->aBehaviour->isModified() || $this->aBehaviour->isNew()) {
					$affectedRows += $this->aBehaviour->save($con);
				}
				$this->setBehaviour($this->aBehaviour);
			}

			if ($this->aCompany !== null) {
				if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
					$affectedRows += $this->aCompany->save($con);
				}
				$this->setCompany($this->aCompany);
			}

			if ($this->aVessel !== null) {
				if ($this->aVessel->isModified() || $this->aVessel->isNew()) {
					$affectedRows += $this->aVessel->save($con);
				}
				$this->setVessel($this->aVessel);
			}

			if ($this->aPhotographer !== null) {
				if ($this->aPhotographer->isModified() || $this->aPhotographer->isNew()) {
					$affectedRows += $this->aPhotographer->save($con);
				}
				$this->setPhotographer($this->aPhotographer);
			}

			if ($this->aSighting !== null) {
				if ($this->aSighting->isModified() || $this->aSighting->isNew()) {
					$affectedRows += $this->aSighting->save($con);
				}
				$this->setSighting($this->aSighting);
			}

			if ($this->asfGuardUserRelatedByLastEditedBy !== null) {
				if ($this->asfGuardUserRelatedByLastEditedBy->isModified() || $this->asfGuardUserRelatedByLastEditedBy->isNew()) {
					$affectedRows += $this->asfGuardUserRelatedByLastEditedBy->save($con);
				}
				$this->setsfGuardUserRelatedByLastEditedBy($this->asfGuardUserRelatedByLastEditedBy);
			}

			if ($this->asfGuardUserRelatedByValidatedBy !== null) {
				if ($this->asfGuardUserRelatedByValidatedBy->isModified() || $this->asfGuardUserRelatedByValidatedBy->isNew()) {
					$affectedRows += $this->asfGuardUserRelatedByValidatedBy->save($con);
				}
				$this->setsfGuardUserRelatedByValidatedBy($this->asfGuardUserRelatedByValidatedBy);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ObservationPhotoPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ObservationPhotoPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ObservationPhotoPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += ObservationPhotoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collObservationPhotoI18ns !== null) {
				foreach ($this->collObservationPhotoI18ns as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collObservationPhotoTails !== null) {
				foreach ($this->collObservationPhotoTails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collObservationPhotoDorsalLefts !== null) {
				foreach ($this->collObservationPhotoDorsalLefts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collObservationPhotoDorsalRights !== null) {
				foreach ($this->collObservationPhotoDorsalRights as $referrerFK) {
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

			if ($this->aIndividual !== null) {
				if (!$this->aIndividual->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aIndividual->getValidationFailures());
				}
			}

			if ($this->aSpecie !== null) {
				if (!$this->aSpecie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSpecie->getValidationFailures());
				}
			}

			if ($this->aBodyPart !== null) {
				if (!$this->aBodyPart->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBodyPart->getValidationFailures());
				}
			}

			if ($this->aBehaviour !== null) {
				if (!$this->aBehaviour->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBehaviour->getValidationFailures());
				}
			}

			if ($this->aCompany !== null) {
				if (!$this->aCompany->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCompany->getValidationFailures());
				}
			}

			if ($this->aVessel !== null) {
				if (!$this->aVessel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVessel->getValidationFailures());
				}
			}

			if ($this->aPhotographer !== null) {
				if (!$this->aPhotographer->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPhotographer->getValidationFailures());
				}
			}

			if ($this->aSighting !== null) {
				if (!$this->aSighting->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSighting->getValidationFailures());
				}
			}

			if ($this->asfGuardUserRelatedByLastEditedBy !== null) {
				if (!$this->asfGuardUserRelatedByLastEditedBy->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfGuardUserRelatedByLastEditedBy->getValidationFailures());
				}
			}

			if ($this->asfGuardUserRelatedByValidatedBy !== null) {
				if (!$this->asfGuardUserRelatedByValidatedBy->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfGuardUserRelatedByValidatedBy->getValidationFailures());
				}
			}


			if (($retval = ObservationPhotoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collObservationPhotoI18ns !== null) {
					foreach ($this->collObservationPhotoI18ns as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collObservationPhotoTails !== null) {
					foreach ($this->collObservationPhotoTails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collObservationPhotoDorsalLefts !== null) {
					foreach ($this->collObservationPhotoDorsalLefts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collObservationPhotoDorsalRights !== null) {
					foreach ($this->collObservationPhotoDorsalRights as $referrerFK) {
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
		$pos = ObservationPhotoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCode();
				break;
			case 2:
				return $this->getFileName();
				break;
			case 3:
				return $this->getPhotoDate();
				break;
			case 4:
				return $this->getPhotoTime();
				break;
			case 5:
				return $this->getIndividualId();
				break;
			case 6:
				return $this->getSpecieId();
				break;
			case 7:
				return $this->getIsland();
				break;
			case 8:
				return $this->getBodyPartId();
				break;
			case 9:
				return $this->getGender();
				break;
			case 10:
				return $this->getAgeGroup();
				break;
			case 11:
				return $this->getBehaviourId();
				break;
			case 12:
				return $this->getLatitude();
				break;
			case 13:
				return $this->getLongitude();
				break;
			case 14:
				return $this->getCompanyId();
				break;
			case 15:
				return $this->getVesselId();
				break;
			case 16:
				return $this->getPhotographerId();
				break;
			case 17:
				return $this->getKindOfPhoto();
				break;
			case 18:
				return $this->getPhotoQuality();
				break;
			case 19:
				return $this->getSightingId();
				break;
			case 20:
				return $this->getIsBest();
				break;
			case 21:
				return $this->getNotes();
				break;
			case 22:
				return $this->getUploadedAt();
				break;
			case 23:
				return $this->getStatus();
				break;
			case 24:
				return $this->getLastEditedBy();
				break;
			case 25:
				return $this->getValidatedBy();
				break;
			case 26:
				return $this->getCreatedAt();
				break;
			case 27:
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
		$keys = ObservationPhotoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCode(),
			$keys[2] => $this->getFileName(),
			$keys[3] => $this->getPhotoDate(),
			$keys[4] => $this->getPhotoTime(),
			$keys[5] => $this->getIndividualId(),
			$keys[6] => $this->getSpecieId(),
			$keys[7] => $this->getIsland(),
			$keys[8] => $this->getBodyPartId(),
			$keys[9] => $this->getGender(),
			$keys[10] => $this->getAgeGroup(),
			$keys[11] => $this->getBehaviourId(),
			$keys[12] => $this->getLatitude(),
			$keys[13] => $this->getLongitude(),
			$keys[14] => $this->getCompanyId(),
			$keys[15] => $this->getVesselId(),
			$keys[16] => $this->getPhotographerId(),
			$keys[17] => $this->getKindOfPhoto(),
			$keys[18] => $this->getPhotoQuality(),
			$keys[19] => $this->getSightingId(),
			$keys[20] => $this->getIsBest(),
			$keys[21] => $this->getNotes(),
			$keys[22] => $this->getUploadedAt(),
			$keys[23] => $this->getStatus(),
			$keys[24] => $this->getLastEditedBy(),
			$keys[25] => $this->getValidatedBy(),
			$keys[26] => $this->getCreatedAt(),
			$keys[27] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aIndividual) {
				$result['Individual'] = $this->aIndividual->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aSpecie) {
				$result['Specie'] = $this->aSpecie->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBodyPart) {
				$result['BodyPart'] = $this->aBodyPart->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBehaviour) {
				$result['Behaviour'] = $this->aBehaviour->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCompany) {
				$result['Company'] = $this->aCompany->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aVessel) {
				$result['Vessel'] = $this->aVessel->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aPhotographer) {
				$result['Photographer'] = $this->aPhotographer->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aSighting) {
				$result['Sighting'] = $this->aSighting->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->asfGuardUserRelatedByLastEditedBy) {
				$result['sfGuardUserRelatedByLastEditedBy'] = $this->asfGuardUserRelatedByLastEditedBy->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->asfGuardUserRelatedByValidatedBy) {
				$result['sfGuardUserRelatedByValidatedBy'] = $this->asfGuardUserRelatedByValidatedBy->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = ObservationPhotoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCode($value);
				break;
			case 2:
				$this->setFileName($value);
				break;
			case 3:
				$this->setPhotoDate($value);
				break;
			case 4:
				$this->setPhotoTime($value);
				break;
			case 5:
				$this->setIndividualId($value);
				break;
			case 6:
				$this->setSpecieId($value);
				break;
			case 7:
				$this->setIsland($value);
				break;
			case 8:
				$this->setBodyPartId($value);
				break;
			case 9:
				$this->setGender($value);
				break;
			case 10:
				$this->setAgeGroup($value);
				break;
			case 11:
				$this->setBehaviourId($value);
				break;
			case 12:
				$this->setLatitude($value);
				break;
			case 13:
				$this->setLongitude($value);
				break;
			case 14:
				$this->setCompanyId($value);
				break;
			case 15:
				$this->setVesselId($value);
				break;
			case 16:
				$this->setPhotographerId($value);
				break;
			case 17:
				$this->setKindOfPhoto($value);
				break;
			case 18:
				$this->setPhotoQuality($value);
				break;
			case 19:
				$this->setSightingId($value);
				break;
			case 20:
				$this->setIsBest($value);
				break;
			case 21:
				$this->setNotes($value);
				break;
			case 22:
				$this->setUploadedAt($value);
				break;
			case 23:
				$this->setStatus($value);
				break;
			case 24:
				$this->setLastEditedBy($value);
				break;
			case 25:
				$this->setValidatedBy($value);
				break;
			case 26:
				$this->setCreatedAt($value);
				break;
			case 27:
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
		$keys = ObservationPhotoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFileName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPhotoDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPhotoTime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIndividualId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSpecieId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIsland($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBodyPartId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGender($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAgeGroup($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setBehaviourId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLatitude($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setLongitude($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCompanyId($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setVesselId($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPhotographerId($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setKindOfPhoto($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setPhotoQuality($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSightingId($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setIsBest($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setNotes($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setUploadedAt($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setStatus($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setLastEditedBy($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setValidatedBy($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCreatedAt($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setUpdatedAt($arr[$keys[27]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ObservationPhotoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ObservationPhotoPeer::ID)) $criteria->add(ObservationPhotoPeer::ID, $this->id);
		if ($this->isColumnModified(ObservationPhotoPeer::CODE)) $criteria->add(ObservationPhotoPeer::CODE, $this->code);
		if ($this->isColumnModified(ObservationPhotoPeer::FILE_NAME)) $criteria->add(ObservationPhotoPeer::FILE_NAME, $this->file_name);
		if ($this->isColumnModified(ObservationPhotoPeer::PHOTO_DATE)) $criteria->add(ObservationPhotoPeer::PHOTO_DATE, $this->photo_date);
		if ($this->isColumnModified(ObservationPhotoPeer::PHOTO_TIME)) $criteria->add(ObservationPhotoPeer::PHOTO_TIME, $this->photo_time);
		if ($this->isColumnModified(ObservationPhotoPeer::INDIVIDUAL_ID)) $criteria->add(ObservationPhotoPeer::INDIVIDUAL_ID, $this->individual_id);
		if ($this->isColumnModified(ObservationPhotoPeer::SPECIE_ID)) $criteria->add(ObservationPhotoPeer::SPECIE_ID, $this->specie_id);
		if ($this->isColumnModified(ObservationPhotoPeer::ISLAND)) $criteria->add(ObservationPhotoPeer::ISLAND, $this->island);
		if ($this->isColumnModified(ObservationPhotoPeer::BODY_PART_ID)) $criteria->add(ObservationPhotoPeer::BODY_PART_ID, $this->body_part_id);
		if ($this->isColumnModified(ObservationPhotoPeer::GENDER)) $criteria->add(ObservationPhotoPeer::GENDER, $this->gender);
		if ($this->isColumnModified(ObservationPhotoPeer::AGE_GROUP)) $criteria->add(ObservationPhotoPeer::AGE_GROUP, $this->age_group);
		if ($this->isColumnModified(ObservationPhotoPeer::BEHAVIOUR_ID)) $criteria->add(ObservationPhotoPeer::BEHAVIOUR_ID, $this->behaviour_id);
		if ($this->isColumnModified(ObservationPhotoPeer::LATITUDE)) $criteria->add(ObservationPhotoPeer::LATITUDE, $this->latitude);
		if ($this->isColumnModified(ObservationPhotoPeer::LONGITUDE)) $criteria->add(ObservationPhotoPeer::LONGITUDE, $this->longitude);
		if ($this->isColumnModified(ObservationPhotoPeer::COMPANY_ID)) $criteria->add(ObservationPhotoPeer::COMPANY_ID, $this->company_id);
		if ($this->isColumnModified(ObservationPhotoPeer::VESSEL_ID)) $criteria->add(ObservationPhotoPeer::VESSEL_ID, $this->vessel_id);
		if ($this->isColumnModified(ObservationPhotoPeer::PHOTOGRAPHER_ID)) $criteria->add(ObservationPhotoPeer::PHOTOGRAPHER_ID, $this->photographer_id);
		if ($this->isColumnModified(ObservationPhotoPeer::KIND_OF_PHOTO)) $criteria->add(ObservationPhotoPeer::KIND_OF_PHOTO, $this->kind_of_photo);
		if ($this->isColumnModified(ObservationPhotoPeer::PHOTO_QUALITY)) $criteria->add(ObservationPhotoPeer::PHOTO_QUALITY, $this->photo_quality);
		if ($this->isColumnModified(ObservationPhotoPeer::SIGHTING_ID)) $criteria->add(ObservationPhotoPeer::SIGHTING_ID, $this->sighting_id);
		if ($this->isColumnModified(ObservationPhotoPeer::IS_BEST)) $criteria->add(ObservationPhotoPeer::IS_BEST, $this->is_best);
		if ($this->isColumnModified(ObservationPhotoPeer::NOTES)) $criteria->add(ObservationPhotoPeer::NOTES, $this->notes);
		if ($this->isColumnModified(ObservationPhotoPeer::UPLOADED_AT)) $criteria->add(ObservationPhotoPeer::UPLOADED_AT, $this->uploaded_at);
		if ($this->isColumnModified(ObservationPhotoPeer::STATUS)) $criteria->add(ObservationPhotoPeer::STATUS, $this->status);
		if ($this->isColumnModified(ObservationPhotoPeer::LAST_EDITED_BY)) $criteria->add(ObservationPhotoPeer::LAST_EDITED_BY, $this->last_edited_by);
		if ($this->isColumnModified(ObservationPhotoPeer::VALIDATED_BY)) $criteria->add(ObservationPhotoPeer::VALIDATED_BY, $this->validated_by);
		if ($this->isColumnModified(ObservationPhotoPeer::CREATED_AT)) $criteria->add(ObservationPhotoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ObservationPhotoPeer::UPDATED_AT)) $criteria->add(ObservationPhotoPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(ObservationPhotoPeer::DATABASE_NAME);
		$criteria->add(ObservationPhotoPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of ObservationPhoto (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCode($this->code);
		$copyObj->setFileName($this->file_name);
		$copyObj->setPhotoDate($this->photo_date);
		$copyObj->setPhotoTime($this->photo_time);
		$copyObj->setIndividualId($this->individual_id);
		$copyObj->setSpecieId($this->specie_id);
		$copyObj->setIsland($this->island);
		$copyObj->setBodyPartId($this->body_part_id);
		$copyObj->setGender($this->gender);
		$copyObj->setAgeGroup($this->age_group);
		$copyObj->setBehaviourId($this->behaviour_id);
		$copyObj->setLatitude($this->latitude);
		$copyObj->setLongitude($this->longitude);
		$copyObj->setCompanyId($this->company_id);
		$copyObj->setVesselId($this->vessel_id);
		$copyObj->setPhotographerId($this->photographer_id);
		$copyObj->setKindOfPhoto($this->kind_of_photo);
		$copyObj->setPhotoQuality($this->photo_quality);
		$copyObj->setSightingId($this->sighting_id);
		$copyObj->setIsBest($this->is_best);
		$copyObj->setNotes($this->notes);
		$copyObj->setUploadedAt($this->uploaded_at);
		$copyObj->setStatus($this->status);
		$copyObj->setLastEditedBy($this->last_edited_by);
		$copyObj->setValidatedBy($this->validated_by);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getObservationPhotoI18ns() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhotoI18n($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getObservationPhotoTails() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhotoTail($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getObservationPhotoDorsalLefts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhotoDorsalLeft($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getObservationPhotoDorsalRights() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addObservationPhotoDorsalRight($relObj->copy($deepCopy));
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
	 * @return     ObservationPhoto Clone of current object.
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
	 * @return     ObservationPhotoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ObservationPhotoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Individual object.
	 *
	 * @param      Individual $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setIndividual(Individual $v = null)
	{
		if ($v === null) {
			$this->setIndividualId(NULL);
		} else {
			$this->setIndividualId($v->getId());
		}

		$this->aIndividual = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Individual object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhoto($this);
		}

		return $this;
	}


	/**
	 * Get the associated Individual object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Individual The associated Individual object.
	 * @throws     PropelException
	 */
	public function getIndividual(PropelPDO $con = null)
	{
		if ($this->aIndividual === null && ($this->individual_id !== null)) {
			$this->aIndividual = IndividualQuery::create()->findPk($this->individual_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aIndividual->addObservationPhotos($this);
			 */
		}
		return $this->aIndividual;
	}

	/**
	 * Declares an association between this object and a Specie object.
	 *
	 * @param      Specie $v
	 * @return     ObservationPhoto The current object (for fluent API support)
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
			$v->addObservationPhoto($this);
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
				 $this->aSpecie->addObservationPhotos($this);
			 */
		}
		return $this->aSpecie;
	}

	/**
	 * Declares an association between this object and a BodyPart object.
	 *
	 * @param      BodyPart $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBodyPart(BodyPart $v = null)
	{
		if ($v === null) {
			$this->setBodyPartId(NULL);
		} else {
			$this->setBodyPartId($v->getId());
		}

		$this->aBodyPart = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the BodyPart object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhoto($this);
		}

		return $this;
	}


	/**
	 * Get the associated BodyPart object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     BodyPart The associated BodyPart object.
	 * @throws     PropelException
	 */
	public function getBodyPart(PropelPDO $con = null)
	{
		if ($this->aBodyPart === null && ($this->body_part_id !== null)) {
			$this->aBodyPart = BodyPartQuery::create()->findPk($this->body_part_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aBodyPart->addObservationPhotos($this);
			 */
		}
		return $this->aBodyPart;
	}

	/**
	 * Declares an association between this object and a Behaviour object.
	 *
	 * @param      Behaviour $v
	 * @return     ObservationPhoto The current object (for fluent API support)
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
			$v->addObservationPhoto($this);
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
				 $this->aBehaviour->addObservationPhotos($this);
			 */
		}
		return $this->aBehaviour;
	}

	/**
	 * Declares an association between this object and a Company object.
	 *
	 * @param      Company $v
	 * @return     ObservationPhoto The current object (for fluent API support)
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
			$v->addObservationPhoto($this);
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
				 $this->aCompany->addObservationPhotos($this);
			 */
		}
		return $this->aCompany;
	}

	/**
	 * Declares an association between this object and a Vessel object.
	 *
	 * @param      Vessel $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setVessel(Vessel $v = null)
	{
		if ($v === null) {
			$this->setVesselId(NULL);
		} else {
			$this->setVesselId($v->getId());
		}

		$this->aVessel = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Vessel object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhoto($this);
		}

		return $this;
	}


	/**
	 * Get the associated Vessel object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Vessel The associated Vessel object.
	 * @throws     PropelException
	 */
	public function getVessel(PropelPDO $con = null)
	{
		if ($this->aVessel === null && ($this->vessel_id !== null)) {
			$this->aVessel = VesselQuery::create()->findPk($this->vessel_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aVessel->addObservationPhotos($this);
			 */
		}
		return $this->aVessel;
	}

	/**
	 * Declares an association between this object and a Photographer object.
	 *
	 * @param      Photographer $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPhotographer(Photographer $v = null)
	{
		if ($v === null) {
			$this->setPhotographerId(NULL);
		} else {
			$this->setPhotographerId($v->getId());
		}

		$this->aPhotographer = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Photographer object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhoto($this);
		}

		return $this;
	}


	/**
	 * Get the associated Photographer object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Photographer The associated Photographer object.
	 * @throws     PropelException
	 */
	public function getPhotographer(PropelPDO $con = null)
	{
		if ($this->aPhotographer === null && ($this->photographer_id !== null)) {
			$this->aPhotographer = PhotographerQuery::create()->findPk($this->photographer_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aPhotographer->addObservationPhotos($this);
			 */
		}
		return $this->aPhotographer;
	}

	/**
	 * Declares an association between this object and a Sighting object.
	 *
	 * @param      Sighting $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSighting(Sighting $v = null)
	{
		if ($v === null) {
			$this->setSightingId(NULL);
		} else {
			$this->setSightingId($v->getId());
		}

		$this->aSighting = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Sighting object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhoto($this);
		}

		return $this;
	}


	/**
	 * Get the associated Sighting object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Sighting The associated Sighting object.
	 * @throws     PropelException
	 */
	public function getSighting(PropelPDO $con = null)
	{
		if ($this->aSighting === null && ($this->sighting_id !== null)) {
			$this->aSighting = SightingQuery::create()->findPk($this->sighting_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aSighting->addObservationPhotos($this);
			 */
		}
		return $this->aSighting;
	}

	/**
	 * Declares an association between this object and a sfGuardUser object.
	 *
	 * @param      sfGuardUser $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUserRelatedByLastEditedBy(sfGuardUser $v = null)
	{
		if ($v === null) {
			$this->setLastEditedBy(NULL);
		} else {
			$this->setLastEditedBy($v->getId());
		}

		$this->asfGuardUserRelatedByLastEditedBy = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhotoRelatedByLastEditedBy($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfGuardUser The associated sfGuardUser object.
	 * @throws     PropelException
	 */
	public function getsfGuardUserRelatedByLastEditedBy(PropelPDO $con = null)
	{
		if ($this->asfGuardUserRelatedByLastEditedBy === null && ($this->last_edited_by !== null)) {
			$this->asfGuardUserRelatedByLastEditedBy = sfGuardUserQuery::create()->findPk($this->last_edited_by, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->asfGuardUserRelatedByLastEditedBy->addObservationPhotosRelatedByLastEditedBy($this);
			 */
		}
		return $this->asfGuardUserRelatedByLastEditedBy;
	}

	/**
	 * Declares an association between this object and a sfGuardUser object.
	 *
	 * @param      sfGuardUser $v
	 * @return     ObservationPhoto The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUserRelatedByValidatedBy(sfGuardUser $v = null)
	{
		if ($v === null) {
			$this->setValidatedBy(NULL);
		} else {
			$this->setValidatedBy($v->getId());
		}

		$this->asfGuardUserRelatedByValidatedBy = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addObservationPhotoRelatedByValidatedBy($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfGuardUser The associated sfGuardUser object.
	 * @throws     PropelException
	 */
	public function getsfGuardUserRelatedByValidatedBy(PropelPDO $con = null)
	{
		if ($this->asfGuardUserRelatedByValidatedBy === null && ($this->validated_by !== null)) {
			$this->asfGuardUserRelatedByValidatedBy = sfGuardUserQuery::create()->findPk($this->validated_by, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->asfGuardUserRelatedByValidatedBy->addObservationPhotosRelatedByValidatedBy($this);
			 */
		}
		return $this->asfGuardUserRelatedByValidatedBy;
	}

	/**
	 * Clears out the collObservationPhotoI18ns collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotoI18ns()
	 */
	public function clearObservationPhotoI18ns()
	{
		$this->collObservationPhotoI18ns = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotoI18ns collection.
	 *
	 * By default this just sets the collObservationPhotoI18ns collection to an empty array (like clearcollObservationPhotoI18ns());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotoI18ns()
	{
		$this->collObservationPhotoI18ns = new PropelObjectCollection();
		$this->collObservationPhotoI18ns->setModel('ObservationPhotoI18n');
	}

	/**
	 * Gets an array of ObservationPhotoI18n objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ObservationPhoto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhotoI18n[] List of ObservationPhotoI18n objects
	 * @throws     PropelException
	 */
	public function getObservationPhotoI18ns($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoI18ns || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoI18ns) {
				// return empty collection
				$this->initObservationPhotoI18ns();
			} else {
				$collObservationPhotoI18ns = ObservationPhotoI18nQuery::create(null, $criteria)
					->filterByObservationPhoto($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotoI18ns;
				}
				$this->collObservationPhotoI18ns = $collObservationPhotoI18ns;
			}
		}
		return $this->collObservationPhotoI18ns;
	}

	/**
	 * Returns the number of related ObservationPhotoI18n objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhotoI18n objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotoI18ns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoI18ns || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoI18ns) {
				return 0;
			} else {
				$query = ObservationPhotoI18nQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByObservationPhoto($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotoI18ns);
		}
	}

	/**
	 * Method called to associate a ObservationPhotoI18n object to this object
	 * through the ObservationPhotoI18n foreign key attribute.
	 *
	 * @param      ObservationPhotoI18n $l ObservationPhotoI18n
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhotoI18n(ObservationPhotoI18n $l)
	{
		if ($this->collObservationPhotoI18ns === null) {
			$this->initObservationPhotoI18ns();
		}
		if (!$this->collObservationPhotoI18ns->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotoI18ns[]= $l;
			$l->setObservationPhoto($this);
		}
	}

	/**
	 * Clears out the collObservationPhotoTails collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotoTails()
	 */
	public function clearObservationPhotoTails()
	{
		$this->collObservationPhotoTails = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotoTails collection.
	 *
	 * By default this just sets the collObservationPhotoTails collection to an empty array (like clearcollObservationPhotoTails());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotoTails()
	{
		$this->collObservationPhotoTails = new PropelObjectCollection();
		$this->collObservationPhotoTails->setModel('ObservationPhotoTail');
	}

	/**
	 * Gets an array of ObservationPhotoTail objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ObservationPhoto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhotoTail[] List of ObservationPhotoTail objects
	 * @throws     PropelException
	 */
	public function getObservationPhotoTails($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoTails || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoTails) {
				// return empty collection
				$this->initObservationPhotoTails();
			} else {
				$collObservationPhotoTails = ObservationPhotoTailQuery::create(null, $criteria)
					->filterByObservationPhoto($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotoTails;
				}
				$this->collObservationPhotoTails = $collObservationPhotoTails;
			}
		}
		return $this->collObservationPhotoTails;
	}

	/**
	 * Returns the number of related ObservationPhotoTail objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhotoTail objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotoTails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoTails || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoTails) {
				return 0;
			} else {
				$query = ObservationPhotoTailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByObservationPhoto($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotoTails);
		}
	}

	/**
	 * Method called to associate a ObservationPhotoTail object to this object
	 * through the ObservationPhotoTail foreign key attribute.
	 *
	 * @param      ObservationPhotoTail $l ObservationPhotoTail
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhotoTail(ObservationPhotoTail $l)
	{
		if ($this->collObservationPhotoTails === null) {
			$this->initObservationPhotoTails();
		}
		if (!$this->collObservationPhotoTails->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotoTails[]= $l;
			$l->setObservationPhoto($this);
		}
	}

	/**
	 * Clears out the collObservationPhotoDorsalLefts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotoDorsalLefts()
	 */
	public function clearObservationPhotoDorsalLefts()
	{
		$this->collObservationPhotoDorsalLefts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotoDorsalLefts collection.
	 *
	 * By default this just sets the collObservationPhotoDorsalLefts collection to an empty array (like clearcollObservationPhotoDorsalLefts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotoDorsalLefts()
	{
		$this->collObservationPhotoDorsalLefts = new PropelObjectCollection();
		$this->collObservationPhotoDorsalLefts->setModel('ObservationPhotoDorsalLeft');
	}

	/**
	 * Gets an array of ObservationPhotoDorsalLeft objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ObservationPhoto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhotoDorsalLeft[] List of ObservationPhotoDorsalLeft objects
	 * @throws     PropelException
	 */
	public function getObservationPhotoDorsalLefts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalLefts || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalLefts) {
				// return empty collection
				$this->initObservationPhotoDorsalLefts();
			} else {
				$collObservationPhotoDorsalLefts = ObservationPhotoDorsalLeftQuery::create(null, $criteria)
					->filterByObservationPhoto($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotoDorsalLefts;
				}
				$this->collObservationPhotoDorsalLefts = $collObservationPhotoDorsalLefts;
			}
		}
		return $this->collObservationPhotoDorsalLefts;
	}

	/**
	 * Returns the number of related ObservationPhotoDorsalLeft objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhotoDorsalLeft objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotoDorsalLefts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalLefts || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalLefts) {
				return 0;
			} else {
				$query = ObservationPhotoDorsalLeftQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByObservationPhoto($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotoDorsalLefts);
		}
	}

	/**
	 * Method called to associate a ObservationPhotoDorsalLeft object to this object
	 * through the ObservationPhotoDorsalLeft foreign key attribute.
	 *
	 * @param      ObservationPhotoDorsalLeft $l ObservationPhotoDorsalLeft
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhotoDorsalLeft(ObservationPhotoDorsalLeft $l)
	{
		if ($this->collObservationPhotoDorsalLefts === null) {
			$this->initObservationPhotoDorsalLefts();
		}
		if (!$this->collObservationPhotoDorsalLefts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotoDorsalLefts[]= $l;
			$l->setObservationPhoto($this);
		}
	}

	/**
	 * Clears out the collObservationPhotoDorsalRights collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addObservationPhotoDorsalRights()
	 */
	public function clearObservationPhotoDorsalRights()
	{
		$this->collObservationPhotoDorsalRights = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collObservationPhotoDorsalRights collection.
	 *
	 * By default this just sets the collObservationPhotoDorsalRights collection to an empty array (like clearcollObservationPhotoDorsalRights());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initObservationPhotoDorsalRights()
	{
		$this->collObservationPhotoDorsalRights = new PropelObjectCollection();
		$this->collObservationPhotoDorsalRights->setModel('ObservationPhotoDorsalRight');
	}

	/**
	 * Gets an array of ObservationPhotoDorsalRight objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ObservationPhoto is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ObservationPhotoDorsalRight[] List of ObservationPhotoDorsalRight objects
	 * @throws     PropelException
	 */
	public function getObservationPhotoDorsalRights($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalRights || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalRights) {
				// return empty collection
				$this->initObservationPhotoDorsalRights();
			} else {
				$collObservationPhotoDorsalRights = ObservationPhotoDorsalRightQuery::create(null, $criteria)
					->filterByObservationPhoto($this)
					->find($con);
				if (null !== $criteria) {
					return $collObservationPhotoDorsalRights;
				}
				$this->collObservationPhotoDorsalRights = $collObservationPhotoDorsalRights;
			}
		}
		return $this->collObservationPhotoDorsalRights;
	}

	/**
	 * Returns the number of related ObservationPhotoDorsalRight objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ObservationPhotoDorsalRight objects.
	 * @throws     PropelException
	 */
	public function countObservationPhotoDorsalRights(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collObservationPhotoDorsalRights || null !== $criteria) {
			if ($this->isNew() && null === $this->collObservationPhotoDorsalRights) {
				return 0;
			} else {
				$query = ObservationPhotoDorsalRightQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByObservationPhoto($this)
					->count($con);
			}
		} else {
			return count($this->collObservationPhotoDorsalRights);
		}
	}

	/**
	 * Method called to associate a ObservationPhotoDorsalRight object to this object
	 * through the ObservationPhotoDorsalRight foreign key attribute.
	 *
	 * @param      ObservationPhotoDorsalRight $l ObservationPhotoDorsalRight
	 * @return     void
	 * @throws     PropelException
	 */
	public function addObservationPhotoDorsalRight(ObservationPhotoDorsalRight $l)
	{
		if ($this->collObservationPhotoDorsalRights === null) {
			$this->initObservationPhotoDorsalRights();
		}
		if (!$this->collObservationPhotoDorsalRights->contains($l)) { // only add it if the **same** object is not already associated
			$this->collObservationPhotoDorsalRights[]= $l;
			$l->setObservationPhoto($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->code = null;
		$this->file_name = null;
		$this->photo_date = null;
		$this->photo_time = null;
		$this->individual_id = null;
		$this->specie_id = null;
		$this->island = null;
		$this->body_part_id = null;
		$this->gender = null;
		$this->age_group = null;
		$this->behaviour_id = null;
		$this->latitude = null;
		$this->longitude = null;
		$this->company_id = null;
		$this->vessel_id = null;
		$this->photographer_id = null;
		$this->kind_of_photo = null;
		$this->photo_quality = null;
		$this->sighting_id = null;
		$this->is_best = null;
		$this->notes = null;
		$this->uploaded_at = null;
		$this->status = null;
		$this->last_edited_by = null;
		$this->validated_by = null;
		$this->created_at = null;
		$this->updated_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
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
			if ($this->collObservationPhotoI18ns) {
				foreach ((array) $this->collObservationPhotoI18ns as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotoTails) {
				foreach ((array) $this->collObservationPhotoTails as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotoDorsalLefts) {
				foreach ((array) $this->collObservationPhotoDorsalLefts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotoDorsalRights) {
				foreach ((array) $this->collObservationPhotoDorsalRights as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collObservationPhotoI18ns = null;
		$this->collObservationPhotoTails = null;
		$this->collObservationPhotoDorsalLefts = null;
		$this->collObservationPhotoDorsalRights = null;
		$this->aIndividual = null;
		$this->aSpecie = null;
		$this->aBodyPart = null;
		$this->aBehaviour = null;
		$this->aCompany = null;
		$this->aVessel = null;
		$this->aPhotographer = null;
		$this->aSighting = null;
		$this->asfGuardUserRelatedByLastEditedBy = null;
		$this->asfGuardUserRelatedByValidatedBy = null;
	}

	// symfony_i18n behavior
	
	/**
	 * Returns the culture.
	 *
	 * @return string The culture
	 */
	public function getCulture()
	{
	  return $this->culture;
	}
	
	/**
	 * Sets the culture.
	 *
	 * @param string  The culture to set
	 *
	 * @return ObservationPhoto
	 */
	public function setCulture($culture)
	{
	  $this->culture = $culture;
	  return $this;
	}
	
	/**
	 * Returns the "legend" value from the current {@link ObservationPhotoI18n}.
	 */
	public function getLegend($culture = null)
	{
	  return $this->getCurrentObservationPhotoI18n($culture)->getLegend();
	}
	
	/**
	 * Sets the "legend" value of the current {@link ObservationPhotoI18n}.
	 *
	 * @return ObservationPhoto
	 */
	public function setLegend($value, $culture = null)
	{
	  $this->getCurrentObservationPhotoI18n($culture)->setLegend($value);
	  return $this;
	}
	
	/**
	 * Returns the "comments" value from the current {@link ObservationPhotoI18n}.
	 */
	public function getComments($culture = null)
	{
	  return $this->getCurrentObservationPhotoI18n($culture)->getComments();
	}
	
	/**
	 * Sets the "comments" value of the current {@link ObservationPhotoI18n}.
	 *
	 * @return ObservationPhoto
	 */
	public function setComments($value, $culture = null)
	{
	  $this->getCurrentObservationPhotoI18n($culture)->setComments($value);
	  return $this;
	}
	
	/**
	 * Returns the current translation.
	 *
	 * @return ObservationPhotoI18n
	 */
	public function getCurrentObservationPhotoI18n($culture = null)
	{
	  if (null === $culture)
	  {
	    $culture = null === $this->culture ? sfPropel::getDefaultCulture() : $this->culture;
	  }
	
	  if (!isset($this->current_i18n[$culture]))
	  {
	    $object = $this->isNew() ? null : ObservationPhotoI18nPeer::retrieveByPK($this->getPrimaryKey(), $culture);
	    if ($object)
	    {
	      $this->setObservationPhotoI18nForCulture($object, $culture);
	    }
	    else
	    {
	      $this->setObservationPhotoI18nForCulture(new ObservationPhotoI18n(), $culture);
	      $this->current_i18n[$culture]->setCulture($culture);
	    }
	  }
	
	  return $this->current_i18n[$culture];
	}
	
	/**
	 * Sets the translation object for a culture.
	 */
	public function setObservationPhotoI18nForCulture(ObservationPhotoI18n $object, $culture)
	{
	  $this->current_i18n[$culture] = $object;
	  $this->addObservationPhotoI18n($object);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseObservationPhoto:' . $name))
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

} // BaseObservationPhoto
