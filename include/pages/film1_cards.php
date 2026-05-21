<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => true,
		'detailsAdd' => true,
		'inlineEdit' => true,
		'spreadsheetMode' => true,
		'addToBottom' => false,
		'addNewRecordAutomatically' => true,
		'delete' => true,
		'updateSelected' => true,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'film_id' => array(
			'totalsType' => '' 
		),
		'title' => array(
			'totalsType' => '' 
		),
		'description' => array(
			'totalsType' => '' 
		),
		'release_year' => array(
			'totalsType' => '' 
		),
		'language_id' => array(
			'totalsType' => '' 
		),
		'original_language_id' => array(
			'totalsType' => '' 
		),
		'rental_duration' => array(
			'totalsType' => '' 
		),
		'rental_rate' => array(
			'totalsType' => '' 
		),
		'length' => array(
			'totalsType' => '' 
		),
		'replacement_cost' => array(
			'totalsType' => '' 
		),
		'rating' => array(
			'totalsType' => '' 
		),
		'last_update' => array(
			'totalsType' => '' 
		),
		'special_features' => array(
			'totalsType' => '' 
		),
		'fulltext' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'title',
			'film_id',
			'description',
			'release_year',
			'language_id',
			'original_language_id',
			'rental_duration',
			'rental_rate',
			'length',
			'replacement_cost' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'film_id',
			'fulltext',
			'special_features',
			'last_update',
			'rating',
			'replacement_cost',
			'length',
			'rental_rate',
			'rental_duration',
			'original_language_id',
			'language_id',
			'release_year',
			'description',
			'title' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			'title',
			'description',
			'release_year',
			'language_id',
			'original_language_id',
			'rental_duration',
			'rental_rate',
			'length' 
		),
		'inlineEditFields' => array( 
			'title',
			'description',
			'release_year',
			'language_id',
			'original_language_id',
			'rental_duration',
			'rental_rate',
			'length' 
		),
		'fieldItems' => array(
			'title' => array( 
				'grid_field',
				'grid_field_label' 
			),
			'film_id' => array( 
				'grid_field1',
				'grid_field_label1' 
			),
			'description' => array( 
				'grid_field2',
				'grid_field_label2' 
			),
			'release_year' => array( 
				'grid_field3',
				'grid_field_label3' 
			),
			'language_id' => array( 
				'grid_field4',
				'grid_field_label4' 
			),
			'original_language_id' => array( 
				'grid_field5',
				'grid_field_label5' 
			),
			'rental_duration' => array( 
				'grid_field6',
				'grid_field_label6' 
			),
			'rental_rate' => array( 
				'grid_field7',
				'grid_field_label7' 
			),
			'length' => array( 
				'grid_field8',
				'grid_field_label8' 
			),
			'replacement_cost' => array( 
				'grid_field9',
				'grid_field_label9' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'inline_add',
					'inline_save_all',
					'inline_cancel_all',
					'expand_menu_button',
					'delete',
					'breadcrumb',
					'update_selected',
					'collapse_button',
					'details_found',
					'page_size',
					'simple_search',
					'list_options',
					'print_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu',
					'search_panel' 
				),
				'supertop' => array( 
					 
				),
				'grid' => array( 
					'grid_field',
					'grid_field1',
					'grid_field2',
					'grid_field3',
					'grid_field4',
					'grid_field5',
					'grid_field6',
					'grid_field7',
					'grid_field8',
					'grid_field9' 
				),
				'top' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'add' => 'above-grid',
				'inline_add' => 'above-grid',
				'inline_save_all' => 'above-grid',
				'inline_cancel_all' => 'above-grid',
				'expand_menu_button' => 'above-grid',
				'delete' => 'above-grid',
				'breadcrumb' => 'above-grid',
				'update_selected' => 'above-grid',
				'collapse_button' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'simple_search' => 'above-grid',
				'list_options' => 'above-grid',
				'print_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'search_panel' => 'left',
				'grid_field' => 'grid',
				'grid_field1' => 'grid',
				'grid_field2' => 'grid',
				'grid_field3' => 'grid',
				'grid_field4' => 'grid',
				'grid_field5' => 'grid',
				'grid_field6' => 'grid',
				'grid_field7' => 'grid',
				'grid_field8' => 'grid',
				'grid_field9' => 'grid' 
			),
			'itemLocations' => array(
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				) 
			),
			'itemVisiblity' => array(
				'breadcrumb' => 5,
				'print_panel' => 5,
				'expand_menu_button' => 2,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'delete' => array( 
				'delete' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'delete_selected' => array( 
				'delete_selected' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field10',
				'search_panel_field11',
				'search_panel_field12',
				'search_panel_field13' 
			),
			'grid_edit' => array( 
				'grid_edit' 
			),
			'add' => array( 
				'add' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'export' => array( 
				'export' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'grid_field' => array( 
				'grid_field',
				'grid_field1',
				'grid_field2',
				'grid_field3',
				'grid_field4',
				'grid_field5',
				'grid_field6',
				'grid_field7',
				'grid_field8',
				'grid_field9' 
			),
			'grid_field_label' => array( 
				'grid_field_label',
				'grid_field_label1',
				'grid_field_label2',
				'grid_field_label3',
				'grid_field_label4',
				'grid_field_label5',
				'grid_field_label6',
				'grid_field_label7',
				'grid_field_label8',
				'grid_field_label9' 
			),
			'update_selected' => array( 
				'update_selected' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			),
			'inline_save_all' => array( 
				'inline_save_all' 
			),
			'inline_cancel_all' => array( 
				'inline_cancel_all' 
			),
			'edit_selected' => array( 
				'edit_selected' 
			),
			'grid_inline_edit' => array( 
				'grid_inline_edit' 
			),
			'grid_inline_save' => array( 
				'grid_inline_save' 
			),
			'saving_icon' => array( 
				'saving_icon' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_copy' => array( 
				'grid_copy' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'cell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'title_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'film_id_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'description_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'release_year_fieldcolumn' 
						),
						'items' => array( 
							'grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'language_id_fieldcolumn' 
						),
						'items' => array( 
							'grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							5 
						),
						'tags' => array( 
							'original_language_id_fieldcolumn' 
						),
						'items' => array( 
							'grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							6 
						),
						'tags' => array( 
							'rental_duration_fieldcolumn' 
						),
						'items' => array( 
							'grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							7 
						),
						'tags' => array( 
							'rental_rate_fieldcolumn' 
						),
						'items' => array( 
							'grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							8 
						),
						'tags' => array( 
							'length_fieldcolumn' 
						),
						'items' => array( 
							'grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							9 
						),
						'tags' => array( 
							'replacement_cost_fieldcolumn' 
						),
						'items' => array( 
							'grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							10 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 11 
			) 
		) 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
			) 
		),
		'gridType' => 3,
		'recsPerRow' => 1,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'list',
		'breadcrumb' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'cards',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 2,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add',
						'inline_add',
						'inline_save_all',
						'inline_cancel_all',
						'expand_menu_button',
						'delete',
						'breadcrumb',
						'update_selected',
						'collapse_button' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'simple_search',
						'list_options',
						'print_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu',
						'search_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
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
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'cards-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field1' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field2' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field3' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field4' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field5' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field6' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field7' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field8' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_field9' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview' 
						) 
					),
					'section' => 'foot' 
				) 
			),
			'cells' => array(
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						 
					) 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'title',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'film_id',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'description',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field3' 
					),
					'field' => 'release_year',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field4' 
					),
					'field' => 'language_id',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field5' 
					),
					'field' => 'original_language_id',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field6' 
					),
					'field' => 'rental_duration',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field7' 
					),
					'field' => 'rental_rate',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field8' 
					),
					'field' => 'length',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field9' 
					),
					'field' => 'replacement_cost',
					'columnName' => 'field' 
				) 
			),
			'deferredItems' => array( 
				'grid_checkbox_head',
				'grid_checkbox',
				'grid_edit',
				'grid_view',
				'grid_field_label',
				'grid_field_label1',
				'grid_field_label2',
				'grid_field_label3',
				'grid_field_label4',
				'grid_field_label5',
				'grid_field_label6',
				'grid_field_label7',
				'grid_field_label8',
				'grid_inline_cancel',
				'grid_inline_edit',
				'grid_inline_save',
				'saving_icon',
				'grid_copy',
				'grid_field_label9' 
			),
			'recsPerRow' => 1,
			'cardWidth' => '300px',
			'cardHeight' => '340px',
			'cardGap' => '15px' 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'page_size' => array(
			'type' => 'page_size' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'delete' => array(
			'type' => 'delete' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'edit_selected',
				'export_selected',
				'delete_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel',
				'-1',
				'export',
				'-2',
				'import' 
			),
			'icon' => array(
				'glyph' => 'cog',
				'style' => 0 
			) 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'-' => array(
			'type' => '-' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'film_id',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field1' => array(
			'field' => 'title',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field2' => array(
			'field' => 'description',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field3' => array(
			'field' => 'release_year',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field4' => array(
			'field' => 'language_id',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field5' => array(
			'field' => 'original_language_id',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field6' => array(
			'field' => 'rental_duration',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field7' => array(
			'field' => 'rental_rate',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field8' => array(
			'field' => 'length',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field9' => array(
			'field' => 'replacement_cost',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field10' => array(
			'field' => 'rating',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field11' => array(
			'field' => 'last_update',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field12' => array(
			'field' => 'special_features',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'search_panel_field13' => array(
			'field' => 'fulltext',
			'type' => 'search_panel_field',
			'required' => false 
		),
		'grid_edit' => array(
			'type' => 'grid_edit' 
		),
		'add' => array(
			'type' => 'add' 
		),
		'grid_view' => array(
			'type' => 'grid_view' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button',
			'icon' => array(
				'glyph' => 'menu-hamburger',
				'style' => 0 
			) 
		),
		'collapse_button' => array(
			'type' => 'collapse_button',
			'icon' => array(
				'glyph' => 'triangle-left',
				'style' => 0 
			) 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'grid_field' => array(
			'field' => 'title',
			'type' => 'grid_field',
			'cardStyle' => 2,
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'title' 
		),
		'grid_field1' => array(
			'field' => 'film_id',
			'type' => 'grid_field',
			'cardStyle' => 0,
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'film_id' 
		),
		'grid_field2' => array(
			'field' => 'description',
			'type' => 'grid_field',
			'cardStyle' => 0,
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label2' => array(
			'type' => 'grid_field_label',
			'field' => 'description' 
		),
		'grid_field3' => array(
			'field' => 'release_year',
			'type' => 'grid_field',
			'cardStyle' => 0,
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label3' => array(
			'type' => 'grid_field_label',
			'field' => 'release_year' 
		),
		'grid_field4' => array(
			'field' => 'language_id',
			'type' => 'grid_field',
			'cardStyle' => 0,
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label4' => array(
			'type' => 'grid_field_label',
			'field' => 'language_id' 
		),
		'grid_field5' => array(
			'field' => 'original_language_id',
			'type' => 'grid_field',
			'cardStyle' => 0,
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label5' => array(
			'type' => 'grid_field_label',
			'field' => 'original_language_id' 
		),
		'grid_field6' => array(
			'field' => 'rental_duration',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label6' => array(
			'type' => 'grid_field_label',
			'field' => 'rental_duration' 
		),
		'grid_field7' => array(
			'field' => 'rental_rate',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label7' => array(
			'type' => 'grid_field_label',
			'field' => 'rental_rate' 
		),
		'grid_field8' => array(
			'field' => 'length',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label8' => array(
			'type' => 'grid_field_label',
			'field' => 'length' 
		),
		'update_selected' => array(
			'type' => 'update_selected' 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		),
		'inline_save_all' => array(
			'type' => 'inline_save_all' 
		),
		'inline_cancel_all' => array(
			'type' => 'inline_cancel_all' 
		),
		'edit_selected' => array(
			'type' => 'edit_selected' 
		),
		'grid_inline_edit' => array(
			'type' => 'grid_inline_edit' 
		),
		'grid_inline_save' => array(
			'type' => 'grid_inline_save' 
		),
		'saving_icon' => array(
			'type' => 'saving_icon' 
		),
		'inline_add' => array(
			'type' => 'inline_add' 
		),
		'grid_copy' => array(
			'type' => 'grid_copy' 
		),
		'grid_field9' => array(
			'field' => 'replacement_cost',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label9' => array(
			'type' => 'grid_field_label',
			'field' => 'replacement_cost' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
		) 
	),
	'spreadsheetGrid' => true,
	'version' => 13,
	'pageWidth' => 'full',
	'addToBottom' => false,
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