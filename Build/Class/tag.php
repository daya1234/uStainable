<?php

class Tag {

	// Private properties
	private $tagID;  // primaryKey
	private $tagGroup;
	private $tagName;
	private $tagUsage;
		
	// Public accessors
	public function setTagID($id) {
		$this->tagID = $id;
	}
	
	public function getTagID() {
		return $this->tagID;
	}
	
	public function setTagGroup($group) {
		$this->tagGroup = $group;
	}
	
	public function getTagGroup() {
		return $this->tagGroup;
	}
	
	public function setTagName($name) {
		$this->tagName = $name;
	}
	
	public function getTagName() {
		return $this->tagName;
	}
	
	public function setTagUsage($usage) {
		$this->tagUsage = $usage;
	}
	
	public function getTagUsage() {
		return $this->tagUsage;
	}

	public function Tag( $args ) {
		
		$numOfArgs = sizeof($args);
		
		if(isset($args['tagID'])) {
			$this->setTagID = $args['tagID'];
		}
		
		if(isset($args['tagGroup'])) {
			$this->setTagGroup = $args['tagGroup'];
		}
		
		if(isset($args['tagName'])) {
			$this->setTagName = $args['tagName'];
		}
		
		if(isset($args['tagUsage'])) {
			$this->setTagUsage = $args['tagUsage'];
		}
		
	}
	
	public function AddToDatabase() {
		/*
			Create a new entry in the database
		*/
	}
	
	static public function UpdateUsage($tagID) {
		/* 
			1. get the current usage of the tagID
			2. increase the value ( $usage += 1 );
			3. update the database
		 */	
	}
	
	
}

?>