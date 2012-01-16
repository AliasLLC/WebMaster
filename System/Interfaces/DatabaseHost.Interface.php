<?php

/**
 * Represents a Database server or host
 * @author Devon R.K. McAvoy
 * @version 0.1 10/8/2011
 * @since 0.1 10/1/2011
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
	 * Returns the database prefix
	 * @return string
	 */
	public function getDatabasePrefix();
	
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
	 * Sets database prefix
	 * @param string $dbPrefix
	 */
	public function setDatabasePrefix($dbPrefix);
	
	/**
	 * Creates a Database
	 * @param Database $database
	 */
	public function createDatabase($database);
	/**
	 * Deletes/Drops a Database and returns the dropped database
	 * @param Database $database
	 * @return Database
	 */
	public function dropDatabase($database);
	/**
	 * Selects and returns a (possibly updated) Database 
	 * @param Database $database
	 * @return Database
	 */
	public function selectDatabase($database);
	/**
	 * Submits all updates to a database to the database host
	 * @param Database $database
	 */
	public function updateDatabase($database);
	
	/**
	 * Reconnects to the specified host
	 */
	public function reconnect();
	/**
	 * Discoonnects from the database host. All returned database operations will return null while disconnected
	 */
	public function disconnect();
	/**
	 * Forces a new connection to the specified host
	 */
	protected function connect();
	/**
	 * Returns whether connected to the Database Host
	 */
	public function isConnected();
}