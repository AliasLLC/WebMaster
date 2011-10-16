<?php

class MySQLDataType extends GenericDataType{
	
	private $args;
	private $name;
	private $att;
	
	public function MySQLDataType($name, $args, $att = null, $format = "/^.*$/", $lim = "regex", $len = 0){
		$this->name = $name;
		$this->args = $args;
		$this->att = $att;
		parent::GenericDataType($format,$lim,$len);
	}
	
	public function getMySQLQuery(){
		$query = $this->name;
		if (count($this->args) > 1){
			$query .= "(" . implode(",", $args) . ")";
		}
		elseif (count($this->args) = 1){
			$query .= "(" . $args[0] . ")";
		}
		if ($this->att != null){
			$query .= " " . $att;
		}
		return $query;
	}
	
	protected function getArgs(){
		return $this->args;
	}
	
}

?>