<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'film_id' => array( 
				'import_field' 
			),
			'title' => array( 
				'import_field1' 
			),
			'description' => array( 
				'import_field2' 
			),
			'release_year' => array( 
				'import_field3' 
			),
			'language_id' => array( 
				'import_field4' 
			),
			'original_language_id' => array( 
				'import_field5' 
			),
			'rental_duration' => array( 
				'import_field6' 
			),
			'rental_rate' => array( 
				'import_field7' 
			),
			'length' => array( 
				'import_field8' 
			),
			'replacement_cost' => array( 
				'import_field9' 
			),
			'rating' => array( 
				'import_field10' 
			),
			'last_update' => array( 
				'import_field11' 
			),
			'special_features' => array( 
				'import_field12' 
			),
			'fulltext' => array( 
				'import_field13' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'import-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'film_id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'title',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'description',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'release_year',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'language_id',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'original_language_id',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'rental_duration',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'rental_rate',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'length',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'replacement_cost',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'rating',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'last_update',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'special_features',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'fulltext',
			'type' => 'import_field' 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'transparent',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	),
	'cardStyle' => array(
		 
	) 
);
		?>