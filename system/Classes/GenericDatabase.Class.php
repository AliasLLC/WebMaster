<?php

abstract class GenericDatabase implements Database{
	
	protected $dbName;
	private $tablePrefix;
	
	public function getDatabaseName(){
		return $this->dbName;
	}
	public function getTablePrefix(){
		return $this->tablePrefix;
	}
	public function setTablePrefix($tablePrefix){
		$this->tablePrefix = $tablePrefix;
	}
	
}

?>