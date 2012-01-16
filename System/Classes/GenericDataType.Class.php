<?php

class GenericDataType implements DataType{
	
	private $name;
	private $len;
	private $format;
	private $lim;
	
	public function GenericDataType($name, $format = "/^.*$/", $lim = "regex", $len = 0){
		$this->format = $format;
		$this->lim = $lim;
		$this->len = $len;
	}
	
	public function getLength(){
		return $this->len;
	}
	
	public function getFormat(){
		return preg_replace("#%L#", $this->len, $this->format);
	}
	
	public function getLimit(){
		return $this->lim;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function isCharacterLimit(){
		switch($lim){
			case "char":
				return true;
			case "byte":
				return false;
			case "regex":
				return false;
			default:
				return false;
		}
	}
	
	public function isByteLimit(){
		switch($lim){
			case "char":
				return false;
			case "byte":
				return true;
			case "regex":
				return false;
			default:
				return false;
		}
	}
	
	
	public function isFormatLimit(){
		switch($lim){
			case "char":
				return false;
			case "byte":
				return false;
			case "regex":
				return true;
			default:
				return false;
		}
	}
	
	public function isValid($val){
		$match = preg_match(preg_replace("#%L#", $this->len, $this->format), (string)$val);
		if($match > 0){
			switch($this->lim){
				case "char":
					return mb_strlen((string)$val) <= $len;
				case "byte":
					return mb_strlen((string)$val, '8bit') <= $len;
				default:
					return true;
			}
		}
		return false;
	}

}

?>