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
class Tx_StudyVisualizer_Domain_Model_Similarity extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * program
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_Program
	 */
	protected $program;

	/**
	 * similarProgram
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_Program
	 */
	protected $similarProgram;

	/**
	 * fromfield
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_CourseField
	 */
	protected $fromfield;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the program
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_Program $program
	 */
	public function getProgram() {
		return $this->program;
	}

	/**
	 * Sets the program
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Program $program
	 * @return void
	 */
	public function setProgram(Tx_StudyVisualizer_Domain_Model_Program $program) {
		$this->program = $program;
	}

	/**
	 * Returns the similarProgram
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_Program $similarProgram
	 */
	public function getSimilarProgram() {
		return $this->similarProgram;
	}

	/**
	 * Sets the similarProgram
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_Program $similarProgram
	 * @return void
	 */
	public function setSimilarProgram(Tx_StudyVisualizer_Domain_Model_Program $similarProgram) {
		$this->similarProgram = $similarProgram;
	}

	/**
	 * Returns the fromfield
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_CourseField $fromfield
	 */
	public function getFromfield() {
		return $this->fromfield;
	}

	/**
	 * Sets the fromfield
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_CourseField $fromfield
	 * @return void
	 */
	public function setFromfield(Tx_StudyVisualizer_Domain_Model_CourseField $fromfield) {
		$this->fromfield = $fromfield;
	}

}
?>