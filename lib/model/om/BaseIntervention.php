<?php

/**
 * Base class that represents a row from the 'intervention' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue May 12 04:10:28 2009
 *
 * @package    lib.model.om
 */
abstract class BaseIntervention extends BaseObject  implements Persistent {


  const PEER = 'InterventionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        InterventionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the vehicule_id field.
	 * @var        int
	 */
	protected $vehicule_id;

	/**
	 * The value for the type_operation field.
	 * @var        string
	 */
	protected $type_operation;

	/**
	 * The value for the date_intervention field.
	 * @var        string
	 */
	protected $date_intervention;

	/**
	 * The value for the employe_id field.
	 * @var        int
	 */
	protected $employe_id;

	/**
	 * @var        Vehicule
	 */
	protected $aVehicule;

	/**
	 * @var        Employe
	 */
	protected $aEmploye;

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
	 * Initializes internal state of BaseIntervention object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
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
	 * Get the [vehicule_id] column value.
	 * 
	 * @return     int
	 */
	public function getVehiculeId()
	{
		return $this->vehicule_id;
	}

	/**
	 * Get the [type_operation] column value.
	 * 
	 * @return     string
	 */
	public function getTypeOperation()
	{
		return $this->type_operation;
	}

	/**
	 * Get the [optionally formatted] temporal [date_intervention] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateIntervention($format = 'Y-m-d')
	{
		if ($this->date_intervention === null) {
			return null;
		}


		if ($this->date_intervention === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_intervention);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_intervention, true), $x);
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
	 * Get the [employe_id] column value.
	 * 
	 * @return     int
	 */
	public function getEmployeId()
	{
		return $this->employe_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Intervention The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = InterventionPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [vehicule_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Intervention The current object (for fluent API support)
	 */
	public function setVehiculeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->vehicule_id !== $v) {
			$this->vehicule_id = $v;
			$this->modifiedColumns[] = InterventionPeer::VEHICULE_ID;
		}

		if ($this->aVehicule !== null && $this->aVehicule->getId() !== $v) {
			$this->aVehicule = null;
		}

		return $this;
	} // setVehiculeId()

	/**
	 * Set the value of [type_operation] column.
	 * 
	 * @param      string $v new value
	 * @return     Intervention The current object (for fluent API support)
	 */
	public function setTypeOperation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->type_operation !== $v) {
			$this->type_operation = $v;
			$this->modifiedColumns[] = InterventionPeer::TYPE_OPERATION;
		}

		return $this;
	} // setTypeOperation()

	/**
	 * Sets the value of [date_intervention] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Intervention The current object (for fluent API support)
	 */
	public function setDateIntervention($v)
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

		if ( $this->date_intervention !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_intervention !== null && $tmpDt = new DateTime($this->date_intervention)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_intervention = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = InterventionPeer::DATE_INTERVENTION;
			}
		} // if either are not null

		return $this;
	} // setDateIntervention()

	/**
	 * Set the value of [employe_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Intervention The current object (for fluent API support)
	 */
	public function setEmployeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->employe_id !== $v) {
			$this->employe_id = $v;
			$this->modifiedColumns[] = InterventionPeer::EMPLOYE_ID;
		}

		if ($this->aEmploye !== null && $this->aEmploye->getId() !== $v) {
			$this->aEmploye = null;
		}

		return $this;
	} // setEmployeId()

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
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
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
			$this->vehicule_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->type_operation = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->date_intervention = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->employe_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 5; // 5 = InterventionPeer::NUM_COLUMNS - InterventionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Intervention object", $e);
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

		if ($this->aVehicule !== null && $this->vehicule_id !== $this->aVehicule->getId()) {
			$this->aVehicule = null;
		}
		if ($this->aEmploye !== null && $this->employe_id !== $this->aEmploye->getId()) {
			$this->aEmploye = null;
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
			$con = Propel::getConnection(InterventionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = InterventionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aVehicule = null;
			$this->aEmploye = null;
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

    foreach (sfMixer::getCallables('BaseIntervention:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InterventionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			InterventionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseIntervention:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
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

    foreach (sfMixer::getCallables('BaseIntervention:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InterventionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseIntervention:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			InterventionPeer::addInstanceToPool($this);
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

			if ($this->aVehicule !== null) {
				if ($this->aVehicule->isModified() || $this->aVehicule->isNew()) {
					$affectedRows += $this->aVehicule->save($con);
				}
				$this->setVehicule($this->aVehicule);
			}

			if ($this->aEmploye !== null) {
				if ($this->aEmploye->isModified() || $this->aEmploye->isNew()) {
					$affectedRows += $this->aEmploye->save($con);
				}
				$this->setEmploye($this->aEmploye);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = InterventionPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = InterventionPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += InterventionPeer::doUpdate($this, $con);
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

			if ($this->aVehicule !== null) {
				if (!$this->aVehicule->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVehicule->getValidationFailures());
				}
			}

			if ($this->aEmploye !== null) {
				if (!$this->aEmploye->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aEmploye->getValidationFailures());
				}
			}


			if (($retval = InterventionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = InterventionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getVehiculeId();
				break;
			case 2:
				return $this->getTypeOperation();
				break;
			case 3:
				return $this->getDateIntervention();
				break;
			case 4:
				return $this->getEmployeId();
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
		$keys = InterventionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getVehiculeId(),
			$keys[2] => $this->getTypeOperation(),
			$keys[3] => $this->getDateIntervention(),
			$keys[4] => $this->getEmployeId(),
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
		$pos = InterventionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setVehiculeId($value);
				break;
			case 2:
				$this->setTypeOperation($value);
				break;
			case 3:
				$this->setDateIntervention($value);
				break;
			case 4:
				$this->setEmployeId($value);
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
		$keys = InterventionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setVehiculeId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTypeOperation($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateIntervention($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmployeId($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(InterventionPeer::DATABASE_NAME);

		if ($this->isColumnModified(InterventionPeer::ID)) $criteria->add(InterventionPeer::ID, $this->id);
		if ($this->isColumnModified(InterventionPeer::VEHICULE_ID)) $criteria->add(InterventionPeer::VEHICULE_ID, $this->vehicule_id);
		if ($this->isColumnModified(InterventionPeer::TYPE_OPERATION)) $criteria->add(InterventionPeer::TYPE_OPERATION, $this->type_operation);
		if ($this->isColumnModified(InterventionPeer::DATE_INTERVENTION)) $criteria->add(InterventionPeer::DATE_INTERVENTION, $this->date_intervention);
		if ($this->isColumnModified(InterventionPeer::EMPLOYE_ID)) $criteria->add(InterventionPeer::EMPLOYE_ID, $this->employe_id);

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
		$criteria = new Criteria(InterventionPeer::DATABASE_NAME);

		$criteria->add(InterventionPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Intervention (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setVehiculeId($this->vehicule_id);

		$copyObj->setTypeOperation($this->type_operation);

		$copyObj->setDateIntervention($this->date_intervention);

		$copyObj->setEmployeId($this->employe_id);


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
	 * @return     Intervention Clone of current object.
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
	 * @return     InterventionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new InterventionPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Vehicule object.
	 *
	 * @param      Vehicule $v
	 * @return     Intervention The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setVehicule(Vehicule $v = null)
	{
		if ($v === null) {
			$this->setVehiculeId(NULL);
		} else {
			$this->setVehiculeId($v->getId());
		}

		$this->aVehicule = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Vehicule object, it will not be re-added.
		if ($v !== null) {
			$v->addIntervention($this);
		}

		return $this;
	}


	/**
	 * Get the associated Vehicule object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Vehicule The associated Vehicule object.
	 * @throws     PropelException
	 */
	public function getVehicule(PropelPDO $con = null)
	{
		if ($this->aVehicule === null && ($this->vehicule_id !== null)) {
			$c = new Criteria(VehiculePeer::DATABASE_NAME);
			$c->add(VehiculePeer::ID, $this->vehicule_id);
			$this->aVehicule = VehiculePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aVehicule->addInterventions($this);
			 */
		}
		return $this->aVehicule;
	}

	/**
	 * Declares an association between this object and a Employe object.
	 *
	 * @param      Employe $v
	 * @return     Intervention The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setEmploye(Employe $v = null)
	{
		if ($v === null) {
			$this->setEmployeId(NULL);
		} else {
			$this->setEmployeId($v->getId());
		}

		$this->aEmploye = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Employe object, it will not be re-added.
		if ($v !== null) {
			$v->addIntervention($this);
		}

		return $this;
	}


	/**
	 * Get the associated Employe object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Employe The associated Employe object.
	 * @throws     PropelException
	 */
	public function getEmploye(PropelPDO $con = null)
	{
		if ($this->aEmploye === null && ($this->employe_id !== null)) {
			$c = new Criteria(EmployePeer::DATABASE_NAME);
			$c->add(EmployePeer::ID, $this->employe_id);
			$this->aEmploye = EmployePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aEmploye->addInterventions($this);
			 */
		}
		return $this->aEmploye;
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

			$this->aVehicule = null;
			$this->aEmploye = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseIntervention:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseIntervention::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseIntervention
