<?php
namespace HGA\Hgapeopledb\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 1970 Hans-Georg <Hans-Georg@althoff-fam.de>, HGA
 *  			
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
 * Test case for class HGA\Hgapeopledb\Controller\PeopleController.
 *
 * @author Hans-Georg <Hans-Georg@althoff-fam.de>
 */
class PeopleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \HGA\Hgapeopledb\Controller\PeopleController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('HGA\\Hgapeopledb\\Controller\\PeopleController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllPeoplesFromRepositoryAndAssignsThemToView() {

		$allPeoples = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$peopleRepository = $this->getMock('HGA\\Hgapeopledb\\Domain\\Repository\\PeopleRepository', array('findAll'), array(), '', FALSE);
		$peopleRepository->expects($this->once())->method('findAll')->will($this->returnValue($allPeoples));
		$this->inject($this->subject, 'peopleRepository', $peopleRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('peoples', $allPeoples);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenPeopleToView() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('people', $people);

		$this->subject->showAction($people);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenPeopleToView() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newPeople', $people);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($people);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenPeopleToPeopleRepository() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$peopleRepository = $this->getMock('HGA\\Hgapeopledb\\Domain\\Repository\\PeopleRepository', array('add'), array(), '', FALSE);
		$peopleRepository->expects($this->once())->method('add')->with($people);
		$this->inject($this->subject, 'peopleRepository', $peopleRepository);

		$this->subject->createAction($people);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenPeopleToView() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('people', $people);

		$this->subject->editAction($people);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenPeopleInPeopleRepository() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$peopleRepository = $this->getMock('HGA\\Hgapeopledb\\Domain\\Repository\\PeopleRepository', array('update'), array(), '', FALSE);
		$peopleRepository->expects($this->once())->method('update')->with($people);
		$this->inject($this->subject, 'peopleRepository', $peopleRepository);

		$this->subject->updateAction($people);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenPeopleFromPeopleRepository() {
		$people = new \HGA\Hgapeopledb\Domain\Model\People();

		$peopleRepository = $this->getMock('HGA\\Hgapeopledb\\Domain\\Repository\\PeopleRepository', array('remove'), array(), '', FALSE);
		$peopleRepository->expects($this->once())->method('remove')->with($people);
		$this->inject($this->subject, 'peopleRepository', $peopleRepository);

		$this->subject->deleteAction($people);
	}
}
