<?php
global $runnerTableSettings;
$runnerTableSettings['public.actor_info'] = array(
	'name' => 'public.actor_info',
	'shortName' => 'actor_info',
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
		'list' => array( 
			'list' 
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.actor_info',
	'afterAddDetail' => 'public.actor_info',
	'detailsBadgeColor' => 'cd853f',
	'sql' => 'SELECT
	actor_id,
	first_name,
	last_name,
	film_info
FROM
	"public".actor_info',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'actor_id' => array(
			'name' => 'actor_id',
			'goodName' => 'actor_id',
			'strField' => 'actor_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'actor_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.actor_info' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'index' => 2,
			'sqlExpression' => 'first_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.actor_info' 
		),
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'index' => 3,
			'sqlExpression' => 'last_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.actor_info' 
		),
		'film_info' => array(
			'name' => 'film_info',
			'goodName' => 'film_info',
			'strField' => 'film_info',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'film_info',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.actor_info' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	actor_id,
	first_name,
	last_name,
	film_info
FROM
	"public".actor_info',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'actor_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.actor_info',
					'name' => 'actor_id' 
				),
				'encrypted' => false,
				'columnName' => 'actor_id' 
			),
			array(
				'sql' => 'first_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.actor_info',
					'name' => 'first_name' 
				),
				'encrypted' => false,
				'columnName' => 'first_name' 
			),
			array(
				'sql' => 'last_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.actor_info',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'film_info',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.actor_info',
					'name' => 'film_info' 
				),
				'encrypted' => false,
				'columnName' => 'film_info' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".actor_info',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".actor_info',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'actor_id',
						'first_name',
						'last_name',
						'film_info' 
					),
					'name' => 'public.actor_info' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'actor_id,
	first_name,
	last_name,
	film_info',
		'fromListSql' => 'FROM
	"public".actor_info',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.actor_info',
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
		'list' => array( 
			'list' 
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'actor_id',
			'first_name',
			'last_name',
			'film_info' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'actor_id',
			'first_name',
			'last_name',
			'film_info' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
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
	$runnerTableLabels['public.actor_info'] = array(
	'tableCaption' => 'Actor Info',
	'fieldLabels' => array(
		'actor_id' => 'Actor Id',
		'first_name' => 'First Name',
		'last_name' => 'Last Name',
		'film_info' => 'Film Info' 
	),
	'fieldTooltips' => array(
		'actor_id' => '',
		'first_name' => '',
		'last_name' => '',
		'film_info' => '' 
	),
	'fieldPlaceholders' => array(
		'actor_id' => '',
		'first_name' => '',
		'last_name' => '',
		'film_info' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>