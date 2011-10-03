<?php

class MySQLDatabase extends GenericDatabase{

	private $oConnection;

	public function MySQLDatabase($sHost, $sPort, $sUser, $sPass, $sDatabaseName){
		$this->setProperties($sHost, $sPort, $sUser, $sPass, $sDatabaseName);
		connect();
	}

	public function MySQLDatabase($sHost, $sPort, $sUser, $sPass, $sDatabaseName, $sTablePrefix){
		$this->setProperties($sHost, $sPort, $sUser, $sPass, $sDatabaseName, $sTablePrefix);
		connect();
	}

	public function __destruct(){
		mysql_close($this->oConnection);
	}

	public function addTable($oTable){

	}

	public function removeTable($oTable){

	}

	public function setTable($oOld, $oNew){

	}

	public function oGetTable($oTable){

	}

	private function connect(){
		$this->oConnection = mysql_connect($this->sGetHost() + ":" + $this->sGetPort(), $this->sGetUser(), $this->sGetPass());
		if(!mysql_select_db($this->sGetDatabaseName(), $this->oConnection) && !mysql_create_db($this->sGetDatabaseName(), $this->oConnection)){
			throw new ErrorException("Cannot select or create a database with a name of " + $this->sGetDatabaseName());
		}
	}

}

?>