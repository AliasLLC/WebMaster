<?php

class GenericCell implements Cell{
	
	private $value;
	private $column;
	
	public function GenericCell($value, $column){
		$this->value = $value;
		$this->column = $column;
	}
	
	public function getValue(){
		return $this->value;
	}
	public function getColumn(){
		return $this->column;
	}
	public function getDataType(){
		return $this->column->getDataType();
	}
	
}

?>