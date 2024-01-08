<?php
namespace HGA\Hgapeopledb\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 
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
 * The ViewHelper for Plants
 */
class EchoViewHelper extends AbstractViewHelper  {

  /**
   * Argument Initialization
   *
   */
	public function initializeArguments() {
		parent::initializeArguments();
//		$this->registerArgument('counter','array','The number of characters of the dummy content',true);
//		$this->registerArgument('value','int','The maximum count',true);
		$this->registerArgument('value','array','The maximum count',true);
		$this->registerArgument('text','string','The maximum count',true);
	} 
 
 /**
     * Renders some 
     *
     * @param array $counter The number of characters of the dummy content
     * @param int $value
     * @return int dummy content, cropped after the given number of characters
     * @author Hans-Georg Althoff <hgalt@gmx.net>
     */
    public function render() {
 //		$counter = $this->arguments['counter'];
 		$value = $this->arguments['value'];
 		$text = $this->arguments['text'];
//		$Temp = $counter['cycle'];
//		$Temp = $Temp % $value;
		$Temp = $text . $value['cycle'];
//		error_log($Temp);
		return $Temp;

	}
}