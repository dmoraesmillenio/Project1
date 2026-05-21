<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_city'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'city_country_id_fkey',
			'refSchema' => null,
			'refTable' => null,
			'del_rule' => 4,
			'upd_rule' => 1,
			'columns' => array( 
				array(
					'column' => 'country_id',
					'ref_column' => 'NULL' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'city_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'city_city_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'city_city_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'city',
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
			'name' => 'country_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
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
		'city_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'city',
	'schema' => 'public' 
);
?>