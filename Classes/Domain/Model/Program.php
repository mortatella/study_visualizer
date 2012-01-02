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
class Tx_StudyVisualizer_Domain_Model_Program extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * graduateswith
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_Graudation
	 */
	protected $graduateswith;

	/**
	 * istypeof
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_ProgramType
	 */
	protected $istypeof;

	/**
	 * consistsof
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course>
	 */
	protected $consistsof;

	/**
	 * programmfield
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_ProgramField
	 */
	protected $programmfield;

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
		$this->consistsof = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the graduateswith
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_Graudation $graduateswith
	 */
	public function getGraduateswith() {
		return $this->graduateswith;
	}

	/**
	 * Sets the graduateswith
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Graudation $graduateswith
	 * @return void
	 */
	public function setGraduateswith(Tx_StudyVisualizer_Domain_Model_Graudation $graduateswith) {
		$this->graduateswith = $graduateswith;
	}

	/**
	 * Returns the istypeof
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_ProgramType $istypeof
	 */
	public function getIstypeof() {
		return $this->istypeof;
	}

	/**
	 * Sets the istypeof
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_ProgramType $istypeof
	 * @return void
	 */
	public function setIstypeof(Tx_StudyVisualizer_Domain_Model_ProgramType $istypeof) {
		$this->istypeof = $istypeof;
	}

	/**
	 * Adds a Course
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Course $consistsof
	 * @return void
	 */
	public function addConsistsof(Tx_StudyVisualizer_Domain_Model_Course $consistsof) {
		$this->consistsof->attach($consistsof);
	}

	/**
	 * Removes a Course
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Course $consistsofToRemove The Course to be removed
	 * @return void
	 */
	public function removeConsistsof(Tx_StudyVisualizer_Domain_Model_Course $consistsofToRemove) {
		$this->consistsof->detach($consistsofToRemove);
	}

	/**
	 * Returns the consistsof
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course> $consistsof
	 */
	public function getConsistsof() {
		return $this->consistsof;
	}

	/**
	 * Sets the consistsof
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_StudyVisualizer_Domain_Model_Course> $consistsof
	 * @return void
	 */
	public function setConsistsof(Tx_Extbase_Persistence_ObjectStorage $consistsof) {
		$this->consistsof = $consistsof;
	}

	/**
	 * Returns the programmfield
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_ProgramField $programmfield
	 */
	public function getProgrammfield() {
		return $this->programmfield;
	}

	/**
	 * Sets the programmfield
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_ProgramField $programmfield
	 * @return void
	 */
	public function setProgrammfield(Tx_StudyVisualizer_Domain_Model_ProgramField $programmfield) {
		$this->programmfield = $programmfield;
	}

}
?>