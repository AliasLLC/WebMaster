<?php

/**
 * Represents a Database containing Tables
 * @author Devon R.K. McAvoy
 * @version 0.1.2 10/8/11
 * @since 0.1 9/11/11
 *
 */
interface Database{
	
	/**
	 * Returns the database name
	 * @return string
	 */
	public function getDatabaseName();
	/**
	 * Returns the table prefix
	 * @return string
	 */
	public function getTablePrefix();

	/**
	 * Sets table prefix
	 * @param string $tablePrefix
	 */
	public function setTablePrefix($tablePrefix);

	/**
	 * Adds a table to the database
	 * @param Table $table
	 */
	public function createTable($table);
	/**
	 * Removes a table from the database. Returns dropped table
	 * @param Table $table
	 * @return Table
	 */
	public function dropTable($table);
	/**
	 * Alters a table from the database to have the same structure as another table. Returns unaltered Table
	 * @param Table $table
	 * @return Table
	 */
	public function alterTable($table);
	/**
	 * Deletes the contents of a table without altering the table itself. Returns table with deleted contents
	 * @param Table $table
	 * @return Table
	 */
	public function truncateTable($table);
	/**
	 * Retrieves a table from the database with the same structure
	 * @param Table $table
	 * @return Table
	 */
	public function getTable($table);

}

?>