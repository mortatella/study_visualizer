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
class Tx_StudyVisualizer_Domain_Model_CourseField extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * ispart
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course>
	 */
	protected $ispart;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->ispart = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a Course
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Course $ispart
	 * @return void
	 */
	public function addIspart(Tx_StudyVisualizer_Domain_Model_Course $ispart) {
		$this->ispart->attach($ispart);
	}

	/**
	 * Removes a Course
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Course $ispartToRemove The Course to be removed
	 * @return void
	 */
	public function removeIspart(Tx_StudyVisualizer_Domain_Model_Course $ispartToRemove) {
		$this->ispart->detach($ispartToRemove);
	}

	/**
	 * Returns the ispart
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course> $ispart
	 */
	public function getIspart() {
		return $this->ispart;
	}

	/**
	 * Sets the ispart
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course> $ispart
	 * @return void
	 */
	public function setIspart(Tx_Extbase_Persistence_ObjectStorage $ispart) {
		$this->ispart = $ispart;
	}

}
?>