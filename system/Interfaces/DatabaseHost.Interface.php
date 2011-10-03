<?php

/**
 * Represents a Database server or host
 * @author Devon R.K. McAvoy
 * 
 */
interface DatabaseHost{

	/**
	 * Retruns the database host
	 * @return string
	 */
	public function getHost();
	/**
	 * Returns the database port
	 * @return string
	 */
	public function getPort();
	/**
	 * Returns the database username
	 * @return string
	 */
	public function getUser();
	/**
	 * Returns the database password
	 * @return string
	 */
	public function getPass();
	
	/**
	 * Sets database host
	 * @param string $host
	 */
	public function setHost($host);
	/**
	 * Sets database port
	 * @param string $port
	 */
	public function setPort($port);
	/**
	 * Sets database user
	 * @param string $user
	 */
	public function setUser($user);
	/**
	 * Sets database pass
	 * @param string $pass
	 */
	public function setPass($pass);
	
	/**
	 * Creates a Database
	 * @param Database $database
	 */
	public function createDatabase($database);
	/**
	 * Deletes/Drops a Database
	 * @param Database $database
	 */
	public function dropDatabase($database);
	/**
	 * Selects and returns a Database 
	 * @param Database $database
	 * @return Database
	 */
	public function selectDatabase($database);
}