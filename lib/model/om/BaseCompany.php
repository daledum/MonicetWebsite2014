<?php


/**
 * Base class that represents a row from the 'company' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCompany extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CompanyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CompanyPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the acronym field.
	 * @var        string
	 */
	protected $acronym;

	/**
	 * The value for the rec_cet_code field.
	 * @var        string
	 */
	protected $rec_cet_code;

	/**
	 * The value for the base_latitude field.
	 * @var        string
	 */
	protected $base_latitude;

	/**
	 * The value for the base_longitude field.
	 * @var        string
	 */
	protected $base_longitude;

	/**
	 * The value for the telephone field.
	 * @var        string
	 */
	protected $telephone;

	/**
	 * The value for the mobile field.
	 * @var        string
	 */
	protected $mobile;

	/**
	 * The value for the fax field.
	 * @var        string
	 */
	protected $fax;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the address field.
	 * @var        string
	 */
	protected $address;

	/**
	 * The value for the zipcode field.
	 * @var        string
	 */
	protected $zipcode;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the district field.
	 * @var        string
	 */
	protected $district;

	/**
	 * The value for the municipality field.
	 * @var        string
	 */
	protected $municipality;

	/**
	 * The value for the locality field.
	 * @var        string
	 */
	protected $locality;

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
	 * @var        array CompanyUser[] Collection to store aggregation of CompanyUser objects.
	 */
	protected $collCompanyUsers;

	/**
	 * @var        array Vessel[] Collection to store aggregation of Vessel objects.
	 */
	protected $collVessels;

	/**
	 * @var        array Guide[] Collection to store aggregation of Guide objects.
	 */
	protected $collGuides;

	/**
	 * @var        array Skipper[] Collection to store aggregation of Skipper objects.
	 */
	protected $collSkippers;

	/**
	 * @var        array GeneralInfo[] Collection to store aggregation of GeneralInfo objects.
	 */
	protected $collGeneralInfos;

	/**
	 * @var        array WatchInfo[] Collection to store aggregation of WatchInfo objects.
	 */
	protected $collWatchInfos;

	/**
	 * @var        array Watchman[] Collection to store aggregation of Watchman objects.
	 */
	protected $collWatchmans;

	/**
	 * @var        array WatchPost[] Collection to store aggregation of WatchPost objects.
	 */
	protected $collWatchPosts;

	/**
	 * @var        array ChartIframeInformation[] Collection to store aggregation of ChartIframeInformation objects.
	 */
	protected $collChartIframeInformations;

	/**
	 * @var        array MapIframeInformation[] Collection to store aggregation of MapIframeInformation objects.
	 */
	protected $collMapIframeInformations;

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
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [acronym] column value.
	 * 
	 * @return     string
	 */
	public function getAcronym()
	{
		return $this->acronym;
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
	 * Get the [base_latitude] column value.
	 * 
	 * @return     string
	 */
	public function getBaseLatitude()
	{
		return $this->base_latitude;
	}

	/**
	 * Get the [base_longitude] column value.
	 * 
	 * @return     string
	 */
	public function getBaseLongitude()
	{
		return $this->base_longitude;
	}

	/**
	 * Get the [telephone] column value.
	 * 
	 * @return     string
	 */
	public function getTelephone()
	{
		return $this->telephone;
	}

	/**
	 * Get the [mobile] column value.
	 * 
	 * @return     string
	 */
	public function getMobile()
	{
		return $this->mobile;
	}

	/**
	 * Get the [fax] column value.
	 * 
	 * @return     string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [address] column value.
	 * 
	 * @return     string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Get the [zipcode] column value.
	 * 
	 * @return     string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
	}

	/**
	 * Get the [country] column value.
	 * 
	 * @return     string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Get the [district] column value.
	 * 
	 * @return     string
	 */
	public function getDistrict()
	{
		return $this->district;
	}

	/**
	 * Get the [municipality] column value.
	 * 
	 * @return     string
	 */
	public function getMunicipality()
	{
		return $this->municipality;
	}

	/**
	 * Get the [locality] column value.
	 * 
	 * @return     string
	 */
	public function getLocality()
	{
		return $this->locality;
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
	 * @return     Company The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CompanyPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = CompanyPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [acronym] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setAcronym($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->acronym !== $v) {
			$this->acronym = $v;
			$this->modifiedColumns[] = CompanyPeer::ACRONYM;
		}

		return $this;
	} // setAcronym()

	/**
	 * Set the value of [rec_cet_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setRecCetCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rec_cet_code !== $v) {
			$this->rec_cet_code = $v;
			$this->modifiedColumns[] = CompanyPeer::REC_CET_CODE;
		}

		return $this;
	} // setRecCetCode()

	/**
	 * Set the value of [base_latitude] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setBaseLatitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_latitude !== $v) {
			$this->base_latitude = $v;
			$this->modifiedColumns[] = CompanyPeer::BASE_LATITUDE;
		}

		return $this;
	} // setBaseLatitude()

	/**
	 * Set the value of [base_longitude] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setBaseLongitude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->base_longitude !== $v) {
			$this->base_longitude = $v;
			$this->modifiedColumns[] = CompanyPeer::BASE_LONGITUDE;
		}

		return $this;
	} // setBaseLongitude()

	/**
	 * Set the value of [telephone] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setTelephone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone !== $v) {
			$this->telephone = $v;
			$this->modifiedColumns[] = CompanyPeer::TELEPHONE;
		}

		return $this;
	} // setTelephone()

	/**
	 * Set the value of [mobile] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setMobile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mobile !== $v) {
			$this->mobile = $v;
			$this->modifiedColumns[] = CompanyPeer::MOBILE;
		}

		return $this;
	} // setMobile()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = CompanyPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = CompanyPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [address] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setAddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = CompanyPeer::ADDRESS;
		}

		return $this;
	} // setAddress()

	/**
	 * Set the value of [zipcode] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setZipcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcode !== $v) {
			$this->zipcode = $v;
			$this->modifiedColumns[] = CompanyPeer::ZIPCODE;
		}

		return $this;
	} // setZipcode()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = CompanyPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [district] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setDistrict($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->district !== $v) {
			$this->district = $v;
			$this->modifiedColumns[] = CompanyPeer::DISTRICT;
		}

		return $this;
	} // setDistrict()

	/**
	 * Set the value of [municipality] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setMunicipality($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->municipality !== $v) {
			$this->municipality = $v;
			$this->modifiedColumns[] = CompanyPeer::MUNICIPALITY;
		}

		return $this;
	} // setMunicipality()

	/**
	 * Set the value of [locality] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setLocality($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->locality !== $v) {
			$this->locality = $v;
			$this->modifiedColumns[] = CompanyPeer::LOCALITY;
		}

		return $this;
	} // setLocality()

	/**
	 * Set the value of [observations] column.
	 * 
	 * @param      string $v new value
	 * @return     Company The current object (for fluent API support)
	 */
	public function setObservations($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->observations !== $v) {
			$this->observations = $v;
			$this->modifiedColumns[] = CompanyPeer::OBSERVATIONS;
		}

		return $this;
	} // setObservations()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Company The current object (for fluent API support)
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
				$this->modifiedColumns[] = CompanyPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Company The current object (for fluent API support)
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
				$this->modifiedColumns[] = CompanyPeer::UPDATED_AT;
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
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->acronym = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->rec_cet_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->base_latitude = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->base_longitude = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->telephone = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->mobile = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->fax = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->address = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->zipcode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->country = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->district = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->municipality = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->locality = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->observations = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->created_at = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->updated_at = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 19; // 19 = CompanyPeer::NUM_COLUMNS - CompanyPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Company object", $e);
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
			$con = Propel::getConnection(CompanyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CompanyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collCompanyUsers = null;

			$this->collVessels = null;

			$this->collGuides = null;

			$this->collSkippers = null;

			$this->collGeneralInfos = null;

			$this->collWatchInfos = null;

			$this->collWatchmans = null;

			$this->collWatchPosts = null;

			$this->collChartIframeInformations = null;

			$this->collMapIframeInformations = null;

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
			$con = Propel::getConnection(CompanyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCompany:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				CompanyQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCompany:delete:post') as $callable)
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
			$con = Propel::getConnection(CompanyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCompany:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(CompanyPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(CompanyPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseCompany:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				CompanyPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CompanyPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CompanyPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CompanyPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = CompanyPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCompanyUsers !== null) {
				foreach ($this->collCompanyUsers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collVessels !== null) {
				foreach ($this->collVessels as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collGuides !== null) {
				foreach ($this->collGuides as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collSkippers !== null) {
				foreach ($this->collSkippers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collGeneralInfos !== null) {
				foreach ($this->collGeneralInfos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collWatchInfos !== null) {
				foreach ($this->collWatchInfos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collWatchmans !== null) {
				foreach ($this->collWatchmans as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collWatchPosts !== null) {
				foreach ($this->collWatchPosts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collChartIframeInformations !== null) {
				foreach ($this->collChartIframeInformations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMapIframeInformations !== null) {
				foreach ($this->collMapIframeInformations as $referrerFK) {
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


			if (($retval = CompanyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCompanyUsers !== null) {
					foreach ($this->collCompanyUsers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collVessels !== null) {
					foreach ($this->collVessels as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collGuides !== null) {
					foreach ($this->collGuides as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collSkippers !== null) {
					foreach ($this->collSkippers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collGeneralInfos !== null) {
					foreach ($this->collGeneralInfos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collWatchInfos !== null) {
					foreach ($this->collWatchInfos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collWatchmans !== null) {
					foreach ($this->collWatchmans as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collWatchPosts !== null) {
					foreach ($this->collWatchPosts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collChartIframeInformations !== null) {
					foreach ($this->collChartIframeInformations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMapIframeInformations !== null) {
					foreach ($this->collMapIframeInformations as $referrerFK) {
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
		$pos = CompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getName();
				break;
			case 2:
				return $this->getAcronym();
				break;
			case 3:
				return $this->getRecCetCode();
				break;
			case 4:
				return $this->getBaseLatitude();
				break;
			case 5:
				return $this->getBaseLongitude();
				break;
			case 6:
				return $this->getTelephone();
				break;
			case 7:
				return $this->getMobile();
				break;
			case 8:
				return $this->getFax();
				break;
			case 9:
				return $this->getEmail();
				break;
			case 10:
				return $this->getAddress();
				break;
			case 11:
				return $this->getZipcode();
				break;
			case 12:
				return $this->getCountry();
				break;
			case 13:
				return $this->getDistrict();
				break;
			case 14:
				return $this->getMunicipality();
				break;
			case 15:
				return $this->getLocality();
				break;
			case 16:
				return $this->getObservations();
				break;
			case 17:
				return $this->getCreatedAt();
				break;
			case 18:
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
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = CompanyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getAcronym(),
			$keys[3] => $this->getRecCetCode(),
			$keys[4] => $this->getBaseLatitude(),
			$keys[5] => $this->getBaseLongitude(),
			$keys[6] => $this->getTelephone(),
			$keys[7] => $this->getMobile(),
			$keys[8] => $this->getFax(),
			$keys[9] => $this->getEmail(),
			$keys[10] => $this->getAddress(),
			$keys[11] => $this->getZipcode(),
			$keys[12] => $this->getCountry(),
			$keys[13] => $this->getDistrict(),
			$keys[14] => $this->getMunicipality(),
			$keys[15] => $this->getLocality(),
			$keys[16] => $this->getObservations(),
			$keys[17] => $this->getCreatedAt(),
			$keys[18] => $this->getUpdatedAt(),
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
		$pos = CompanyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setName($value);
				break;
			case 2:
				$this->setAcronym($value);
				break;
			case 3:
				$this->setRecCetCode($value);
				break;
			case 4:
				$this->setBaseLatitude($value);
				break;
			case 5:
				$this->setBaseLongitude($value);
				break;
			case 6:
				$this->setTelephone($value);
				break;
			case 7:
				$this->setMobile($value);
				break;
			case 8:
				$this->setFax($value);
				break;
			case 9:
				$this->setEmail($value);
				break;
			case 10:
				$this->setAddress($value);
				break;
			case 11:
				$this->setZipcode($value);
				break;
			case 12:
				$this->setCountry($value);
				break;
			case 13:
				$this->setDistrict($value);
				break;
			case 14:
				$this->setMunicipality($value);
				break;
			case 15:
				$this->setLocality($value);
				break;
			case 16:
				$this->setObservations($value);
				break;
			case 17:
				$this->setCreatedAt($value);
				break;
			case 18:
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
		$keys = CompanyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAcronym($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRecCetCode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setBaseLatitude($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBaseLongitude($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTelephone($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMobile($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFax($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAddress($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setZipcode($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCountry($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDistrict($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMunicipality($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLocality($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setObservations($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCreatedAt($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUpdatedAt($arr[$keys[18]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CompanyPeer::DATABASE_NAME);

		if ($this->isColumnModified(CompanyPeer::ID)) $criteria->add(CompanyPeer::ID, $this->id);
		if ($this->isColumnModified(CompanyPeer::NAME)) $criteria->add(CompanyPeer::NAME, $this->name);
		if ($this->isColumnModified(CompanyPeer::ACRONYM)) $criteria->add(CompanyPeer::ACRONYM, $this->acronym);
		if ($this->isColumnModified(CompanyPeer::REC_CET_CODE)) $criteria->add(CompanyPeer::REC_CET_CODE, $this->rec_cet_code);
		if ($this->isColumnModified(CompanyPeer::BASE_LATITUDE)) $criteria->add(CompanyPeer::BASE_LATITUDE, $this->base_latitude);
		if ($this->isColumnModified(CompanyPeer::BASE_LONGITUDE)) $criteria->add(CompanyPeer::BASE_LONGITUDE, $this->base_longitude);
		if ($this->isColumnModified(CompanyPeer::TELEPHONE)) $criteria->add(CompanyPeer::TELEPHONE, $this->telephone);
		if ($this->isColumnModified(CompanyPeer::MOBILE)) $criteria->add(CompanyPeer::MOBILE, $this->mobile);
		if ($this->isColumnModified(CompanyPeer::FAX)) $criteria->add(CompanyPeer::FAX, $this->fax);
		if ($this->isColumnModified(CompanyPeer::EMAIL)) $criteria->add(CompanyPeer::EMAIL, $this->email);
		if ($this->isColumnModified(CompanyPeer::ADDRESS)) $criteria->add(CompanyPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(CompanyPeer::ZIPCODE)) $criteria->add(CompanyPeer::ZIPCODE, $this->zipcode);
		if ($this->isColumnModified(CompanyPeer::COUNTRY)) $criteria->add(CompanyPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(CompanyPeer::DISTRICT)) $criteria->add(CompanyPeer::DISTRICT, $this->district);
		if ($this->isColumnModified(CompanyPeer::MUNICIPALITY)) $criteria->add(CompanyPeer::MUNICIPALITY, $this->municipality);
		if ($this->isColumnModified(CompanyPeer::LOCALITY)) $criteria->add(CompanyPeer::LOCALITY, $this->locality);
		if ($this->isColumnModified(CompanyPeer::OBSERVATIONS)) $criteria->add(CompanyPeer::OBSERVATIONS, $this->observations);
		if ($this->isColumnModified(CompanyPeer::CREATED_AT)) $criteria->add(CompanyPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CompanyPeer::UPDATED_AT)) $criteria->add(CompanyPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(CompanyPeer::DATABASE_NAME);
		$criteria->add(CompanyPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Company (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setName($this->name);
		$copyObj->setAcronym($this->acronym);
		$copyObj->setRecCetCode($this->rec_cet_code);
		$copyObj->setBaseLatitude($this->base_latitude);
		$copyObj->setBaseLongitude($this->base_longitude);
		$copyObj->setTelephone($this->telephone);
		$copyObj->setMobile($this->mobile);
		$copyObj->setFax($this->fax);
		$copyObj->setEmail($this->email);
		$copyObj->setAddress($this->address);
		$copyObj->setZipcode($this->zipcode);
		$copyObj->setCountry($this->country);
		$copyObj->setDistrict($this->district);
		$copyObj->setMunicipality($this->municipality);
		$copyObj->setLocality($this->locality);
		$copyObj->setObservations($this->observations);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCompanyUsers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCompanyUser($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getVessels() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addVessel($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getGuides() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addGuide($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getSkippers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addSkipper($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getGeneralInfos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addGeneralInfo($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getWatchInfos() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addWatchInfo($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getWatchmans() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addWatchman($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getWatchPosts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addWatchPost($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getChartIframeInformations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addChartIframeInformation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getMapIframeInformations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addMapIframeInformation($relObj->copy($deepCopy));
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
	 * @return     Company Clone of current object.
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
	 * @return     CompanyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CompanyPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collCompanyUsers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCompanyUsers()
	 */
	public function clearCompanyUsers()
	{
		$this->collCompanyUsers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCompanyUsers collection.
	 *
	 * By default this just sets the collCompanyUsers collection to an empty array (like clearcollCompanyUsers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCompanyUsers()
	{
		$this->collCompanyUsers = new PropelObjectCollection();
		$this->collCompanyUsers->setModel('CompanyUser');
	}

	/**
	 * Gets an array of CompanyUser objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CompanyUser[] List of CompanyUser objects
	 * @throws     PropelException
	 */
	public function getCompanyUsers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCompanyUsers || null !== $criteria) {
			if ($this->isNew() && null === $this->collCompanyUsers) {
				// return empty collection
				$this->initCompanyUsers();
			} else {
				$collCompanyUsers = CompanyUserQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collCompanyUsers;
				}
				$this->collCompanyUsers = $collCompanyUsers;
			}
		}
		return $this->collCompanyUsers;
	}

	/**
	 * Returns the number of related CompanyUser objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CompanyUser objects.
	 * @throws     PropelException
	 */
	public function countCompanyUsers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCompanyUsers || null !== $criteria) {
			if ($this->isNew() && null === $this->collCompanyUsers) {
				return 0;
			} else {
				$query = CompanyUserQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collCompanyUsers);
		}
	}

	/**
	 * Method called to associate a CompanyUser object to this object
	 * through the CompanyUser foreign key attribute.
	 *
	 * @param      CompanyUser $l CompanyUser
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCompanyUser(CompanyUser $l)
	{
		if ($this->collCompanyUsers === null) {
			$this->initCompanyUsers();
		}
		if (!$this->collCompanyUsers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCompanyUsers[]= $l;
			$l->setCompany($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related CompanyUsers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CompanyUser[] List of CompanyUser objects
	 */
	public function getCompanyUsersJoinsfGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CompanyUserQuery::create(null, $criteria);
		$query->joinWith('sfGuardUser', $join_behavior);

		return $this->getCompanyUsers($query, $con);
	}

	/**
	 * Clears out the collVessels collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addVessels()
	 */
	public function clearVessels()
	{
		$this->collVessels = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collVessels collection.
	 *
	 * By default this just sets the collVessels collection to an empty array (like clearcollVessels());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initVessels()
	{
		$this->collVessels = new PropelObjectCollection();
		$this->collVessels->setModel('Vessel');
	}

	/**
	 * Gets an array of Vessel objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Vessel[] List of Vessel objects
	 * @throws     PropelException
	 */
	public function getVessels($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collVessels || null !== $criteria) {
			if ($this->isNew() && null === $this->collVessels) {
				// return empty collection
				$this->initVessels();
			} else {
				$collVessels = VesselQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collVessels;
				}
				$this->collVessels = $collVessels;
			}
		}
		return $this->collVessels;
	}

	/**
	 * Returns the number of related Vessel objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Vessel objects.
	 * @throws     PropelException
	 */
	public function countVessels(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collVessels || null !== $criteria) {
			if ($this->isNew() && null === $this->collVessels) {
				return 0;
			} else {
				$query = VesselQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collVessels);
		}
	}

	/**
	 * Method called to associate a Vessel object to this object
	 * through the Vessel foreign key attribute.
	 *
	 * @param      Vessel $l Vessel
	 * @return     void
	 * @throws     PropelException
	 */
	public function addVessel(Vessel $l)
	{
		if ($this->collVessels === null) {
			$this->initVessels();
		}
		if (!$this->collVessels->contains($l)) { // only add it if the **same** object is not already associated
			$this->collVessels[]= $l;
			$l->setCompany($this);
		}
	}

	/**
	 * Clears out the collGuides collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addGuides()
	 */
	public function clearGuides()
	{
		$this->collGuides = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collGuides collection.
	 *
	 * By default this just sets the collGuides collection to an empty array (like clearcollGuides());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initGuides()
	{
		$this->collGuides = new PropelObjectCollection();
		$this->collGuides->setModel('Guide');
	}

	/**
	 * Gets an array of Guide objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Guide[] List of Guide objects
	 * @throws     PropelException
	 */
	public function getGuides($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collGuides || null !== $criteria) {
			if ($this->isNew() && null === $this->collGuides) {
				// return empty collection
				$this->initGuides();
			} else {
				$collGuides = GuideQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collGuides;
				}
				$this->collGuides = $collGuides;
			}
		}
		return $this->collGuides;
	}

	/**
	 * Returns the number of related Guide objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Guide objects.
	 * @throws     PropelException
	 */
	public function countGuides(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collGuides || null !== $criteria) {
			if ($this->isNew() && null === $this->collGuides) {
				return 0;
			} else {
				$query = GuideQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collGuides);
		}
	}

	/**
	 * Method called to associate a Guide object to this object
	 * through the Guide foreign key attribute.
	 *
	 * @param      Guide $l Guide
	 * @return     void
	 * @throws     PropelException
	 */
	public function addGuide(Guide $l)
	{
		if ($this->collGuides === null) {
			$this->initGuides();
		}
		if (!$this->collGuides->contains($l)) { // only add it if the **same** object is not already associated
			$this->collGuides[]= $l;
			$l->setCompany($this);
		}
	}

	/**
	 * Clears out the collSkippers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addSkippers()
	 */
	public function clearSkippers()
	{
		$this->collSkippers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collSkippers collection.
	 *
	 * By default this just sets the collSkippers collection to an empty array (like clearcollSkippers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initSkippers()
	{
		$this->collSkippers = new PropelObjectCollection();
		$this->collSkippers->setModel('Skipper');
	}

	/**
	 * Gets an array of Skipper objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Skipper[] List of Skipper objects
	 * @throws     PropelException
	 */
	public function getSkippers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collSkippers || null !== $criteria) {
			if ($this->isNew() && null === $this->collSkippers) {
				// return empty collection
				$this->initSkippers();
			} else {
				$collSkippers = SkipperQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collSkippers;
				}
				$this->collSkippers = $collSkippers;
			}
		}
		return $this->collSkippers;
	}

	/**
	 * Returns the number of related Skipper objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Skipper objects.
	 * @throws     PropelException
	 */
	public function countSkippers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collSkippers || null !== $criteria) {
			if ($this->isNew() && null === $this->collSkippers) {
				return 0;
			} else {
				$query = SkipperQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collSkippers);
		}
	}

	/**
	 * Method called to associate a Skipper object to this object
	 * through the Skipper foreign key attribute.
	 *
	 * @param      Skipper $l Skipper
	 * @return     void
	 * @throws     PropelException
	 */
	public function addSkipper(Skipper $l)
	{
		if ($this->collSkippers === null) {
			$this->initSkippers();
		}
		if (!$this->collSkippers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collSkippers[]= $l;
			$l->setCompany($this);
		}
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
	 * If this Company is new, it will return
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
					->filterByCompany($this)
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
					->filterByCompany($this)
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
			$l->setCompany($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array GeneralInfo[] List of GeneralInfo objects
	 */
	public function getGeneralInfosJoinVessel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = GeneralInfoQuery::create(null, $criteria);
		$query->joinWith('Vessel', $join_behavior);

		return $this->getGeneralInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related GeneralInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Clears out the collWatchInfos collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addWatchInfos()
	 */
	public function clearWatchInfos()
	{
		$this->collWatchInfos = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collWatchInfos collection.
	 *
	 * By default this just sets the collWatchInfos collection to an empty array (like clearcollWatchInfos());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initWatchInfos()
	{
		$this->collWatchInfos = new PropelObjectCollection();
		$this->collWatchInfos->setModel('WatchInfo');
	}

	/**
	 * Gets an array of WatchInfo objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array WatchInfo[] List of WatchInfo objects
	 * @throws     PropelException
	 */
	public function getWatchInfos($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collWatchInfos || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchInfos) {
				// return empty collection
				$this->initWatchInfos();
			} else {
				$collWatchInfos = WatchInfoQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collWatchInfos;
				}
				$this->collWatchInfos = $collWatchInfos;
			}
		}
		return $this->collWatchInfos;
	}

	/**
	 * Returns the number of related WatchInfo objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related WatchInfo objects.
	 * @throws     PropelException
	 */
	public function countWatchInfos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collWatchInfos || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchInfos) {
				return 0;
			} else {
				$query = WatchInfoQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collWatchInfos);
		}
	}

	/**
	 * Method called to associate a WatchInfo object to this object
	 * through the WatchInfo foreign key attribute.
	 *
	 * @param      WatchInfo $l WatchInfo
	 * @return     void
	 * @throws     PropelException
	 */
	public function addWatchInfo(WatchInfo $l)
	{
		if ($this->collWatchInfos === null) {
			$this->initWatchInfos();
		}
		if (!$this->collWatchInfos->contains($l)) { // only add it if the **same** object is not already associated
			$this->collWatchInfos[]= $l;
			$l->setCompany($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related WatchInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchInfo[] List of WatchInfo objects
	 */
	public function getWatchInfosJoinWatchPost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchInfoQuery::create(null, $criteria);
		$query->joinWith('WatchPost', $join_behavior);

		return $this->getWatchInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related WatchInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchInfo[] List of WatchInfo objects
	 */
	public function getWatchInfosJoinWatchman($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchInfoQuery::create(null, $criteria);
		$query->joinWith('Watchman', $join_behavior);

		return $this->getWatchInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related WatchInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchInfo[] List of WatchInfo objects
	 */
	public function getWatchInfosJoinsfGuardUserRelatedByCreatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchInfoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByCreatedBy', $join_behavior);

		return $this->getWatchInfos($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related WatchInfos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array WatchInfo[] List of WatchInfo objects
	 */
	public function getWatchInfosJoinsfGuardUserRelatedByUpdatedBy($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = WatchInfoQuery::create(null, $criteria);
		$query->joinWith('sfGuardUserRelatedByUpdatedBy', $join_behavior);

		return $this->getWatchInfos($query, $con);
	}

	/**
	 * Clears out the collWatchmans collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addWatchmans()
	 */
	public function clearWatchmans()
	{
		$this->collWatchmans = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collWatchmans collection.
	 *
	 * By default this just sets the collWatchmans collection to an empty array (like clearcollWatchmans());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initWatchmans()
	{
		$this->collWatchmans = new PropelObjectCollection();
		$this->collWatchmans->setModel('Watchman');
	}

	/**
	 * Gets an array of Watchman objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Watchman[] List of Watchman objects
	 * @throws     PropelException
	 */
	public function getWatchmans($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collWatchmans || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchmans) {
				// return empty collection
				$this->initWatchmans();
			} else {
				$collWatchmans = WatchmanQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collWatchmans;
				}
				$this->collWatchmans = $collWatchmans;
			}
		}
		return $this->collWatchmans;
	}

	/**
	 * Returns the number of related Watchman objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Watchman objects.
	 * @throws     PropelException
	 */
	public function countWatchmans(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collWatchmans || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchmans) {
				return 0;
			} else {
				$query = WatchmanQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collWatchmans);
		}
	}

	/**
	 * Method called to associate a Watchman object to this object
	 * through the Watchman foreign key attribute.
	 *
	 * @param      Watchman $l Watchman
	 * @return     void
	 * @throws     PropelException
	 */
	public function addWatchman(Watchman $l)
	{
		if ($this->collWatchmans === null) {
			$this->initWatchmans();
		}
		if (!$this->collWatchmans->contains($l)) { // only add it if the **same** object is not already associated
			$this->collWatchmans[]= $l;
			$l->setCompany($this);
		}
	}

	/**
	 * Clears out the collWatchPosts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addWatchPosts()
	 */
	public function clearWatchPosts()
	{
		$this->collWatchPosts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collWatchPosts collection.
	 *
	 * By default this just sets the collWatchPosts collection to an empty array (like clearcollWatchPosts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initWatchPosts()
	{
		$this->collWatchPosts = new PropelObjectCollection();
		$this->collWatchPosts->setModel('WatchPost');
	}

	/**
	 * Gets an array of WatchPost objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array WatchPost[] List of WatchPost objects
	 * @throws     PropelException
	 */
	public function getWatchPosts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collWatchPosts || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchPosts) {
				// return empty collection
				$this->initWatchPosts();
			} else {
				$collWatchPosts = WatchPostQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collWatchPosts;
				}
				$this->collWatchPosts = $collWatchPosts;
			}
		}
		return $this->collWatchPosts;
	}

	/**
	 * Returns the number of related WatchPost objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related WatchPost objects.
	 * @throws     PropelException
	 */
	public function countWatchPosts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collWatchPosts || null !== $criteria) {
			if ($this->isNew() && null === $this->collWatchPosts) {
				return 0;
			} else {
				$query = WatchPostQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collWatchPosts);
		}
	}

	/**
	 * Method called to associate a WatchPost object to this object
	 * through the WatchPost foreign key attribute.
	 *
	 * @param      WatchPost $l WatchPost
	 * @return     void
	 * @throws     PropelException
	 */
	public function addWatchPost(WatchPost $l)
	{
		if ($this->collWatchPosts === null) {
			$this->initWatchPosts();
		}
		if (!$this->collWatchPosts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collWatchPosts[]= $l;
			$l->setCompany($this);
		}
	}

	/**
	 * Clears out the collChartIframeInformations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addChartIframeInformations()
	 */
	public function clearChartIframeInformations()
	{
		$this->collChartIframeInformations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collChartIframeInformations collection.
	 *
	 * By default this just sets the collChartIframeInformations collection to an empty array (like clearcollChartIframeInformations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initChartIframeInformations()
	{
		$this->collChartIframeInformations = new PropelObjectCollection();
		$this->collChartIframeInformations->setModel('ChartIframeInformation');
	}

	/**
	 * Gets an array of ChartIframeInformation objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ChartIframeInformation[] List of ChartIframeInformation objects
	 * @throws     PropelException
	 */
	public function getChartIframeInformations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collChartIframeInformations || null !== $criteria) {
			if ($this->isNew() && null === $this->collChartIframeInformations) {
				// return empty collection
				$this->initChartIframeInformations();
			} else {
				$collChartIframeInformations = ChartIframeInformationQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collChartIframeInformations;
				}
				$this->collChartIframeInformations = $collChartIframeInformations;
			}
		}
		return $this->collChartIframeInformations;
	}

	/**
	 * Returns the number of related ChartIframeInformation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ChartIframeInformation objects.
	 * @throws     PropelException
	 */
	public function countChartIframeInformations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collChartIframeInformations || null !== $criteria) {
			if ($this->isNew() && null === $this->collChartIframeInformations) {
				return 0;
			} else {
				$query = ChartIframeInformationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collChartIframeInformations);
		}
	}

	/**
	 * Method called to associate a ChartIframeInformation object to this object
	 * through the ChartIframeInformation foreign key attribute.
	 *
	 * @param      ChartIframeInformation $l ChartIframeInformation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addChartIframeInformation(ChartIframeInformation $l)
	{
		if ($this->collChartIframeInformations === null) {
			$this->initChartIframeInformations();
		}
		if (!$this->collChartIframeInformations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collChartIframeInformations[]= $l;
			$l->setCompany($this);
		}
	}

	/**
	 * Clears out the collMapIframeInformations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addMapIframeInformations()
	 */
	public function clearMapIframeInformations()
	{
		$this->collMapIframeInformations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collMapIframeInformations collection.
	 *
	 * By default this just sets the collMapIframeInformations collection to an empty array (like clearcollMapIframeInformations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initMapIframeInformations()
	{
		$this->collMapIframeInformations = new PropelObjectCollection();
		$this->collMapIframeInformations->setModel('MapIframeInformation');
	}

	/**
	 * Gets an array of MapIframeInformation objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Company is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array MapIframeInformation[] List of MapIframeInformation objects
	 * @throws     PropelException
	 */
	public function getMapIframeInformations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collMapIframeInformations || null !== $criteria) {
			if ($this->isNew() && null === $this->collMapIframeInformations) {
				// return empty collection
				$this->initMapIframeInformations();
			} else {
				$collMapIframeInformations = MapIframeInformationQuery::create(null, $criteria)
					->filterByCompany($this)
					->find($con);
				if (null !== $criteria) {
					return $collMapIframeInformations;
				}
				$this->collMapIframeInformations = $collMapIframeInformations;
			}
		}
		return $this->collMapIframeInformations;
	}

	/**
	 * Returns the number of related MapIframeInformation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related MapIframeInformation objects.
	 * @throws     PropelException
	 */
	public function countMapIframeInformations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collMapIframeInformations || null !== $criteria) {
			if ($this->isNew() && null === $this->collMapIframeInformations) {
				return 0;
			} else {
				$query = MapIframeInformationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCompany($this)
					->count($con);
			}
		} else {
			return count($this->collMapIframeInformations);
		}
	}

	/**
	 * Method called to associate a MapIframeInformation object to this object
	 * through the MapIframeInformation foreign key attribute.
	 *
	 * @param      MapIframeInformation $l MapIframeInformation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addMapIframeInformation(MapIframeInformation $l)
	{
		if ($this->collMapIframeInformations === null) {
			$this->initMapIframeInformations();
		}
		if (!$this->collMapIframeInformations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collMapIframeInformations[]= $l;
			$l->setCompany($this);
		}
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
	 * If this Company is new, it will return
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
					->filterByCompany($this)
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
					->filterByCompany($this)
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
			$l->setCompany($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
	 * Otherwise if this Company is new, it will return
	 * an empty collection; or if this Company has previously
	 * been saved, it will retrieve related ObservationPhotos from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Company.
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
		$this->name = null;
		$this->acronym = null;
		$this->rec_cet_code = null;
		$this->base_latitude = null;
		$this->base_longitude = null;
		$this->telephone = null;
		$this->mobile = null;
		$this->fax = null;
		$this->email = null;
		$this->address = null;
		$this->zipcode = null;
		$this->country = null;
		$this->district = null;
		$this->municipality = null;
		$this->locality = null;
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
			if ($this->collCompanyUsers) {
				foreach ((array) $this->collCompanyUsers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collVessels) {
				foreach ((array) $this->collVessels as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collGuides) {
				foreach ((array) $this->collGuides as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collSkippers) {
				foreach ((array) $this->collSkippers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collGeneralInfos) {
				foreach ((array) $this->collGeneralInfos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collWatchInfos) {
				foreach ((array) $this->collWatchInfos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collWatchmans) {
				foreach ((array) $this->collWatchmans as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collWatchPosts) {
				foreach ((array) $this->collWatchPosts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collChartIframeInformations) {
				foreach ((array) $this->collChartIframeInformations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collMapIframeInformations) {
				foreach ((array) $this->collMapIframeInformations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collObservationPhotos) {
				foreach ((array) $this->collObservationPhotos as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCompanyUsers = null;
		$this->collVessels = null;
		$this->collGuides = null;
		$this->collSkippers = null;
		$this->collGeneralInfos = null;
		$this->collWatchInfos = null;
		$this->collWatchmans = null;
		$this->collWatchPosts = null;
		$this->collChartIframeInformations = null;
		$this->collMapIframeInformations = null;
		$this->collObservationPhotos = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCompany:' . $name))
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

} // BaseCompany
