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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_StudyVisualizer_Domain_Model_CourseField.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Study Visualizer
 *
 */
class Tx_StudyVisualizer_Domain_Model_CourseFieldTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_StudyVisualizer_Domain_Model_CourseField
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_StudyVisualizer_Domain_Model_CourseField();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getIspartReturnsInitialValueForObjectStorageContainingTx_StudyVisualizer_Domain_Model_Course() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getIspart()
		);
	}

	/**
	 * @test
	 */
	public function setIspartForObjectStorageContainingTx_StudyVisualizer_Domain_Model_CourseSetsIspart() { 
		$ispart = new Tx_StudyVisualizer_Domain_Model_Course();
		$objectStorageHoldingExactlyOneIspart = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneIspart->attach($ispart);
		$this->fixture->setIspart($objectStorageHoldingExactlyOneIspart);

		$this->assertSame(
			$objectStorageHoldingExactlyOneIspart,
			$this->fixture->getIspart()
		);
	}
	
	/**
	 * @test
	 */
	public function addIspartToObjectStorageHoldingIspart() {
		$ispart = new Tx_StudyVisualizer_Domain_Model_Course();
		$objectStorageHoldingExactlyOneIspart = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneIspart->attach($ispart);
		$this->fixture->addIspart($ispart);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneIspart,
			$this->fixture->getIspart()
		);
	}

	/**
	 * @test
	 */
	public function removeIspartFromObjectStorageHoldingIspart() {
		$ispart = new Tx_StudyVisualizer_Domain_Model_Course();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($ispart);
		$localObjectStorage->detach($ispart);
		$this->fixture->addIspart($ispart);
		$this->fixture->removeIspart($ispart);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getIspart()
		);
	}
	
}
?>