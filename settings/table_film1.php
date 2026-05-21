<?php
global $runnerTableSettings;
$runnerTableSettings['film view'] = array(
	'name' => 'film view',
	'type' => 1,
	'shortName' => 'film1',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list',
			'cards' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'cards' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'cards',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'film view',
	'afterAddDetail' => 'film view',
	'detailsBadgeColor' => 'dc143c',
	'sql' => 'SELECT
	film_id,
	title,
	description,
	release_year,
	language_id,
	original_language_id,
	rental_duration,
	rental_rate,
	length,
	replacement_cost,
	rating,
	last_update,
	special_features,
	"fulltext"
FROM
	"public".film',
	'keyFields' => array( 
		'film_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'film_id' => array(
			'name' => 'film_id',
			'goodName' => 'film_id',
			'strField' => 'film_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'film_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 2,
			'sqlExpression' => 'title',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'description' => array(
			'name' => 'description',
			'goodName' => 'description',
			'strField' => 'description',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'description',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.film' 
		),
		'release_year' => array(
			'name' => 'release_year',
			'goodName' => 'release_year',
			'strField' => 'release_year',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'release_year',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'language_id' => array(
			'name' => 'language_id',
			'goodName' => 'language_id',
			'strField' => 'language_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'language_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'original_language_id' => array(
			'name' => 'original_language_id',
			'goodName' => 'original_language_id',
			'strField' => 'original_language_id',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'original_language_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'rental_duration' => array(
			'name' => 'rental_duration',
			'goodName' => 'rental_duration',
			'strField' => 'rental_duration',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'rental_duration',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'rental_rate' => array(
			'name' => 'rental_rate',
			'goodName' => 'rental_rate',
			'strField' => 'rental_rate',
			'index' => 8,
			'type' => 14,
			'sqlExpression' => 'rental_rate',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'length' => array(
			'name' => 'length',
			'goodName' => 'length',
			'strField' => 'length',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'length',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'replacement_cost' => array(
			'name' => 'replacement_cost',
			'goodName' => 'replacement_cost',
			'strField' => 'replacement_cost',
			'index' => 10,
			'type' => 14,
			'sqlExpression' => 'replacement_cost',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'rating' => array(
			'name' => 'rating',
			'goodName' => 'rating',
			'strField' => 'rating',
			'index' => 11,
			'type' => 13,
			'sqlExpression' => 'rating',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'last_update' => array(
			'name' => 'last_update',
			'goodName' => 'last_update',
			'strField' => 'last_update',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'last_update',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'public.film' 
		),
		'special_features' => array(
			'name' => 'special_features',
			'goodName' => 'special_features',
			'strField' => 'special_features',
			'index' => 13,
			'type' => 13,
			'sqlExpression' => 'special_features',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		),
		'fulltext' => array(
			'name' => 'fulltext',
			'goodName' => 'fulltext',
			'strField' => 'fulltext',
			'index' => 14,
			'type' => 13,
			'sqlExpression' => '"fulltext"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.film' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	film_id,
	title,
	description,
	release_year,
	language_id,
	original_language_id,
	rental_duration,
	rental_rate,
	length,
	replacement_cost,
	rating,
	last_update,
	special_features,
	"fulltext"
FROM
	"public".film',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'film_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'film_id' 
				),
				'encrypted' => false,
				'columnName' => 'film_id' 
			),
			array(
				'sql' => 'title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'title' 
				),
				'encrypted' => false,
				'columnName' => 'title' 
			),
			array(
				'sql' => 'description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'description' 
				),
				'encrypted' => false,
				'columnName' => 'description' 
			),
			array(
				'sql' => 'release_year',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'release_year' 
				),
				'encrypted' => false,
				'columnName' => 'release_year' 
			),
			array(
				'sql' => 'language_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'language_id' 
				),
				'encrypted' => false,
				'columnName' => 'language_id' 
			),
			array(
				'sql' => 'original_language_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'original_language_id' 
				),
				'encrypted' => false,
				'columnName' => 'original_language_id' 
			),
			array(
				'sql' => 'rental_duration',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'rental_duration' 
				),
				'encrypted' => false,
				'columnName' => 'rental_duration' 
			),
			array(
				'sql' => 'rental_rate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'rental_rate' 
				),
				'encrypted' => false,
				'columnName' => 'rental_rate' 
			),
			array(
				'sql' => 'length',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'length' 
				),
				'encrypted' => false,
				'columnName' => 'length' 
			),
			array(
				'sql' => 'replacement_cost',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'replacement_cost' 
				),
				'encrypted' => false,
				'columnName' => 'replacement_cost' 
			),
			array(
				'sql' => 'rating',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'rating' 
				),
				'encrypted' => false,
				'columnName' => 'rating' 
			),
			array(
				'sql' => 'last_update',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'last_update' 
				),
				'encrypted' => false,
				'columnName' => 'last_update' 
			),
			array(
				'sql' => 'special_features',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'special_features' 
				),
				'encrypted' => false,
				'columnName' => 'special_features' 
			),
			array(
				'sql' => '"fulltext"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.film',
					'name' => 'fulltext' 
				),
				'encrypted' => false,
				'columnName' => 'fulltext' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".film',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".film',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'film_id',
						'title',
						'description',
						'release_year',
						'language_id',
						'original_language_id',
						'rental_duration',
						'rental_rate',
						'length',
						'replacement_cost',
						'rating',
						'last_update',
						'special_features',
						'fulltext' 
					),
					'name' => 'public.film' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'film_id,
	title,
	description,
	release_year,
	language_id,
	original_language_id,
	rental_duration,
	rental_rate,
	length,
	replacement_cost,
	rating,
	last_update,
	special_features,
	"fulltext"',
		'fromListSql' => 'FROM
	"public".film',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.film',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list',
			'cards' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'cards' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'cards',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'film_id',
			'title',
			'description',
			'release_year',
			'language_id',
			'original_language_id',
			'rental_duration',
			'rental_rate',
			'length',
			'replacement_cost',
			'rating',
			'last_update',
			'special_features',
			'fulltext' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'film_id',
			'title',
			'description',
			'release_year',
			'language_id',
			'original_language_id',
			'rental_duration',
			'rental_rate',
			'length',
			'replacement_cost',
			'rating',
			'last_update',
			'special_features',
			'fulltext' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'open',
			'openData' => array(
				'how' => 'popup',
				'page' => 'view' 
			) 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'Portuguese(Brazil)' ) {
	$runnerTableLabels['film view'] = array(
	'tableCaption' => 'Film View',
	'fieldLabels' => array(
		'film_id' => 'Film Id',
		'title' => 'Title',
		'description' => 'Description',
		'release_year' => 'Release Year',
		'language_id' => 'Language Id',
		'original_language_id' => 'Original Language Id',
		'rental_duration' => 'Rental Duration',
		'rental_rate' => 'Rental Rate',
		'length' => 'Length',
		'replacement_cost' => 'Replacement Cost',
		'rating' => 'Rating',
		'last_update' => 'Last Update',
		'special_features' => 'Special Features',
		'fulltext' => 'Fulltext' 
	),
	'fieldTooltips' => array(
		'film_id' => '',
		'title' => '',
		'description' => '',
		'release_year' => '',
		'language_id' => '',
		'original_language_id' => '',
		'rental_duration' => '',
		'rental_rate' => '',
		'length' => '',
		'replacement_cost' => '',
		'rating' => '',
		'last_update' => '',
		'special_features' => '',
		'fulltext' => '' 
	),
	'fieldPlaceholders' => array(
		'film_id' => '',
		'title' => '',
		'description' => '',
		'release_year' => '',
		'language_id' => '',
		'original_language_id' => '',
		'rental_duration' => '',
		'rental_rate' => '',
		'length' => '',
		'replacement_cost' => '',
		'rating' => '',
		'last_update' => '',
		'special_features' => '',
		'fulltext' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>