<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => false,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.actor',
				'page' => 'list' 
			),
			'welcome_item1' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.actor_info',
				'page' => 'list' 
			),
			'welcome_item2' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.address',
				'page' => 'list' 
			),
			'welcome_item3' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.city',
				'page' => 'list' 
			),
			'welcome_item4' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.category',
				'page' => 'list' 
			),
			'welcome_item5' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'public.film',
				'page' => 'list' 
			),
			'welcome_item6' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'film view',
				'page' => 'list' 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu' 
				),
				'grid' => array( 
					'welcome_item',
					'welcome_item1',
					'welcome_item2',
					'welcome_item3',
					'welcome_item4',
					'welcome_item5',
					'welcome_item6' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'welcome_item' => 'grid',
				'welcome_item1' => 'grid',
				'welcome_item2' => 'grid',
				'welcome_item3' => 'grid',
				'welcome_item4' => 'grid',
				'welcome_item5' => 'grid',
				'welcome_item6' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'welcome_item' => array( 
				'welcome_item',
				'welcome_item1',
				'welcome_item2',
				'welcome_item3',
				'welcome_item4',
				'welcome_item5',
				'welcome_item6' 
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
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
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
	'id' => 'menu',
	'type' => 'menu',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
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
						'logo',
						'menu' 
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
			'modelId' => 'welcome',
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
						'welcome_item',
						'welcome_item1',
						'welcome_item2',
						'welcome_item3',
						'welcome_item4',
						'welcome_item5',
						'welcome_item6' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.actor',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.actor',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'hand-right' 
			),
			'linkComments' => array(
				'text' => 'Actor description',
				'type' => 0 
			),
			'background' => '#e67349',
			'linkType' => 0 
		),
		'welcome_item1' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.actor_info',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.actor_info',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'linkComments' => array(
				'text' => 'Actor Info description',
				'type' => 0 
			),
			'background' => '#cd853f',
			'linkType' => 0 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.address',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.address',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'briefcase' 
			),
			'linkComments' => array(
				'text' => 'Address description',
				'type' => 0 
			),
			'background' => '#6b8e23',
			'linkType' => 0 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.city',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.city',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'linkComments' => array(
				'text' => 'City description',
				'type' => 0 
			),
			'background' => '#8fbc8b',
			'linkType' => 0 
		),
		'welcome_item4' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.category',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.category',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'tree-conifer' 
			),
			'linkComments' => array(
				'text' => 'Category description',
				'type' => 0 
			),
			'background' => '#7b68ee',
			'linkType' => 0 
		),
		'welcome_item5' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'public.film',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'public.film',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'send' 
			),
			'background' => '#dc143c',
			'linkType' => 0 
		),
		'welcome_item6' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'film view',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'film view',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'tree-conifer' 
			),
			'background' => '#dc143c',
			'linkType' => 0 
		) 
	),
	'version' => 13,
	'pageWidth' => 'full',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'transparent',
	'imagePosition' => 'right',
	'welcomePageStay' => true,
	'listTotals' => 1,
	'title' => array(
		 
	),
	'cardStyle' => array(
		 
	),
	'welcomeStyle' => 3 
);
		?>