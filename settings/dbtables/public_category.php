<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_category'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'category_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'category_category_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'category_category_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'name',
			'typeName' => 'character varying',
			'size' => 25,
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
		'category_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'category',
	'schema' => 'public' 
);
?>