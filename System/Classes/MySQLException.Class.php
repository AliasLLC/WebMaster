<?php

class MySQLException extends Exception{
	
	public function MySQLException($message = null, $code = 0, $previous = null){
		parent::__construct($message, $code, $previous);
	}
	
	public static function fetchMySQLError($resource = null){
		if(mysql_error($resource) != ""){
			return new MySQLException(mysql_error($resource), mysql_errno($resource));
		}
	}
	
	public static function isMySQLError($resource = null){
		return mysql_error($resource) != "";
	}
	
}

?>