<?php

class Project {
	
	// private properties
	private $projectID;  // primaryKey
	private $profileID;  // foreignKey
	private $type;
	private $name;
	private $description;
	private $address;
	private $postcode;
	private $state;
	private $tags;
	private $startDate;
	private $endDate;
	private $acts;
	private $rewards;
	private $video;
	private $image;
	
	// public accessors
	public function setProjectID($id) {
		$this->projectID = $id;
	}
	
	public function getProjectID() {
		return $this->projectID;
	}
	
	public function setProfileID($id) {
		$this->profileID = $id;
	}
	
	public function getProfileID() {
		return $this->profileID;
	}
	
	public function setProjectType($type) {
		$this->type = $type;
	}
	
	public function getProjectType() {
		return $this->type;
	}
	
	public function setProjectName($name) {
		$this->name = $name;
	}
	
	public function getProjectName() {
		return $this->name;
	}
	
	public function setProjectDescription($desc) {
		$this->description = $desc;
	}
	
	public function getProjectDescription() {
		return $this->description;
	}
	
	public function setAddress($add) {
		$this->address = $add;
	}
	
	public function getAddress() {
		return $this->address;
	}
	public function setPostcode($pos) {
		$this->postcode = $pos;
	}
	
	public function getPostcode() {
		return $this->postcode;
	}
	
	public function setState($state) {
		$this->state = $state;
	}
	
	public function getState() {
		return $this->state;
	}
	
	public function setTags($tags) {
		$this->tags = $tags;
	}
	
	public function getTags() {
		return $this->tags;
	}
	
	public function setStartDate($date) {
		$this->startDate = $date;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setEndDate($date) {
		$this->endDate = $date;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setActs($acts) {
		$this->acts = $acts;
	}
	
	public function getActs() {
		return $this->acts;
	}
	
	public function setRewards($rewards) {
		$this->rewards = $rewards;
	}
	
	public function getRewards() {
		return $this->rewards;
	}
	
	public function setVideo($vid) {
		$this->video = $vid;
	}
	
	public function getVideo() {
		return $this->vide0;
	}
	
	public function setImage($img) {
		$this->image = $img;
	}
	
	public function getImage() {
		return $this->image;
	}
		
	// Project constructor
	public function Project( $args ) {
	
		$numOfArgs = sizeof($args);
		
		if(isset($args['projectID'])) {
			$this->setProjectID = $args['projectID'];
		}
		
		if(isset($args['profileID'])) {
			$this->setProfileID = $args['profileID'];
		}
		
		if(isset($args['projectType'])) {
			$this->setProjectType = $args['projectType'];
		}
		
		if(isset($args['projectName'])) {
			$this->setProjectName = $args['projectName'];
		}
		
		if(isset($args['projectDescription'])) {
			$this->setProjectDescription = $args['projectDescription'];
		}
		
		if(isset($args['projectAddress'])) {
			$this->setAddress = $args['projectAddress'];
		}
		
		if(isset($args['projectPostcode'])) {
			$this->setPostcode = $args['projectPostcode'];
		}
		
		if(isset($args['projectState'])) {
			$this->setState = $args['projectState'];
		}
		
		if(isset($args['projectTags'])) {
			$this->setTags = $args['projectTags'];
		}
		
		if(isset($args['projectStartDate'])) {
			$this->setStartDate = $args['projectStartDate'];
		}
		
		if(isset($args['projectEndDate'])) {
			$this->setEndDate = $args['projectEndDate'];
		}
			
		if(isset($args['projectActs'])) {
			$this->setActs = $args['projectActs'];
		}
		
		if(isset($args['projectRewards'])) {
			$this->setRewards = $args['projectRewards'];
		}
		
		if(isset($args['projectVideo'])) {
			$this->setVideo = $args['projectVideo'];
		}
		
		if(isset($args['projectImage'])) {
			$this->setImage = $args['projectImage'];
		}
			
	}
	
	public function AddToDatabase() {
		/*
			Create a new entry in the database
		*/
	}
	
}

?>