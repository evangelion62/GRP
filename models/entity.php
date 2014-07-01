<?php
/*
 * classe abstraite représentant une entité
 * */
abstract class Entity {
	protected  $_id;
	
	//getters
	public function id(){
		return $this->_id;
	}
	
	//setters
	public function setId($id){
		$id = (int) $id;
	
		if ($id > 0){
			$this->_id = $id;
		}
	}
	
	//hydratation
	final public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);
	
			// Si le setter correspondant existe.
			if (method_exists($this, $method))
			{
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}
}