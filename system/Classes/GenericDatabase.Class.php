<?php

abstract class GenericDatabase implements Database{

	private $sUser;
	private $sPass;
	private $sHost;
	private $sPort;
	private $sDatabaseName;
	private $sTablePrefix;

	public function sGetHost(){
		return $this->sHost;
	}

	public function sGetPort(){
		return $this->sPort;
	}

	public function sGetUser(){
		return $this->sUser;
	}

	public function sGetPass(){
		return $this->sPass;
	}

	public function sGetTablePrefix(){
		return $this->sTablePrefix;
	}

	public function sGetDatabaseName(){
		return $this->sDatabaseName;
	}

	public function setHost($sHost){
		$this->sHost = $sHost;
	}

	public function setPort($sPort){
		$this->sPort = $sPort;
	}

	public function setUser($sUser){
		$this->sUser = $sUser;
	}

	public function setPass($sPass){
		$this->sPass = $sPass;
	}

	public function setDatabaseName($sDatabaseName){
		$this->sDatabaseName = $sDatabaseName;
	}

	public function setTablePrefix($sTablePrefix){
		$this->sTablePrefix = $sTablePrefix;
	}

	private function setProperties($sHost, $sPort, $sUser, $sPass, $sDatabaseName){
		$this->setHost($sHost);
		$this->setPort($sPort);
		$this->setUser($sUser);
		$this->setPass($sPass);
		$this->setDatabaseName($sDatabaseName);
	}

	private function setProperties($sHost, $sPort, $sUser, $sPass, $sDatabaseName, $sTablePrefix){
		$this->setProperties($sHost, $sPort, $sUser, $sPass, $sDatabaseName);
		$this->setTablePrefix($sTablePrefix);
	}

}

?>