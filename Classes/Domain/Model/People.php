<?php
namespace HGA\Hgapeopledb\Domain\Model;

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
 * People
 */
class People extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * lastName
	 * 
	 * @var string
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $lastName = '';

	/**
	 * firstName
	 * 
	 * @var string
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $firstName = '';

	/**
	 * title
	 * 
	 * @var string
	 */
	protected $title = '';

	/**
	 * gender
	 * 
	 * @var integer
	 */
	protected $gender = 0;

	/**
	 * image
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * maidenName
	 * 
	 * @var string
	 */
	protected $maidenName = '';

	/**
	 * dead
	 * 
	 * @var boolean
	 */
	protected $dead = FALSE;

	/**
	 * peopleGroup
	 * 
	 * @var string
	 */
	protected $peopleGroup = 0;

	/**
	 * birthDate
	 * 
	 * @var \DateTime
	 */
	protected $birthDate = NULL;

	/**
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';

	/**
	 * nickName
	 * 
	 * @var string
	 */
	protected $nickName = '';

	/**
	 * phone
	 * 
	 * @var string
	 */
	protected $phone = '';

	/**
	 * mobilePhone
	 * 
	 * @var string
	 */
	protected $mobilePhone = '';

	/**
	 * street
	 * 
	 * @var string
	 */
	protected $street = '';

	/**
	 * zip
	 * 
	 * @var integer
	 */
	protected $zip = 0;

	/**
	 * town
	 * 
	 * @var string
	 */
	protected $town = '';

	/**
	 * country
	 * 
	 * @var string
	 */
	protected $country = '';

	/**
	 * info
	 * 
	 * @var string
	 */
	protected $info = '';

	/**
	 * Returns the lastName
	 * 
	 * @return string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 * 
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the firstName
	 * 
	 * @return string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 * 
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the gender
	 * 
	 * @return integer $gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets the gender
	 * 
	 * @param integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the image
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the maidenName
	 * 
	 * @return string $maidenName
	 */
	public function getMaidenName() {
		return $this->maidenName;
	}

	/**
	 * Sets the maidenName
	 * 
	 * @param string $maidenName
	 * @return void
	 */
	public function setMaidenName($maidenName) {
		$this->maidenName = $maidenName;
	}

	/**
	 * Returns the dead
	 * 
	 * @return boolean $dead
	 */
	public function getDead() {
		return $this->dead;
	}

	/**
	 * Sets the dead
	 * 
	 * @param boolean $dead
	 * @return void
	 */
	public function setDead($dead) {
		$this->dead = $dead;
	}

	/**
	 * Returns the boolean state of dead
	 * 
	 * @return boolean
	 */
	public function isDead() {
		return $this->dead;
	}

	/**
	 * Returns the peopleGroup
	 * 
	 * @return integer $peopleGroup
	 */
	public function getPeopleGroup() {
		return $this->peopleGroup;
	}

	/**
	 * Sets the peopleGroup
	 * 
	 * @param integer $peopleGroup
	 * @return void
	 */
	public function setPeopleGroup($peopleGroup) {
		$this->peopleGroup = $peopleGroup;
	}

	/**
	 * Returns the birthDate
	 * 
	 * @return \DateTime $birthDate
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Sets the birthDate
	 * 
	 * @param \DateTime $birthDate
	 * @return void
	 */
	public function setBirthDate(\DateTime $birthDate) {
		$this->birthDate = $birthDate;
	}

	/**
	 * Returns the email
	 * 
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 * 
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the nickName
	 * 
	 * @return string $nickName
	 */
	public function getNickName() {
		return $this->nickName;
	}

	/**
	 * Sets the nickName
	 * 
	 * @param string $nickName
	 * @return void
	 */
	public function setNickName($nickName) {
		$this->nickName = $nickName;
	}

	/**
	 * Returns the phone
	 * 
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 * 
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the mobilePhone
	 * 
	 * @return string $mobilePhone
	 */
	public function getMobilePhone() {
		return $this->mobilePhone;
	}

	/**
	 * Sets the mobilePhone
	 * 
	 * @param string $mobilePhone
	 * @return void
	 */
	public function setMobilePhone($mobilePhone) {
		$this->mobilePhone = $mobilePhone;
	}

	/**
	 * Returns the street
	 * 
	 * @return string $street
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the street
	 * 
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the zip
	 * 
	 * @return integer $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 * 
	 * @param integer $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the town
	 * 
	 * @return string $town
	 */
	public function getTown() {
		return $this->town;
	}

	/**
	 * Sets the town
	 * 
	 * @param string $town
	 * @return void
	 */
	public function setTown($town) {
		$this->town = $town;
	}

	/**
	 * Returns the country
	 * 
	 * @return string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 * 
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Returns the info
	 * 
	 * @return string $info
	 */
	public function getInfo() {
		return $this->info;
	}

	/**
	 * Sets the info
	 * 
	 * @param string $info
	 * @return void
	 */
	public function setInfo($info) {
		$this->info = $info;
	}

}