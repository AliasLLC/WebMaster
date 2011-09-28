<?php

interface Row{
	
	public function iGetPointer();
	public function setPointer($iPointer);
	public function resetPointer();
	public function nextPointer();
	public function previousPointer();
	
	public function sGetValue($sColumn);
	
}

?>