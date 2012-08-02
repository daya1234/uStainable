<?php

class Profile {

	// private properties
	private $profileID;  // primaryKey
	private $facebookID;
	private $firstName;
	private $lastName;
	private $address;	
	private $suburb;
	private $state;
	private $postcode;
	private $emailAddress;
	private $password;
	private $registrationDate;
	
	// public accessors	
	public function getProfileID() {
		return $this->profileID;
	}
	
	public function setFacebookID($fbid) { 
		$this->facebookID = $fbid; 
	}
	
	public function getFacebookID() { 
		return $this->facebookID;
	}
	
	public function setFirstName($name) {
		$this->firstName = $name;
	}
	
	public function getFirstName() {
		return $this->firstName;
	}
	
	public function setLastName($name) {
		$this->lastName = $name;			
	}
	
	public function getLastName() {
		return $this->lastName;
	}
	
	public function setAddress($add) {
		$this->address = $add;
	}
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setSuburb($sub) {
		$this->suburb = $sub;
	}
	
	public function getSuburb() {
		return $this->suburb;
	}
	
	public function setState($state) {
		$this->state = $state;
	}
	
	public function getState() {
		return $this->state;
	}
	
	public function setPostcode($pos) {
		$this->postcode = $pos;
	}
	
	public function getPostcode() {
		return $this->postcode;
	}
	
	public function setEmailAddress($email) {
		$this->emailAddress = $email;
	}
	
	public function getEmailAddress() {
		return $this->emailAddress;
	}
	
	public function setPassword($pass) {
		$this->password = $pass;
	}
	
	public function getPassword() {
		$return $this->password;
	}
	
	public function setRegistrationDate($reg) {
		$this->registrationDate = $reg;
	}
	
	public function getRegistrationDate() {
		return $this->registrationDate;
	}
	
	// Profile constructor
	public function Profile( $args ) {
		
		$numOfArgs = sizeof($args);
		
		if(isset($args['facebookID'])) {
			$this->setFacebookID = $args['facebookID'];
		}
		
		if(isset($args['firstName'])) {
			$this->setFirstName = $args['firstName'];
		}
		
		if(isset($args['lastName'])) {
			$this->setLastName = $args['lastName'];
		}
		
		if(isset($args['address'])) {
			$this->setAddress = $args['address'];
		}
		
		if(isset($args['suburb'])) {
			$this->setSuburb = $args['suburb'];
		}
		
		if(isset($args['state'])) {
			$this->setState = $args['state'];
		}
		
		if(isset($args['postcode'])) {
			$this->setPostcode = $args['postcode'];
		}
		
		if(isset($args['emailAddress'])) {
			$this->setEmailAddress = $args['emailAddress'];
		}
		
		if(isset($args['password'])) {
			$this->setPassword = $args['password'];
		}
		
		if(isset($args['registrationDate'])) {
			$this->setRegistrationDate = $args['registrationDate'];
		}
				
	}
	
	public function AddToDatabase() {
		/*
			Create a new entry in the database
		*/
	}
	
}

?>
