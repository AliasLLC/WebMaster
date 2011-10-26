<?php

class MySQLColumn extends GenericColumn{

	public function MySQLColumn($name, $dataType=NULL){
		if($dataType == NULL || $dataType instanceof MySQLDataType){
			parent::_construct($name, $dataType);
		}
		else{
			throw new MySQLException($dataType->getName() . " is not a valid MySQL datatype!");
		}
	}
}

?>