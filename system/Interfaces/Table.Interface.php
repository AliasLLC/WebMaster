<?php

interface Table{
	
	public function sGetColumnPrefix();
	
	public function setColumnPrefix($sColumnPrefix);
	
	public function addColumn($oCol);
	public function removeColumn($oCol);
	public function setColumn($oOld, $oNew);
	
	public function addRow($oRow);
	public function removeRow($oRow);
	public function setRow($oRow);
	public function oGetRow($oRow);
	
	public function iCount();
	
}

?>