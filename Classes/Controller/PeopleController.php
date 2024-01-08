<?php

declare(strict_types=1);

namespace HGA\Hgapeopledb\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Http\ForewardResponse;

use HGA\Hgapeopledb\Domain\Repository\PeopleRepository;
use HGA\Hgapeopledb\Domain\Model\PeopleGroup;
use HGA\Hgapeopledb\Domain\Model\People;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 1970 Hans-Georg <Hans-Georg@althoff-fam.de>, HGA
 *
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
 * PeopleController
 */
class PeopleController extends ActionController {

	//**
	//* peopleRepository
	//* 
	public PeopleRepository|null $peopleRepository = null;

    public function injectPeopleRepository(PeopleRepository $peopleRepository): void
    {
        $this->peopleRepository = $peopleRepository;
    }

	/**
	 * action list
	 * 
	 */
	public function listAction(): ResponseInterface {
		$member = array();
		$peoples = $this->peopleRepository->findAll();
		$num = count($peoples);
		error_log("PeopleController listAction Peoples Num: " . var_export($num, true), 0);
		$pgroup = $this->settings['pgroup'];
		if( strlen($pgroup) == 0){
			$member = $peoples;
		}else{
			$pos = strpos($pgroup,",");
			while($pos){
				$Temp = strstr($pgroup,",");
				$pgroup = strstr($pgroup,",", 1);
				foreach($peoples as $people){
						if(strpos($people->getPeopleGroup(), $Temp)!== FALSE){
							$member[] = $people; 
						}
					$pos = strpos($pgroup,",");
				}
			}
			foreach($peoples as $people){
				if(strpos($people->getPeopleGroup(), $pgroup) !== FALSE){
					$member[] = $people; 
				}
			}
		}
		$temp = array();
		$sel = array();
		$num = count($member);
		$temp[] = $member[0];
		for ($i = 1; $i < $num; ++$i) {
			$num2 = count($temp);
			for ($n = 0; $n < $num2; ++$n) {
				$end = 1;
				if (strncasecmp($temp[$n]->getLastName(), $member[$i]->getLastName(), 3) > 0) {
					$end = 0;
					$temp[] = $temp[$num2 - 1];
					for ($x = $num2 - 1; $x > $n; --$x) {
						$temp[$x] = $temp[$x - 1];
					}
					$temp[$n] = $member[$i];
					break;
				}
			}
			if ($end) {
				$temp[] = $member[$i];
			}
		}
		$this->view->assign('peoples', $temp);
		$this->view->assign('cycles', 2);
		return $this->htmlResponse();
	}

	/**
	 * action show
	 * 
	 */
	public function showAction(\HGA\Hgapeopledb\Domain\Model\People $people): ResponseInterface {
//		error_log($this->settings['pgroup']);
		$num = count($people);
		error_log("PeopleBackendController listAction Peoples Num: " . var_export($num, true), 0);
		$this->view->assign('people', $people);
		return $this->htmlResponse();
	}

	/**
	 * action new
	 * 
	 */
	public function newAction(): ResponseInterface {
		
	}

	/**
	 * action create
	 * 
	 */
	public function createAction(\HGA\Hgapeopledb\Domain\Model\People $newPeople): ResponseInterface {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Type\ContextualFeedbackSeverity::ERROR);
		$this->peopleRepository->add($newPeople);
		return $this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 */
	public function editAction(\HGA\Hgapeopledb\Domain\Model\People $people): ResponseInterface {
		$this->view->assign('people', $people);
		return $this->htmlResponse();
	}

	/**
	 * action update
	 * 
	 */
	public function updateAction(\HGA\Hgapeopledb\Domain\Model\People $people): ResponseInterface {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Type\ContextualFeedbackSeverity::ERROR);
		$this->peopleRepository->update($people);
		return $this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 */
	public function deleteAction(\HGA\Hgapeopledb\Domain\Model\People $people): ResponseInterface {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Type\ContextualFeedbackSeverity::ERROR);
		$this->peopleRepository->remove($people);
		return $this->redirect('list');
	}

	/**
	 * action import
	 * 
	 */
	public function importAction(): ResponseInterface {
		
	}

	/**
	 * action
	 * 
	 */
	public function Action(): ResponseInterface {
		
	}

}