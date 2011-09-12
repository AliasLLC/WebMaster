<?php

require_once '';

interface Database{
	
	public function sGetHost();
	public function sGetPort();
	public function sGetUser();
	public function sGetPass();
	public function sGetTablePrefix();
	
	public function setHost($sHost);
	public function setPort($sPort);
	public function setUser($sUser);
	public function setPass($sPass);
	public function setTablePrefix($sTablePrefix);
	
	public function addTable($oTable);
	public function removeTable($oTable);
	public function setTable($oOld, $oNew);
	
}

?>