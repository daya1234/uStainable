<?php

class Reward {

	// Private properties
	private $rewardID; // primaryKey
	private $rewardGroup;
	private $rewardName;
	private $rewardUsage;
	
	// Public accessors
	public function setRewardID($id) {
		$this->rewardID = $id;
	}
	
	public function getRewardID() {
		return $this->rewardID;
	}
	
	public function setRewardGroup($group) {
		$this->rewardGroup = $group;
	}
	
	public function getRewardGroup() {
		return $this->rewardGroup;
	}
	
	public function setRewardName($name) {
		$this->rewardName = $name;
	}
	
	public function getRewardName() {
		return $this->rewardName;
	}
	
	public function setRewardUsage($usage) {
		$this->rewardUsage = $usage;
	}
	
	public function getRewardUsage() {
		return $this->rewardUsage;
	}

	public function Reward( $args ) {
		
		$numOfArgs = sizeof($args);
		
		if(isset($args['rewardID'])) {
			$this->setRewardID = $args['rewardID'];
		}
		
		if(isset($args['rewardGroup'])) {
			$this->setRewardGroup = $args['rewardGroup'];
		}
		
		if(isset($args['rewardName'])) {
			$this->setRewardName = $args['rewardName'];
		}
		
		if(isset($args['rewardUsage'])) {
			$this->setRewardUsage = $args['rewardUsage'];
		}
				
	}
	
	public function AddToDatabase() {
		/*
			Create a new entry in the database
		*/
	}
	
	static public function UpdateUsage($rewardID) {
		
		/* 
			1. get the current usage of the rewardID
			2. increase the value ( $usage += 1 );
			3. update the database
		 */
	}
		
}

?>