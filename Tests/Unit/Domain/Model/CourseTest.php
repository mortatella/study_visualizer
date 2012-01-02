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
 * Test case for class Tx_StudyVisualizer_Domain_Model_Course.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Study Visualizer
 *
 */
class Tx_StudyVisualizer_Domain_Model_CourseTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_StudyVisualizer_Domain_Model_Course
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_StudyVisualizer_Domain_Model_Course();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
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
	public function getEctsReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getEcts()
		);
	}

	/**
	 * @test
	 */
	public function setEctsForFloatSetsEcts() { 
		$this->fixture->setEcts(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getEcts()
		);
	}
	
	/**
	 * @test
	 */
	public function getSwsReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getSws()
		);
	}

	/**
	 * @test
	 */
	public function setSwsForFloatSetsSws() { 
		$this->fixture->setSws(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getSws()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeofReturnsInitialValueForTx_StudyVisualizer_Domain_Model_CourseType() { }

	/**
	 * @test
	 */
	public function setTypeofForTx_StudyVisualizer_Domain_Model_CourseTypeSetsTypeof() { }
	
	/**
	 * @test
	 */
	public function getInfieldsReturnsInitialValueForTx_StudyVisualizer_Domain_Model_CourseField() { }

	/**
	 * @test
	 */
	public function setInfieldsForTx_StudyVisualizer_Domain_Model_CourseFieldSetsInfields() { }
	
}
?>