<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Studyvisualizer',
	'StudyVisualizer'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . studyvisualizer;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .studyvisualizer. '.xml');






t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Study Visualizer');


t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_program', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_program.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_program');
$TCA['tx_studyvisualizer_domain_model_program'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_program',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Program.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_program.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_course', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_course.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_course');
$TCA['tx_studyvisualizer_domain_model_course'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_course',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Course.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_course.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_similarity', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_similarity.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_similarity');
$TCA['tx_studyvisualizer_domain_model_similarity'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_similarity',
		'label' => 'program',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Similarity.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_similarity.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_coursefield', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_coursefield.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_coursefield');
$TCA['tx_studyvisualizer_domain_model_coursefield'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_coursefield',
		'label' => 'ispart',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/CourseField.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_coursefield.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_graudation', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_graudation.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_graudation');
$TCA['tx_studyvisualizer_domain_model_graudation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_graudation',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Graudation.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_graudation.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_programtype', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_programtype.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_programtype');
$TCA['tx_studyvisualizer_domain_model_programtype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_programtype',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ProgramType.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_programtype.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_coursetype', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_coursetype.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_coursetype');
$TCA['tx_studyvisualizer_domain_model_coursetype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_coursetype',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/CourseType.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_coursetype.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_studyvisualizer_domain_model_programfield', 'EXT:study_visualizer/Resources/Private/Language/locallang_csh_tx_studyvisualizer_domain_model_programfield.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_studyvisualizer_domain_model_programfield');
$TCA['tx_studyvisualizer_domain_model_programfield'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:study_visualizer/Resources/Private/Language/locallang_db.xml:tx_studyvisualizer_domain_model_programfield',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ProgramField.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_studyvisualizer_domain_model_programfield.gif'
	),
);

?>