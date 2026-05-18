<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_actor'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'actor_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'actor_actor_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'actor_actor_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'first_name',
			'typeName' => 'character varying',
			'size' => 45,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'last_name',
			'typeName' => 'character varying',
			'size' => 45,
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
		'actor_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'actor',
	'schema' => 'public' 
);
?>