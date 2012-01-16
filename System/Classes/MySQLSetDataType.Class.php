<?php

class MySQLSetDataType extends MySQLDataType{
	
	public function MySQLSetDataType($name, $args){
		parent::_construct($name, $args);
	}
	
	public function isValid($val){
		$val = (string) $val;
		$val = preg_replace("/,/", "", $val);
		$val = preg_replace("/ /", "", $val);
		$args = parent::getArgs();
		for ($i = 0; $i < count($args); $i++){
			$val = preg_replace("/" . preg_quote($args[$i]) . "/", "", $val);
		}
		if(strlen(trim($val)) > 0){
			return false;
		}
		return true;
	}
	
}

?>