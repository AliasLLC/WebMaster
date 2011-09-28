<?php

/**
 * Interface for Databases
 * @author Devon R.K. McAvoy
 *
 */
interface Database{
	
	public function sGetHost();
	public function sGetPort();
	public function sGetUser();
	public function sGetPass();
	public function sGetDatabaseName();
	public function sGetTablePrefix();
	
	public function setHost($sHost);
	public function setPort($sPort);
	public function setUser($sUser);
	public function setPass($sPass);
	public function setDatabaseName($sDatabaseName);
	public function setTablePrefix($sTablePrefix);
	
	public function addTable($oTable);
	public function removeTable($oTable);
	public function setTable($oOld, $oNew);
	public function oGetTable($oTable);
	
}

?>