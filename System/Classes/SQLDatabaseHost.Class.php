<?php

abstract class SQLDatabaseHost extends GenericDatabaseHost{
	
	protected function getCreateDatabaseQuery($database){
		return "CREATE DATABASE " . $this->getDatabasePrefix() . $database->getDatabaseName();
	}
	
	protected function getDropDatabaseQuery($database){
		return "DROP DATABASE " . $this->getDatabasePrefix() . $database->getDatabaseName();
	}
	
}