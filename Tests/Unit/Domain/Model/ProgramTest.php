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
 * Test case for class Tx_StudyVisualizer_Domain_Model_Program.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Study Visualizer
 *
 */
class Tx_StudyVisualizer_Domain_Model_ProgramTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_StudyVisualizer_Domain_Model_Program
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_StudyVisualizer_Domain_Model_Program();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getGraduateswithReturnsInitialValueForTx_StudyVisualizer_Domain_Model_Graudation() { }

	/**
	 * @test
	 */
	public function setGraduateswithForTx_StudyVisualizer_Domain_Model_GraudationSetsGraduateswith() { }
	
	/**
	 * @test
	 */
	public function getIstypeofReturnsInitialValueForTx_StudyVisualizer_Domain_Model_ProgramType() { }

	/**
	 * @test
	 */
	public function setIstypeofForTx_StudyVisualizer_Domain_Model_ProgramTypeSetsIstypeof() { }
	
	/**
	 * @test
	 */
	public function getConsistsofReturnsInitialValueForObjectStorageContainingTx_StudyVisualizer_Domain_Model_Course() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getConsistsof()
		);
	}

	/**
	 * @test
	 */
	public function setConsistsofForObjectStorageContainingTx_StudyVisualizer_Domain_Model_CourseSetsConsistsof() { 
		$consistsof = new Tx_StudyVisualizer_Domain_Model_Course();
		$objectStorageHoldingExactlyOneConsistsof = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneConsistsof->attach($consistsof);
		$this->fixture->setConsistsof($objectStorageHoldingExactlyOneConsistsof);

		$this->assertSame(
			$objectStorageHoldingExactlyOneConsistsof,
			$this->fixture->getConsistsof()
		);
	}
	
	/**
	 * @test
	 */
	public function addConsistsofToObjectStorageHoldingConsistsof() {
		$consistsof = new Tx_StudyVisualizer_Domain_Model_Course();
		$objectStorageHoldingExactlyOneConsistsof = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneConsistsof->attach($consistsof);
		$this->fixture->addConsistsof($consistsof);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneConsistsof,
			$this->fixture->getConsistsof()
		);
	}

	/**
	 * @test
	 */
	public function removeConsistsofFromObjectStorageHoldingConsistsof() {
		$consistsof = new Tx_StudyVisualizer_Domain_Model_Course();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($consistsof);
		$localObjectStorage->detach($consistsof);
		$this->fixture->addConsistsof($consistsof);
		$this->fixture->removeConsistsof($consistsof);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getConsistsof()
		);
	}
	
	/**
	 * @test
	 */
	public function getProgrammfieldReturnsInitialValueForTx_StudyVisualizer_Domain_Model_ProgramField() { }

	/**
	 * @test
	 */
	public function setProgrammfieldForTx_StudyVisualizer_Domain_Model_ProgramFieldSetsProgrammfield() { }
	
}
?>