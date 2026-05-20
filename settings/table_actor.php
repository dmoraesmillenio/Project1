<?php
global $runnerTableSettings;
$runnerTableSettings['public.actor'] = array(
	'name' => 'public.actor',
	'shortName' => 'actor',
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
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.actor',
	'afterAddDetail' => 'public.actor',
	'detailsBadgeColor' => 'e67349',
	'sql' => 'SELECT
	actor_id,
	first_name,
	last_name,
	last_update
FROM
	"public".actor',
	'keyFields' => array( 
		'actor_id' 
	),
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
			'autoinc' => true,
			'sqlExpression' => 'actor_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.actor' 
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
			'tableName' => 'public.actor' 
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
			'tableName' => 'public.actor' 
		),
		'last_update' => array(
			'name' => 'last_update',
			'goodName' => 'last_update',
			'strField' => 'last_update',
			'index' => 4,
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
			'tableName' => 'public.actor' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	actor_id,
	first_name,
	last_name,
	last_update
FROM
	"public".actor',
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
					'table' => 'public.actor',
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
					'table' => 'public.actor',
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
					'table' => 'public.actor',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
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
					'table' => 'public.actor',
					'name' => 'last_update' 
				),
				'encrypted' => false,
				'columnName' => 'last_update' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".actor',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".actor',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'actor_id',
						'first_name',
						'last_name',
						'last_update' 
					),
					'name' => 'public.actor' 
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
	last_update',
		'fromListSql' => 'FROM
	"public".actor',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.actor',
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
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
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
			'last_update' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'actor_id',
			'first_name',
			'last_name',
			'last_update' 
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
	$runnerTableLabels['public.actor'] = array(
	'tableCaption' => 'Actor',
	'fieldLabels' => array(
		'actor_id' => 'Actor Id',
		'first_name' => 'First Name',
		'last_name' => 'Last Name',
		'last_update' => 'Last Update' 
	),
	'fieldTooltips' => array(
		'actor_id' => '',
		'first_name' => '',
		'last_name' => '',
		'last_update' => '' 
	),
	'fieldPlaceholders' => array(
		'actor_id' => '',
		'first_name' => '',
		'last_name' => '',
		'last_update' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>