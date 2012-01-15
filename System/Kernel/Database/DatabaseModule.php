<?php
/*
* This file is part of WebMaster (http://github.com/MyRuneLog/WebMaster).
*
* WebMaster is licensed under the Alias license version 1.
*
* WebMaster is free software: you can redistribute it and/or modify
* it under the terms of the GNU Lesser General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* In addition, 360 days after any changes are published, you can use the
* software, incorporating those changes, under the terms of the MIT license,
* as described in the Alias License Version 1.
*
* WebMaster is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public License,
* the MIT license and the Alias license version 1 along with this program.
* If not, see <http://www.gnu.org/licenses/> for the GNU Lesser General Public
* License and see <http://www.aliashost.com/AliasLicenseVersion_1.txt> for the full license,
* including the MIT license.
*/

/**
 * The Database Module in charge of all database interactions
 * @author Devon R.K. McAvoy
 * @since 0.0.1
 */

class DatabaseModule extends GenericModule
{

	/**
	 * Name of the Database Module
	 * 
	 * @var string
	 */
	private $name = "DatabaseModule";
	/**
	 * Version of the Database Module
	 * 
	 * @var string
	 */
	private $version = "0.0.1";
	
	/**
	 * Files to be loaded in order by the Database Module
	 * 
	 * @var array
	 */
	private $files = array(
						"DataType.php"
						);
	
	/**
	 * Default constructor for the Database Module
	 * 
	 * Sets up the Database Module
	 * 
	 * @return
	 */
	public function __construct()
	{
		$queue = new SplQueue();
		foreach($files as $i)
		{
			$queue->enqueue(new SplString($i));
		}
		parent::__construct(new SplString("{$name} {$version}"), $queue);
	}
	
	/**
	 * Named cosntructor for the database Module
	 * 
	 * Sets up the Database Module
	 * 
	 * @return
	 */
	public function DatabaseModule()
	{
		$this->__construct();
	}
	
}