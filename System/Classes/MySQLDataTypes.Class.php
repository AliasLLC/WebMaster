<?php

class MySQLDataTypes{
	
	private static $format = array(
		"CHAR" => "/^.{%L}$/",
		"VARCHAR" => "/^.{0,%L}$/",
		"TINYTEXT" => "/^.{0,255}$/",
		"TEXT" => "/^.{0,65535}$/",
		"BLOB" => "/^.{0,65535}$/",
		"MEDIUMTEXT" => "/^.*$/",
		"MEDIUMBLOB" => "/^.*$/",
		"LONGTEXT" => "/^.*$/",
		"LONGBLOB" => "/^.*$/",
		"TINYINT" => "/^((\-([0-9]{1,2}|1[0-1][0-9]|12[0-8]))|([0-9]{1,2}|1[0-1][0-9]|12[0-7]))$/",
		"SMALLINT" => "/^((\-([0-9]{1,4}|[1-2][0-9]{4}|3[0-1][0-9]{3}|32[0-6][0-9]{2}|327[0-5][0-9]|3276[0-8]))|([0-9]{1,4}|[1-2][0-9]{4}|3[0-1][0-9]{3}|32[0-6][0-9]{2}|327[0-5][0-9]|3276[0-7]))$/",
		"MEDIUMINT" => "/^((\-([0-9]{1,6}|[1-7][0-9]{6}|8[0-2][0-9]{5}|83[0-7][0-9]{4}|838[1-7][0-9]{3}|8388[1-5][0-9]{2}|838860[0-8]))|([0-9]{1,6}|[1-7][0-9]{6}|8[0-2][0-9]{5}|83[0-7][0-9]{4}|838[1-7][0-9]{3}|8388[1-5][0-9]{2}|838860[0-7]))$/",
		"INT" => "/^((\-([0-9]{1,9}|1[0-9]{9}|20[0-9]{8}|21[0-3][0-9]{7}|214[0-6][0-9]{6}|2147[0-3][0-9]{5}|21474[0-7][0-9]{4}|214748[0-2][0-9]{3}|2147483[0-5][0-9]{2}|21474836[0-3][0-9]|214748364[0-8]))|([0-9]{1,9}|1[0-9]{9}|20[0-9]{8}|21[0-3][0-9]{7}|214[0-6][0-9]{6}|2147[0-3][0-9]{5}|21474[0-7][0-9]{4}|214748[0-2][0-9]{3}|2147483[0-5][0-9]{2}|21474836[0-3][0-9]|214748364[0-7))$/",
		"BIGINT" => "/^((\-([0-9]{1,18}|[0-8][0-9]{18}|9[0-1][0-9]{17}|92[0-1][0-9]{16}|922[0-2][0-9]{15}|9223[0-2][0-9]{14}|92233[0-6][0-9]{13}|922337[0-1][0-9]{12}|92233720[0-2][0-9]{10}|922337203[0-5][0-9]{9}|922337036[0-7][0-9]{8}|9223370368[0-4][0-9]{7}|9223370685[0-3][0-9]{6}|92233706854[0-6][0-9]{5}|922337068547[0-6][0-9]{4}|9223370685477[0-4][0-9]{3}|92233706854775[0-7][0-9]{2}|9223370685477580[0-8]))|([0-9]{1,18}|[0-8][0-9]{18}|9[0-1][0-9]{17}|92[0-1][0-9]{16}|922[0-2][0-9]{15}|9223[0-2][0-9]{14}|92233[0-6][0-9]{13}|922337[0-1][0-9]{12}|92233720[0-2][0-9]{10}|922337203[0-5][0-9]{9}|922337036[0-7][0-9]{8}|9223370368[0-4][0-9]{7}|9223370685[0-3][0-9]{6}|92233706854[0-6][0-9]{5}|922337068547[0-6][0-9]{4}|9223370685477[0-4][0-9]{3}|92233706854775[0-7][0-9]{2}|9223370685477580[0-7]))$/",
		"UTINYINT" => "/^([0-9]{1,2}|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/",
		"USMALLINT" => "/^(0-9]{1,4}|[1-5][0-9]{4}|6[0-4][0-9]{3}|65[0-4][0-9]{2}|655[0-2][0-9]|6553[0-5])$/",
		"UMEDIUMINT" => "/^([0-9]{1,7}|1[0-5][0-9]{6}|16[0-6][0-9]{5}|167[0-6][0-9]{4}|1677[0-6][0-9]{3}|16777[0-1][0-9]{2}|1677720[0-9]|1677721[0-5])$/",
		"UINT" => "/^([0-9]{1,9}|[1-3][0-9]{9}|4[0-1][0-9]{8}|42[0-8][0-9]{7}|429[0-3][0-9]{6}|4294[0-8][0-9]{5}|42949[0-5][0-9]{4}|429496[0-6][0-9]{3}|4294967[0-1][0-9]{2}|42949672[0-8][0-9]|4294956729[0-5])$/",
		"UBIGINT" => "/^([0-9]{1,19}|1[0-7][0-9]{18}|18[0-3][0-9]{17}|184[0-3][0-9]{16}|1844[0-5][0-9]{15}|18446[0-6][0-9]{14}|184467[0-3][0-9]{13}|1844674[0-3][0-9]{12}|184467440[0-6][0-9]{10}|1844674407[0-2][0-9]{9}|18446744073[0-6][0-9]{8}|1844674407370[0-8][0-9]{6}|18446744073709[0-4][0-9]{5}|184467440737095[0-4][0-9]{4}|18446744073709550[0-9]{3}|18446744073709551[0-5][0-9]{2}|1844674407370955160[0-9]|1844674407370955161[0-5])$/",
		"DATE" => "/^([1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$/",
		"DATETIME" => "/^([1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9])$/",
		"TIMESTAMP" => "/^((((19[7-9][1-9]|20[0-2][0-9]|203[0-7])-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) ([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9])|(2038-0[0-1]-0[0-9] 0[0-3]:(0[0-9]|1[0-4]):0[0-7]))|(((19[7-9][1-9]|20[0-2][0-9]|203[0-7])(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([0-1][0-9]|2[0-3])[0-5][0-9][0-5][0-9])|(20380[0-1]0[0-9]0[0-3](0[0-9]|1[0-4])0[0-7]))|((([7-9][1-9]|[0-2][0-9]|3[0-7])(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([0-1][0-9]|2[0-3])[0-5][0-9][0-5][0-9])|(380[0-1]0[0-9]0[0-3](0[0-9]|1[0-4])0[0-7]))|(((19[7-9][1-9]|20[0-2][0-9]|203[0-7])(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1]))|(20380[0-1]0[0-9]))|((([7-9][1-9]|[0-2][0-9]|3[0-7])(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1]))|(380[0-1]0[0-9])))$/",
		"TIME" => "/^((-|)([0-9]{2}|[1-7][0-9]{2}|8[0-2][0-9]|83[0-8]):[0-5][0-9]:[0-5][0-9])$/",
		"YEAR" => "/^((19[0-9][1-9]|20[0-9]{2}|21[0-4][0-9]|215[0-5])|([0-9]{2}))$/"
		);
	
	private static $char;
	private static $varchar;
	private static $tinyText;
	private static $text;
	private static $blob;
	private static $mediumText;
	private static $mediumBlob;
	private static $longText;
	private static $longBlob;
	
	private static $tinyInt;
	private static $smallInt;
	private static $mediumInt;
	private static $int;
	private static $bigInt;
	private static $uTinyInt;
	private static $uSmallInt;
	private static $uMediumInt;
	private static $uInt;
	private static $uBigInt;
	
	private static $date;
	private static $dateTime;
	private static $timeStamp;
	private static $time;
	private static $year;
	
	public static function get($dataType, $args){
		$dataType = strtoupper($dataType);
		switch ($dataType){
			case "CHAR":
				if(count($args) == 0){
					if(!isset(static::$char)){
						static::$char = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 255);
					}
					return static::$char;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "VARCHAR":
				if(count($args) == 0){
					if(!isset(static::$varchar)){
						static::$varchar = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 255);
					}
					return static::$varchar;
				}
				if($args[0] <= 255){
					return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
				}
				if(!isset(static::$text)){
					static::$text = new MySQLDataType("TEXT", array(), null, $format["TEXT"], "char", 65535);
				}
				return static::$text;
			case "TINYTEXT":
				if(!isset(static::$tinyText)){
					static::$tinyText = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 255);
				}
				return static::$tinyText;
			case "TEXT":
				if(!isset(static::$text)){
					static::$text = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 65535);
				}
				return static::$text;
			case "BLOB":
				if(!isset(static::$blob)){
					static::$blob = new MySQLDataType($dataType, array(), null, $format[$dataType], "byte", 65535);
				}
				return static::$blob;
			case "MEDIUMTEXT":
				if(!isset(static::$mediumText)){
					static::$mediumText = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 16777215);
				}
				return static::$mediumText;
			case "MEDIUMBLOB":
				if(!isset(static::$mediumBlob)){
					static::$mediumBlob = new MySQLDataType($dataType, array(), null, $format[$dataType], "byte", 16777215);
				}
				return static::$mediumBlob;
			case "LONGTEXT":
				if(!isset(static::$longText)){
					static::$longText = new MySQLDataType($dataType, array(), null, $format[$dataType], "char", 4294967295);
				}
				return static::$longText;
			case "LONGBlOB":
				if(!isset(static::$longBlob)){
					static::$longBlob = new MySQLDataType($dataType, array(), null, $format[$dataType], "byte", 4294967295);
				}
				return static::$longBlob;
			case "ENUM":
				if(count($args) == 0 || count($args) > 65535){
					return null;
				}
				$f = "/^(";
				$fSub = "";
				for($i = 0; $i < count($args); $i++){
					$fSub .= preg_quote($args[$i]) . "|";
				}
				$f .= substr($fSub, 0, strlen($fSub)-1);
				$f .= ")$/";
				return new MySQLDataType($dataType, $args, null, $f, "regex");
			case "SET":
				if(count($args) > 64 || count($args) == 0){
					return null;
				}
				return new MySQLSetDataType($dataType, $args);
			case "TINYINT":
				if(count($args) == 0){
					if(!isset(static::$tinyInt)){
						static::$tinyInt = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
					}
					return static::$tinyInt;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "SMALLINT":
				if(count($args) == 0){
					if(!isset(static::$smallInt)){
						static::$smallInt = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
					}
					return static::$smallInt;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "MEDIUMINT":
				if(count($args) == 0){
					if(!isset(static::$mediumInt)){
						static::$mediumInt = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
					}
					return static::$mediumInt;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "INT":
				if(count($args) == 0){
					if(!isset(static::$int)){
						static::$int = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
					}
					return static::$int;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "BIGINT":
				if(count($args) == 0){
					if(!isset(static::$bigInt)){
						static::$bigInt = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
					}
					return static::$bigInt;
				}
				return new MySQLDataType($dataType, $args, null, $format[$dataType], "char", $args[0]);
			case "UTINYINT":
				if(count($args) == 0){
					if(!isset(static::$uTinyInt)){
						static::$uTinyInt = new MySQLDataType("TINYINT", array(), null, $format[$dataType], "regex");
					}
					return static::$uTinyInt;
				}
				return new MySQLDataType("TINYINT", $args, "UNSIGNED", $format[$dataType], "char", $args[0]);
			case "USMALLINT":
				if(count($args) == 0){
					if(!isset(static::$uSmallInt)){
						static::$uSmallInt = new MySQLDataType("SMALLINT", array(), null, $format[$dataType], "regex");
					}
					return static::$uSmallInt;
				}
				return new MySQLDataType("SMALLINT", $args, "UNSIGNED", $format[$dataType], "char", $args[0]);
			case "UMEDIUMINT":
				if(count($args) == 0){
					if(!isset(static::$uMediumInt)){
						static::$uMediumInt = new MySQLDataType("MEDIUMINT", array(), null, $format[$dataType], "regex");
					}
					return static::$uMediumInt;
				}
				return new MySQLDataType("MEDIUMINT", $args, "UNSIGNED", $format[$dataType], "char", $args[0]);
			case "UINT":
				if(count($args) == 0){
					if(!isset(static::$uInt)){
						static::$uInt = new MySQLDataType("INT", array(), null, $format[$dataType], "regex");
					}
					return static::$uInt;
				}
				return new MySQLDataType("INT", $args, "UNSIGNED", $format[$dataType], "char", $args[0]);
			case "UBIGINT":
				if(count($args) == 0){
					if(!isset(static::$uBigInt)){
						static::$uBigInt = new MySQLDataType("BIGINT", array(), null, $format[$dataType], "regex");
					}
					return static::$uBigInt;
				}
				return new MySQLDataType("BIGINT", $args, "UNSIGNED", $format[$dataType], "char", $args[0]);
			case "FLOAT":
			case "DOUBLE":
			case "DECIMAL":
				if(count($args) < 2 || $args[0] - $args[1] < 0 || $args[0] == 0 ){
					return null;
				}
				$f = "/^(";
				if ($args[0] - $args[1] > 0){
					$f .= "[0-9]{1," . $args[0] - $args[1] . "}";
				}
				$f .= "\.[0-9]{1," . $args[1] . "})$/";
				return new MySQLDataType($dataType, $args, null, $f, "regex");
			case "DATE":
				if(!isset(static::$date)){
					static::$date = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
				}
				return static::$date;
			case "DATETIME":
				if(!isset(static::$dateTime)){
					static::$dateTime = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
				}
				return static::$dateTime;
			case "TIMESTAMP":
				if(!isset(static::$timeStamp)){
					static::$timeStamp = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
				}
				return static::$timeStamp;
			case "TIME":
				if(!isset(static::$time)){
					static::$time = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
				}
				return static::$time;
			case "YEAR":
				if(!isset(static::$year)){
					static::$year = new MySQLDataType($dataType, array(), null, $format[$dataType], "regex");
				}
				return static::$year;
			default:
		}
	}
	
}

?>