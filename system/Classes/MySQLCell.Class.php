<?php

class MySQLCell extends GenericCell{
	
	public function MySQLCell($value, $column){
		if($this->getDataType()->isValid($value) && $column instanceof MySQLColumn){
			parent::_construct($value, $column);
		}
		else{
			if($column instanceof MySQLColumn){
				throw new MySQLException("{$column} is not a instance of a MySQLColumn therefore a MySQLCell cannot be assigned to it!");
			}
			else{
				throw new MySQLException("{$value} is an invalid value for the MySQL datatype " . $this->getDataType()->getName() . "!");
			}
		}
	}
	
}

?>