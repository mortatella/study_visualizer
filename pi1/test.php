<?php echo "hi du"; 

// Initialize FE user object:
$feUserObj = tslib_eidtools::initFeUser();
// Connect to database:
tslib_eidtools::connectDB();
 
$output = t3lib_div::makeInstance('Tx_StudyVisualizer_Controller_ProgramController');
$output->renderGalleryAction();

var_dump($output);
?>