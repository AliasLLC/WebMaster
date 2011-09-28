<?php

abstract class GenericRow implements Row{
	
	private $iPointer;
	
	public function iGetPointer(){
		return $this->iPointer;
	}
	public function setPointer($iPointer){
		$this->iPointer = $iPointer;
	}
	public function resetPointer(){
		$this->iPointer = 0;
	}
	public function nextPointer(){
		$this->iPointer++;
	}
	public function previousPointer(){
		$this->iPointer--;
	}
	
}

?>