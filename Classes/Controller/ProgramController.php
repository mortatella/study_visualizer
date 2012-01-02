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
class Tx_StudyVisualizer_Controller_ProgramController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * programRepository
	 *
	 * @var Tx_StudyVisualizer_Domain_Repository_ProgramRepository
	 */
	protected $programRepository;

	/**
	 * injectProgramRepository
	 *
	 * @param Tx_StudyVisualizer_Domain_Repository_ProgramRepository $programRepository
	 * @return void
	 */
	public function injectProgramRepository(Tx_StudyVisualizer_Domain_Repository_ProgramRepository $programRepository) {
		$this->programRepository = $programRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$programs = $this->programRepository->findAll();
		$this->view->assign('programs', $programs);
	}

	/**
	 * action show
	 *
	 * @param $program
	 * @return void
	 */
	public function showAction(Tx_StudyVisualizer_Domain_Model_Program $program) {
		$this->view->assign('program', $program);
	}

	/**
	 * action new
	 *
	 * @param $newProgram
	 * @dontvalidate $newProgram
	 * @return void
	 */
	public function newAction(Tx_StudyVisualizer_Domain_Model_Program $newProgram = NULL) {
		$this->view->assign('newProgram', $newProgram);
	}

	/**
	 * action create
	 *
	 * @param $newProgram
	 * @return void
	 */
	public function createAction(Tx_StudyVisualizer_Domain_Model_Program $newProgram) {
		$this->programRepository->add($newProgram);
		$this->flashMessageContainer->add('Your new Program was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $program
	 * @return void
	 */
	public function editAction(Tx_StudyVisualizer_Domain_Model_Program $program) {
		$this->view->assign('program', $program);
	}

	/**
	 * action update
	 *
	 * @param $program
	 * @return void
	 */
	public function updateAction(Tx_StudyVisualizer_Domain_Model_Program $program) {
		$this->programRepository->update($program);
		$this->flashMessageContainer->add('Your Program was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $program
	 * @return void
	 */
	public function deleteAction(Tx_StudyVisualizer_Domain_Model_Program $program) {
		$this->programRepository->remove($program);
		$this->flashMessageContainer->add('Your Program was removed.');
		$this->redirect('list');
	}
	
	public function getAllAction()
	{
		return $this->programRepository->findAll();
	}

}
?>