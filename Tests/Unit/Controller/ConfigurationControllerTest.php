<?php
namespace HGA\Hgapeopledb\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 1970 Hans-Georg , HGA
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
 * Test case for class HGA\Hgapeopledb\Controller\ConfigurationController.
 *
 * @author Hans-Georg 
 */
class ConfigurationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \HGA\Hgapeopledb\Controller\ConfigurationController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('HGA\\Hgapeopledb\\Controller\\ConfigurationController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllConfigurationsFromRepositoryAndAssignsThemToView() {

		$allConfigurations = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$configurationRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$configurationRepository->expects($this->once())->method('findAll')->will($this->returnValue($allConfigurations));
		$this->inject($this->subject, 'configurationRepository', $configurationRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('configurations', $allConfigurations);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenConfigurationToView() {
		$configuration = new \HGA\Hgapeopledb\Domain\Model\Configuration();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('configuration', $configuration);

		$this->subject->showAction($configuration);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenConfigurationToView() {
		$configuration = new \HGA\Hgapeopledb\Domain\Model\Configuration();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newConfiguration', $configuration);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($configuration);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenConfigurationToConfigurationRepository() {
		$configuration = new \HGA\Hgapeopledb\Domain\Model\Configuration();

		$configurationRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$configurationRepository->expects($this->once())->method('add')->with($configuration);
		$this->inject($this->subject, 'configurationRepository', $configurationRepository);

		$this->subject->createAction($configuration);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenConfigurationToView() {
		$configuration = new \HGA\Hgapeopledb\Domain\Model\Configuration();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('configuration', $configuration);

		$this->subject->editAction($configuration);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenConfigurationInConfigurationRepository() {
		$configuration = new \HGA\Hgapeopledb\Domain\Model\Configuration();

		$configurationRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$configurationRepository->expects($this->once())->method('update')->with($configuration);
		$this->inject($this->subject, 'configurationRepository', $configurationRepository);

		$this->subject->updateAction($configuration);
	}
}
