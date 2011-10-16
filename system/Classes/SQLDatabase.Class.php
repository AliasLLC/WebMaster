<?php

abstract class SQLDatabase extends GenericDatabase{
	
	protected function getDropTableQuery($table){
		return "DROP TABLE " . $this->getTablePrefix() . $table->getTableName();
	}
	
	protected function getTruncateTableQuery($table){
		return  "TRUNCATE TABLE " . $this->getTablePrefix() . $table->getTableName();
	}
	
}