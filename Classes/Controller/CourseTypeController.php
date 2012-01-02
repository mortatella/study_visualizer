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
class Tx_StudyVisualizer_Controller_CourseTypeController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action new
	 *
	 * @param $newCourseType
	 * @dontvalidate $newCourseType
	 * @return void
	 */
	public function newAction(Tx_StudyVisualizer_Domain_Model_CourseType $newCourseType = NULL) {
		$this->view->assign('newCourseType', $newCourseType);
	}

	/**
	 * action create
	 *
	 * @param $newCourseType
	 * @return void
	 */
	public function createAction(Tx_StudyVisualizer_Domain_Model_CourseType $newCourseType) {
		$this->courseTypeRepository->add($newCourseType);
		$this->flashMessageContainer->add('Your new CourseType was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $courseType
	 * @return void
	 */
	public function editAction(Tx_StudyVisualizer_Domain_Model_CourseType $courseType) {
		$this->view->assign('courseType', $courseType);
	}

	/**
	 * action update
	 *
	 * @param $courseType
	 * @return void
	 */
	public function updateAction(Tx_StudyVisualizer_Domain_Model_CourseType $courseType) {
		$this->courseTypeRepository->update($courseType);
		$this->flashMessageContainer->add('Your CourseType was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $courseType
	 * @return void
	 */
	public function deleteAction(Tx_StudyVisualizer_Domain_Model_CourseType $courseType) {
		$this->courseTypeRepository->remove($courseType);
		$this->flashMessageContainer->add('Your CourseType was removed.');
		$this->redirect('list');
	}

}
?>