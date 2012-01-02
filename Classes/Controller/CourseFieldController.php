<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package study_visualizer
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_StudyVisualizer_Controller_CourseFieldController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action new
	 *
	 * @param $newCourseField
	 * @dontvalidate $newCourseField
	 * @return void
	 */
	public function newAction(Tx_StudyVisualizer_Domain_Model_CourseField $newCourseField = NULL) {
		$this->view->assign('newCourseField', $newCourseField);
	}

	/**
	 * action create
	 *
	 * @param $newCourseField
	 * @return void
	 */
	public function createAction(Tx_StudyVisualizer_Domain_Model_CourseField $newCourseField) {
		$this->courseFieldRepository->add($newCourseField);
		$this->flashMessageContainer->add('Your new CourseField was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $courseField
	 * @return void
	 */
	public function editAction(Tx_StudyVisualizer_Domain_Model_CourseField $courseField) {
		$this->view->assign('courseField', $courseField);
	}

	/**
	 * action update
	 *
	 * @param $courseField
	 * @return void
	 */
	public function updateAction(Tx_StudyVisualizer_Domain_Model_CourseField $courseField) {
		$this->courseFieldRepository->update($courseField);
		$this->flashMessageContainer->add('Your CourseField was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $courseField
	 * @return void
	 */
	public function deleteAction(Tx_StudyVisualizer_Domain_Model_CourseField $courseField) {
		$this->courseFieldRepository->remove($courseField);
		$this->flashMessageContainer->add('Your CourseField was removed.');
		$this->redirect('list');
	}

}
?>