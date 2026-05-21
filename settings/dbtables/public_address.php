<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_address'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'address_city_id_fkey',
			'refSchema' => null,
			'refTable' => null,
			'del_rule' => 4,
			'upd_rule' => 1,
			'columns' => array( 
				array(
					'column' => 'city_id',
					'ref_column' => 'NULL' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'address_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'address_address_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'address_address_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'address',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'address2',
			'typeName' => 'character varying',
			'size' => 50,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'district',
			'typeName' => 'character varying',
			'size' => 20,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'city_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'postal_code',
			'typeName' => 'character varying',
			'size' => 10,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'phone',
			'typeName' => 'character varying',
			'size' => 20,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'last_update',
			'typeName' => 'timestamp without time zone',
			'size' => null,
			'scale' => null,
			'type' => 135,
			'autoinc' => false,
			'defaultValueSQL' => 'now()',
			'defaultValue' => 'CURRENT_TIMESTAMP',
			'nullable' => false 
		) 
	),
	'primaryKeys' => array( 
		'address_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'address',
	'schema' => 'public' 
);
?>