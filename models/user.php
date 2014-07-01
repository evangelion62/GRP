<?php
/*
 * classe entité User 
 */

class User extends Entity{
	//attribus
	private $_userName;
	private $_pwd;
	
	//getters
	public function userName(){
		return $this->_userName;
	}
	
	public function pwd(){
		return $this->_pwd;
	}
	
	//setters
	public function setUserName($userName){
		 $userName = (string) $userName;
		 
		 
	}
	
	public function setPwd($pwd){
	
	}
}
