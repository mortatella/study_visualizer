<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_studyvisualizer_domain_model_program'] = array(
	'ctrl' => $TCA['tx_studyvisualizer_domain_model_program']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, graduateswith, istypeof, consistsof, programmfield',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, description, graduateswith, istypeof, consistsof, programmfield,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_studyvisualizer_domain_model_program',
				'foreign_table_where' => 'AND tx_studyvisualizer_domain_model_program.pid=###CURRENT_PID### AND tx_studyvisualizer_domain_model_program.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
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
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
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
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'graduateswith' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.graduateswith',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_graudation',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'istypeof' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.istypeof',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_programtype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'consistsof' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.consistsof',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_course',
				'MM' => 'tx_studyvisualizer_program_course_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_studyvisualizer_domain_model_course',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'programmfield' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program.programmfield',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_programfield',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);
?>