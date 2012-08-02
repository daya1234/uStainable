<?php

class Act {

	// Private properties
	private $actID;  // primaryKey
	private $actGroup;
	private $actName;
	private $actUsage;
	
	// Public accessors
	public function setActID($id) {
		$this->actID = $id;
	}
	
	public function getActID() {
		return $this->actID;
	}
	
	public function setActGroup($group) {
		$this->actGroup = $group;
	}
	
	public function getActGroup() {
		return $this->actGroup;
	}
	
	public function setActName($name) {
		$this->actName = $name;
	}
	
	public function getActName() {
		return $this->actName;
	}
	
	public function setActUsage($usage) {
		$this->actUsage = $usage;
	}
	
	public function getActUsage() {
		return $this->actUsage;
	}

	public function Act( $args ) {
		
		$numOfArgs = sizeof($args);
		
		if(isset($args['actID'])) {
			$this->setActID = $args['actID'];
		}
		
		if(isset($args['actGroup'])) {
			$this->setActGroup = $args['actGroup'];
		}
		
		if(isset($args['actName'])) {
			$this->setActName = $args['actName'];
		}
		
		if(isset($args['actUsage'])) {
			$this->setActUsage = $args['actUsage'];
		}
				
	}
	
	public function AddToDatabase() {
		/*
			Create a new entry in the database
		*/
	}
	
	static public function UpdateUsage($actID) {
		
		/* 
			1. get the current usage of the actID
			2. increase the value ( $usage += 1 );
			3. update the database
		 */
	}
		
}

?>