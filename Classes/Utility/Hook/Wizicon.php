<?php

declare(strict_types=1);

namespace HGA\Hgapeopledb\Utility\Hook;


/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Hans-Georg Althoff <Hans-Georg@Althoff-Fam.de>
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
 * ************************************************************* */
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Lang\LanguageService;

/**
 * Class that adds the wizard icon.
 *
 * @author        Tim Lochmueller <webmaster@fruit-lab.de>
 * @package       TYPO3
 * @subpackage    Tx_Html5videoplayer
 */
//class Wizicon {

	/**
	 * Processing the wizard items array
	 *
	 * @param    array $wizardItems : The wizard items
	 *
	 * @return    array Modified array with wizard items
	 */
/*	function proc($wizardItems) {
		$LL = $this->includeLocalLang();
		$wizardItems['plugins_tx_hgapeopledb_pi1'] = array(
			'icon'        => ExtensionManagementUtility::extRelPath('html5videoplayer') . '/Resources/Public/Icons/Wizicon.gif',
			'title'       => $this->getLanguage()
				->getLLL('list_title', $LL),
			'description' => $this->getLanguage()
				->getLLL('list_plus_wiz_description', $LL),
			'params'      => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=html5videoplayer_pivideoplayer'
		);

		return $wizardItems;
	} */
	class Wizicon {

        /**
         * Processing the wizard items array
         *
         * @param array $wizardItems The wizard items
         * @return array Modified array with wizard items
         */
        function proc($wizardItems)     {
                $wizardItems['plugins_hgapeopledb'] = array(
                        'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('hgapeopledb') . 'Resources/Public/Icons/people.gif',
//                        'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('hgapeopledb') . 'Resources/Public/Icons/people.gif',
                        'title' => $GLOBALS['LANG']->sL('HGA People Database'),
                        'description' => $GLOBALS['LANG']->sL('Ermöglicht den Aufbau einer einfachen Personen-Datenbank'),
                        'params' => '&defVals[tt_content][CType]=list&&defVals[tt_content][list_type]=hgapeopledb_hgapeopledb'
                );

                return $wizardItems;
        }
}
	/**
	 * Get language service
	 *
	 * @return LanguageService
	 */
/*	protected function getLanguage() {
		return $GLOBALS['LANG'];
	} */

	/**
	 * Reads the [extDir]/locallang.xml and returns the $LOCAL_LANG array found in that file.
	 *
	 * @return  array   The array with language labels
	 */
/*	function includeLocalLang() {
		$llFile = ExtensionManagementUtility::extPath('html5videoplayer') . '/Resources/Private/Language/locallang.xml';
		/** @var \TYPO3\CMS\Core\Localization\Parser\LocallangXmlParser $parser */
/*		$parser = GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Localization\\Parser\\LocallangXmlParser');
		$LOCAL_LANG = $parser->getParsedData($llFile, $GLOBALS['LANG']->lang);
		return $LOCAL_LANG;
	}*/

//}