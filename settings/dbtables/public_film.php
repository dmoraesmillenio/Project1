<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['public_film'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'film_original_language_id_fkey',
			'refSchema' => null,
			'refTable' => null,
			'del_rule' => 4,
			'upd_rule' => 1,
			'columns' => array( 
				array(
					'column' => 'original_language_id',
					'ref_column' => 'NULL' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'film_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => true,
			'defaultValueSQL' => 'nextval(\'film_film_id_seq\'::regclass)',
			'defaultValue' => 'nextval(\'film_film_id_seq\'::regclass)',
			'nullable' => false 
		),
		array(
			'name' => 'title',
			'typeName' => 'character varying',
			'size' => 255,
			'scale' => null,
			'type' => 200,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'description',
			'typeName' => 'text',
			'size' => null,
			'scale' => null,
			'type' => 201,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'release_year',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'language_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		),
		array(
			'name' => 'original_language_id',
			'typeName' => 'integer',
			'size' => 32,
			'scale' => 0,
			'type' => 3,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'rental_duration',
			'typeName' => 'smallint',
			'size' => 16,
			'scale' => 0,
			'type' => 2,
			'autoinc' => false,
			'defaultValueSQL' => '3',
			'defaultValue' => '3',
			'nullable' => false 
		),
		array(
			'name' => 'rental_rate',
			'typeName' => 'numeric',
			'size' => 4,
			'scale' => 2,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '4.99',
			'defaultValue' => '4.99',
			'nullable' => false 
		),
		array(
			'name' => 'length',
			'typeName' => 'smallint',
			'size' => 16,
			'scale' => 0,
			'type' => 2,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'replacement_cost',
			'typeName' => 'numeric',
			'size' => 5,
			'scale' => 2,
			'type' => 14,
			'autoinc' => false,
			'defaultValueSQL' => '19.99',
			'defaultValue' => '19.99',
			'nullable' => false 
		),
		array(
			'name' => 'rating',
			'typeName' => 'USER-DEFINED',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => '\'G\'::mpaa_rating',
			'defaultValue' => 'G',
			'nullable' => true 
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
		),
		array(
			'name' => 'special_features',
			'typeName' => 'ARRAY',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => true 
		),
		array(
			'name' => 'fulltext',
			'typeName' => 'tsvector',
			'size' => null,
			'scale' => null,
			'type' => 13,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '',
			'nullable' => false 
		) 
	),
	'primaryKeys' => array( 
		'film_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'film',
	'schema' => 'public' 
);
?>