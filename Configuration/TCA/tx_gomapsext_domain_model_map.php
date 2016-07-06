<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'default_sortby' => 'ORDER BY title',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,tooltip_title',
		'iconfile' => 'EXT:go_maps_ext/Resources/Public/Icons/tx_gomapsext_domain_model_map.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, tooltip_title,
		                          class, width, height, zoom, zoom_min, zoom_max, addresses, kml_url, kml_local, show_route,
		                          calc_route, scroll_zoom, draggable, double_click_zoom, marker_cluster,
		                          marker_cluster_zoom, marker_cluster_size, marker_search, default_type,
		                          scale_control, streetview_control, zoom_control, zoom_control_type,
		                          map_type_control, map_types, styled_map_name, styled_map_code',
	),
	'types' => array(
		'0' => array('showitem' => 'title,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.size;size,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.zoom;zoom, addresses,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.kml;kml,
					--div--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display,
					default_type,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.interaction;interaction,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.address_interaction;address_interaction,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.cluster;cluster,
					--palette--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.palettes.additional;additional,
					--div--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.controls,
					--palette--;;map_control,--palette--;;zoom_control,--palette--;;controls,
					--div--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.route,
					calc_route, travel_mode, unit_system, show_route,
					--div--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.styled_map,
					styled_map_name, styled_map_code,
					--div--;LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.others,
					sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;time')
	),
	'palettes' => array(
        'address_interaction' => array('showitem' => 'marker_search, show_addresses, show_categories, zoom_click'),
		'cluster' => array('showitem' => 'marker_cluster, --linebreak--, marker_cluster_zoom, marker_cluster_size'),
		'controls' => array('showitem' => 'scale_control, streetview_control'),
		'interaction' => array('showitem' => 'scroll_zoom, draggable, double_click_zoom'),
		'kml' => array('showitem' => 'kml_url, --linebreak--, kml_preserve_viewport, kml_local'),
		'map_control' => array('showitem' => 'map_type_control, --linebreak--, map_types'),
		'size' => array('showitem' => 'width, height'),
        'time' => array('showitem' => 'starttime, endtime'),
		'zoom' => array('showitem' => 'zoom, --linebreak--, zoom_min, zoom_max'),
		'zoom_control' => array('showitem' => 'zoom_control, --linebreak--, zoom_control_type'),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
                'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
                'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_gomapsext_domain_model_map',
				'foreign_table_where' => 'AND tx_gomapsext_domain_model_map.pid=###CURRENT_PID### AND tx_gomapsext_domain_model_map.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'width' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.width',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'required'
			),
		),
		'height' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.height',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'required'
			),
		),
		'zoom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zoom_min' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_min',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zoom_max' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zoom_click' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_click',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'addresses' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.addresses',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_gomapsext_domain_model_address',
				'foreign_table' => 'tx_gomapsext_domain_model_address',
				'MM' => 'tx_gomapsext_map_address_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_POSITION' => 'right',
					'_PADDING' => 4,
					'_VERTICAL' => 0,
					'_DISTANCE' => 2,
					'suggest' => array(
						'type' => 'suggest'
					),
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'module' => array(
							'name' => 'wizard_edit',
						),
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
						'params' => array(
							'table' => 'tx_gomapsext_domain_model_address',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'module' => array(
							'name' => 'wizard_add',
						),
					),
				),
			),
		),
		'kml_url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.kml_url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'max' => 500
			),
		),
		'kml_local' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.kml_local',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kml_preserve_viewport' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.kml_preserve_viewport',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'show_addresses' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.show_addresses',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'show_categories' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.show_categories',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'scroll_zoom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.scroll_zoom',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'draggable' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.draggable',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'double_click_zoom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.double_click_zoom',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'marker_cluster' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.marker_cluster',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'marker_cluster_zoom' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.marker_cluster_zoom',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'marker_cluster_size' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.marker_cluster_size',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'marker_search' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.marker_search',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'default_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.default_type',
			'config' => array(
				'type' => 'radio',
				'items' => array(
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display.default.0', 0),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display.default.1', 1),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display.default.2', 2),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display.default.3', 3),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.display.default.4', 4),
				),
				'eval' => '',
				'default' => 0
			),
		),
		'scale_control' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.scale_control',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'streetview_control' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.streetview_control',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'zoom_control' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_control',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'zoom_control_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_control_type',
			'config' => array(
				'type' => 'radio',
				'default' => 0,
				'items' => array(
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_control_type.0', 0),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_control_type.1', 1),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.zoom_control_type.2', 2),
				),
			),
		),
		'map_type_control' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_type_control',
			'config' => array(
				'type' => 'check',
				'default' => 1
			),
		),
		'map_types' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types',
			'config' => array(
				'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
				'items' => array(
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types.0', 0),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types.1', 1),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types.2', 2),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types.3', 3),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.map_types.4', 4),
				),
				'size' => 5,
				'default' => '0,1,2',
				'maxitems' => 5,
				'eval' => '',

			),
		),
		'show_route' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.show_route',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'calc_route' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.calc_route',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'travel_mode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode',
			'config' => array(
				'type' => 'radio',
				'items' => array(
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode.0', 0),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode.1', 1),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode.2', 2),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode.3', 3),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.travel_mode.4', 4),
				),
				'eval' => '',
				'default' => 0
			),
		),
		'unit_system' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.unit_system',
			'config' => array(
				'type' => 'radio',
				'items' => array(
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.unit_system.0', 0),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.unit_system.1', 1),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.unit_system.2', 2),
					array('LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.unit_system.3', 3),
				),
				'eval' => '',
				'default' => 2
			),
		),
		'styled_map_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.styled_map_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'styled_map_code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang_db.xlf:tx_gomapsext_domain_model_map.styled_map_code',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
	),
);

?>