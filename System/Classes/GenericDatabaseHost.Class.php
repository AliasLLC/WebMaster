<?php

abstract class GenericDatabaseHost implements DatabaseHost{
	
	private $host;
	private $port;
	private $user;
	private $pass;
	private $dbPrefix;
	
	private $connected;

	public function getHost(){
		return $this->host;
	}
	public function getPort(){
		return $this->port;
	}
	public function getUser(){
		return $this->user;
	}
	public function getPass(){
		return $this->pass;
	}
	public function getDatabasePrefix(){
		return $this->dbPrefix;
	}
	
	public function setHost($host){
		$this->host = $host;
	}
	public function setPort($port){
		$this->port = $port;
	}
	public function setUser($user){
		$this->user = $user;
	}
	public function setPass($pass){
		$this->pass = $pass;
	}
	public function setDatabasePrefix($dbPrefix){
		$this->dbPrefix = $dbPrefix;
	}
	
	public function reconnect(){
		if(isConnected()){
			disconnect();
		}
		else{
			connect();
		}
	}
	public function disconnect(){
		$this->connected = false;
	}
	protected function connect(){
		$this->connected = true;
	}
	public function isConnected(){
		return $this->connected;
	}
	
}

?>