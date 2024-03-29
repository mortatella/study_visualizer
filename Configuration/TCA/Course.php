<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_studyvisualizer_domain_model_course'] = array(
	'ctrl' => $TCA['tx_studyvisualizer_domain_model_course']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, ects, sws, typeof, infields',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, description, ects, sws, typeof, infields,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_studyvisualizer_domain_model_course',
				'foreign_table_where' => 'AND tx_studyvisualizer_domain_model_course.pid=###CURRENT_PID### AND tx_studyvisualizer_domain_model_course.sys_language_uid IN (-1,0)',
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
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ects' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.ects',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'sws' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.sws',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'typeof' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.typeof',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_coursetype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'infields' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course.infields',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_studyvisualizer_domain_model_coursefield',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);
?>