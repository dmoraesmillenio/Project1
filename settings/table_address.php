<?php
global $runnerTableSettings;
$runnerTableSettings['public.address'] = array(
	'name' => 'public.address',
	'shortName' => 'address',
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
	'afterEditDetails' => 'public.address',
	'afterAddDetail' => 'public.address',
	'detailsBadgeColor' => '6b8e23',
	'sql' => 'SELECT
	address_id,
	address,
	address2,
	district,
	city_id,
	postal_code,
	phone,
	last_update
FROM
	"public".address',
	'keyFields' => array( 
		'address_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'address_id' => array(
			'name' => 'address_id',
			'goodName' => 'address_id',
			'strField' => 'address_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'address_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'address' => array(
			'name' => 'address',
			'goodName' => 'address',
			'strField' => 'address',
			'index' => 2,
			'sqlExpression' => 'address',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'address2' => array(
			'name' => 'address2',
			'goodName' => 'address2',
			'strField' => 'address2',
			'index' => 3,
			'sqlExpression' => 'address2',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'district' => array(
			'name' => 'district',
			'goodName' => 'district',
			'strField' => 'district',
			'index' => 4,
			'sqlExpression' => 'district',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'city_id' => array(
			'name' => 'city_id',
			'goodName' => 'city_id',
			'strField' => 'city_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'city_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'postal_code' => array(
			'name' => 'postal_code',
			'goodName' => 'postal_code',
			'strField' => 'postal_code',
			'index' => 6,
			'sqlExpression' => 'postal_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'phone' => array(
			'name' => 'phone',
			'goodName' => 'phone',
			'strField' => 'phone',
			'index' => 7,
			'sqlExpression' => 'phone',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.address' 
		),
		'last_update' => array(
			'name' => 'last_update',
			'goodName' => 'last_update',
			'strField' => 'last_update',
			'index' => 8,
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
			'tableName' => 'public.address' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	address_id,
	address,
	address2,
	district,
	city_id,
	postal_code,
	phone,
	last_update
FROM
	"public".address',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'address_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'address_id' 
				),
				'encrypted' => false,
				'columnName' => 'address_id' 
			),
			array(
				'sql' => 'address',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'address' 
				),
				'encrypted' => false,
				'columnName' => 'address' 
			),
			array(
				'sql' => 'address2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'address2' 
				),
				'encrypted' => false,
				'columnName' => 'address2' 
			),
			array(
				'sql' => 'district',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'district' 
				),
				'encrypted' => false,
				'columnName' => 'district' 
			),
			array(
				'sql' => 'city_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'city_id' 
				),
				'encrypted' => false,
				'columnName' => 'city_id' 
			),
			array(
				'sql' => 'postal_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'postal_code' 
				),
				'encrypted' => false,
				'columnName' => 'postal_code' 
			),
			array(
				'sql' => 'phone',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.address',
					'name' => 'phone' 
				),
				'encrypted' => false,
				'columnName' => 'phone' 
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
					'table' => 'public.address',
					'name' => 'last_update' 
				),
				'encrypted' => false,
				'columnName' => 'last_update' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".address',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".address',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'address_id',
						'address',
						'address2',
						'district',
						'city_id',
						'postal_code',
						'phone',
						'last_update' 
					),
					'name' => 'public.address' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'address_id,
	address,
	address2,
	district,
	city_id,
	postal_code,
	phone,
	last_update',
		'fromListSql' => 'FROM
	"public".address',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.address',
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
			'address_id',
			'address',
			'address2',
			'district',
			'city_id',
			'postal_code',
			'phone',
			'last_update' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'address_id',
			'address',
			'address2',
			'district',
			'city_id',
			'postal_code',
			'phone',
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
	$runnerTableLabels['public.address'] = array(
	'tableCaption' => 'Address',
	'fieldLabels' => array(
		'address_id' => 'Address Id',
		'address' => 'Address',
		'address2' => 'Address2',
		'district' => 'District',
		'city_id' => 'City Id',
		'postal_code' => 'Postal Code',
		'phone' => 'Phone',
		'last_update' => 'Last Update' 
	),
	'fieldTooltips' => array(
		'address_id' => '',
		'address' => '',
		'address2' => '',
		'district' => '',
		'city_id' => '',
		'postal_code' => '',
		'phone' => '',
		'last_update' => '' 
	),
	'fieldPlaceholders' => array(
		'address_id' => '',
		'address' => '',
		'address2' => '',
		'district' => '',
		'city_id' => '',
		'postal_code' => '',
		'phone' => '',
		'last_update' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>