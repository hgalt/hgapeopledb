<?php

declare(strict_types=1);

namespace HGA\Hgapeopledb\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Http\ForewardResponse;

use HGA\Hgapeopledb\Domain\Repository\PeopleGroupRepository;
use HGA\Hgapeopledb\Domain\Model\PeopleGroup;
use HGA\Hgapeopledb\Domain\Model\People;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Hans-Georg, HGA
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
 * PeopleGroupController
 */
class PeopleGroupController extends ActionController {

	public PeopleGroupRepository|null $peopleGroupRepository = null;
	
    public function injectPeopleGroupRepository(PeopleGroupRepository $peopleGroupRepository): void
    {
        $this->peopleGroupRepository = $peopleGroupRepository;
    }

	/**
	 * action list
	 * 
	 */
	public function listAction() : ResponseInterface  {
		$groups = $this->peopleGroupRepository->findAll();
		$this->view->assign('groups', $groups);
		return $this->htmlResponse();
	}

}