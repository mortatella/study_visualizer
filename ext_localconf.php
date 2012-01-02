<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Studyvisualizer',
	array(
		'Program' => 'list, show, new, create, edit, update, delete',
		'Course' => 'show, list, new, create, edit, update, delete',
		'Similarity' => 'new, create, edit, update, delete',
		'CourseField' => 'new, create, edit, update, delete',
		'Graudation' => 'new, create, edit, update, delete',
		'ProgramType' => 'new, create, edit, update, delete',
		'CourseType' => 'new, create, edit, update, delete',
		'ProgramField' => 'list, new, create, edit, update',
		
	),
	// non-cacheable actions
	array(
		'Program' => 'create, update, delete',
		'Course' => 'create, update, delete',
		'Similarity' => 'create, update, delete',
		'CourseField' => 'create, update, delete',
		'Graudation' => 'create, update, delete',
		'ProgramType' => 'create, update, delete',
		'CourseType' => 'create, update, delete',
		'ProgramField' => 'create, update',
		
	)
);

// json handler configuration
//$TYPO3_CONF_VARS['FE']['eID_include']['demo'] = 'EXT:stuy_visualizer/json/json_test.php';

//$TYPO3_CONF_VARS['FE']['eID_include']['demo'] = 'EXT:study_visualizer/eid/test.php';

//t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_ajaxdemo_pi1.php', '_pi1', 'list_type', 1);

$TYPO3_CONF_VARS['FE']['eID_include']['test'] = 'EXT:study_visualizer/eid/test.php';

#require_once('typo3conf/ext/study_visualizer/Classes/Model/Program.php');
#$obj = t3lib_div::makeInstance("tx_study_visualizer");


?>