<?php



/**
 * This class defines the structure of the 'record' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class RecordTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RecordTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('record');
		$this->setPhpName('Record');
		$this->setClassname('Record');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CODE_ID', 'CodeId', 'INTEGER', 'code', 'ID', true, null, null);
		$this->addForeignKey('VISIBILITY_ID', 'VisibilityId', 'INTEGER', 'visibility', 'ID', true, null, null);
		$this->addForeignKey('SEA_STATE_ID', 'SeaStateId', 'INTEGER', 'sea_state', 'ID', true, null, null);
		$this->addForeignKey('GENERAL_INFO_ID', 'GeneralInfoId', 'INTEGER', 'general_info', 'ID', true, null, null);
		$this->addColumn('TIME', 'Time', 'TIME', true, null, null);
		$this->addColumn('LATITUDE', 'Latitude', 'VARCHAR', false, 45, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'VARCHAR', false, 45, null);
		$this->addColumn('NUM_VESSELS', 'NumVessels', 'INTEGER', false, null, 0);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Code', 'Code', RelationMap::MANY_TO_ONE, array('code_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Visibility', 'Visibility', RelationMap::MANY_TO_ONE, array('visibility_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('SeaState', 'SeaState', RelationMap::MANY_TO_ONE, array('sea_state_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('GeneralInfo', 'GeneralInfo', RelationMap::MANY_TO_ONE, array('general_info_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Sighting', 'Sighting', RelationMap::ONE_TO_MANY, array('id' => 'record_id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // RecordTableMap
