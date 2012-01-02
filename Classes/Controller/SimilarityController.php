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
class Tx_StudyVisualizer_Controller_SimilarityController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action new
	 *
	 * @param $newSimilarity
	 * @dontvalidate $newSimilarity
	 * @return void
	 */
	public function newAction(Tx_StudyVisualizer_Domain_Model_Similarity $newSimilarity = NULL) {
		$this->view->assign('newSimilarity', $newSimilarity);
	}

	/**
	 * action create
	 *
	 * @param $newSimilarity
	 * @return void
	 */
	public function createAction(Tx_StudyVisualizer_Domain_Model_Similarity $newSimilarity) {
		$this->similarityRepository->add($newSimilarity);
		$this->flashMessageContainer->add('Your new Similarity was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $similarity
	 * @return void
	 */
	public function editAction(Tx_StudyVisualizer_Domain_Model_Similarity $similarity) {
		$this->view->assign('similarity', $similarity);
	}

	/**
	 * action update
	 *
	 * @param $similarity
	 * @return void
	 */
	public function updateAction(Tx_StudyVisualizer_Domain_Model_Similarity $similarity) {
		$this->similarityRepository->update($similarity);
		$this->flashMessageContainer->add('Your Similarity was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $similarity
	 * @return void
	 */
	public function deleteAction(Tx_StudyVisualizer_Domain_Model_Similarity $similarity) {
		$this->similarityRepository->remove($similarity);
		$this->flashMessageContainer->add('Your Similarity was removed.');
		$this->redirect('list');
	}

}
?>