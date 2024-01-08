<?php

namespace HGA\Hgapeopledb\Tests\Unit\Domain\Model;

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
 * Test case for class \HGA\Hgapeopledb\Domain\Model\People.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Hans-Georg <Hans-Georg@althoff-fam.de>
 */
class PeopleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \HGA\Hgapeopledb\Domain\Model\People
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \HGA\Hgapeopledb\Domain\Model\People();
	}

	public function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLastName()
		);
	}

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() {
		$this->subject->setLastName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFirstName()
		);
	}

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() {
		$this->subject->setFirstName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForIntegerSetsGender() {
		$this->subject->setGender(12);

		$this->assertAttributeEquals(
			12,
			'gender',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMaidenNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMaidenName()
		);
	}

	/**
	 * @test
	 */
	public function setMaidenNameForStringSetsMaidenName() {
		$this->subject->setMaidenName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'maidenName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDeadReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getDead()
		);
	}

	/**
	 * @test
	 */
	public function setDeadForBooleanSetsDead() {
		$this->subject->setDead(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'dead',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPeopleGroupReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPeopleGroup()
		);
	}

	/**
	 * @test
	 */
	public function setPeopleGroupForIntegerSetsPeopleGroup() {
		$this->subject->setPeopleGroup(12);

		$this->assertAttributeEquals(
			12,
			'peopleGroup',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBirthDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getBirthDate()
		);
	}

	/**
	 * @test
	 */
	public function setBirthDateForDateTimeSetsBirthDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setBirthDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'birthDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNickNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNickName()
		);
	}

	/**
	 * @test
	 */
	public function setNickNameForStringSetsNickName() {
		$this->subject->setNickName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nickName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMobilePhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMobilePhone()
		);
	}

	/**
	 * @test
	 */
	public function setMobilePhoneForStringSetsMobilePhone() {
		$this->subject->setMobilePhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mobilePhone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() {
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getZip()
		);
	}

	/**
	 * @test
	 */
	public function setZipForIntegerSetsZip() {
		$this->subject->setZip(12);

		$this->assertAttributeEquals(
			12,
			'zip',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTownReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTown()
		);
	}

	/**
	 * @test
	 */
	public function setTownForStringSetsTown() {
		$this->subject->setTown('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'town',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() {
		$this->subject->setCountry('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'country',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInfoReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getInfo()
		);
	}

	/**
	 * @test
	 */
	public function setInfoForStringSetsInfo() {
		$this->subject->setInfo('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'info',
			$this->subject
		);
	}
}
