<?php

class MySQLDatabaseHost extends SQLDatabaseHost{
	
	private $con;
	
	public function MySQLDatabaseHost($host, $port, $user, $pass, $dbPrefix){
		$this->setHost($host);
		$this->setPort($port);
		$this->setUser($user);
		$this->setPass($pass);
		$this->setDatabasePrefix($dbPrefix);
		$this->connect();
	}
	
	public function createDatabase($database){
		mysql_query($this->getCreateDatabaseQuery($database), $con);
	}
	public function dropDatabase($database){
		mysql_query($this->getDropDatabaseQuery($database), $con);
	}
	public function selectDatabase($database){
		$this->selectMySQLDatabase($database);
	}
	public function updateDatabase($database){
		$this->selectMySQLDatabase($database);
	}
	
	protected function connect(){
		mysql_connect($this->getHost() . ":" . $this->getPort(), $this->getUser(), $this->getPass(), $con);
		parent::connect();
	}
	
	public function disconnect(){
		mysql_close($con);
		parent::disconnect();
	}
	
	private function createMySQLDatabase(){
		
	}
	
	private function selectMySQLDatabase($database){
		mysql_select_db($this->getDatabasePrefix() . $database->getDatabaseName(), $con);
	}
	
}

?>