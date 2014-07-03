<?php
/*
 * classe abstraite manager
 */


abstract class Manager {
	//attributs
	protected $_db;
	
	//constructeur
	final public function __construct($db){
		$this->setDb($db);
	}
	
	//setters
	final public function setDb(PDO $db){
		$this->_db = $db;
	}
	
	//CRUD
	abstract public function add(Entity $param) {
		
	}
	
	abstract public function get(Entity $param) {
	
	}
	
	abstract public function update(Entity $param) {
	
	}
	
	abstract public function delete (Entity $param) {
	
	}
	
	//gestion de la table
}