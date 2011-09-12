<?php

interface Column{
	
	public function setDataType($sDataType);
	public function setLimit($sLimit);
	public function setName($sName);
	
	public function sGetDataType();
	public function sGetLimit();
	public function sGetName();
	
}

?>