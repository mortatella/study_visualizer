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
class Tx_StudyVisualizer_Domain_Model_Course extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * ects
	 *
	 * @var float
	 */
	protected $ects;

	/**
	 * sws
	 *
	 * @var float
	 */
	protected $sws;

	/**
	 * typeof
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_CourseType
	 */
	protected $typeof;

	/**
	 * infields
	 *
	 * @var Tx_StudyVisualizer_Domain_Model_CourseField
	 */
	protected $infields;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
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
	 * Returns the ects
	 *
	 * @return float $ects
	 */
	public function getEcts() {
		return $this->ects;
	}

	/**
	 * Sets the ects
	 *
	 * @param float $ects
	 * @return void
	 */
	public function setEcts($ects) {
		$this->ects = $ects;
	}

	/**
	 * Returns the sws
	 *
	 * @return float $sws
	 */
	public function getSws() {
		return $this->sws;
	}

	/**
	 * Sets the sws
	 *
	 * @param float $sws
	 * @return void
	 */
	public function setSws($sws) {
		$this->sws = $sws;
	}

	/**
	 * Returns the typeof
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_CourseType $typeof
	 */
	public function getTypeof() {
		return $this->typeof;
	}

	/**
	 * Sets the typeof
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_CourseType $typeof
	 * @return void
	 */
	public function setTypeof(Tx_StudyVisualizer_Domain_Model_CourseType $typeof) {
		$this->typeof = $typeof;
	}

	/**
	 * Returns the infields
	 *
	 * @return Tx_StudyVisualizer_Domain_Model_CourseField $infields
	 */
	public function getInfields() {
		return $this->infields;
	}

	/**
	 * Sets the infields
	 *
	 * @param Tx_StudyVisualizer_Domain_Model_CourseField $infields
	 * @return void
	 */
	public function setInfields(Tx_StudyVisualizer_Domain_Model_CourseField $infields) {
		$this->infields = $infields;
	}

}
?>