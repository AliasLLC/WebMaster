<?php

class GenericColumn implements Column{
	
	private $name;
	private $dataType;
	
	public function GenericColumn($name, $dataType=NULL){
		$this->name = $name;
		$this->dataType = $dataType;
	}
	
	public function setDataType($dataType){
		$this->dataType = $dataType;
	}
	
	public function getDataType(){
		return $this->dataType;
	}
	
	public function getName(){
		return $this->name;
	}

}

?>