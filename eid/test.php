<?php

/*
require_once('typo3conf/ext/study_visualizer/eid/dispatcher.php');
$dispatcher = t3lib_div::makeInstance('Tx_Yag_Utility_Ajax_Dispatcher');
$dispatcher->dispatch();
*/
	
echo "hiho";

$feUserObj = tslib_eidtools::initFeUser(); // Initialize FE user object
tslib_eidtools::connectDB(); //Connect to database

echo json_encode($feUserObj);

?>