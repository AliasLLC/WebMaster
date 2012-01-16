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
 * @package Kernel
 * @subpackage Module
 * @copyright Alias Host 2012
 */

/**
 * Represents a generic WebMaster Module that can be loaded
 * @author Devon R.K. McAvoy
 * @since 0.0.1
 * @version 0.0.1
 */
class GenericModule implements Module
{
	/**
	 * The name of the module
	 * 
	 * @var SplString
	 */
	private $name;
	
	/**
	 * Files associated with the module to be loaded in order
	 * 
	 * @var SplQueue
	 */
	private $files;
	
	/**
	 * True if the module has been loaded
	 * 
	 * @var SplBool
	 */
	private $loaded;
	
	/**
	 * Default constructor for a module
	 * 
	 * Associates a name and files with the module
	 * 
	 * @param SplString $name Then name of the module
	 * @param SplQueue $files The files names in the order to be loaded as strings or SplStrings
	 */
	public function __construct(SplString $name,  SplQueue $files)
	{
		$this->name = $name;
		$this->files = new SplQueue();
		$files->setIteratorMode(SplQueue::IT_MODE_DELETE);
		$this->loaded = new SplBool(false);
		foreach( $files as $i )
		{
			if(!($i instanceof SplString))
			{
				try
				{
					$i = new SplString($i);
				}
				catch(Exception $e)
				{
					/**
					* @todo Add error to Log queue
					* @todo Throw error
					*/
					return;
				}
			}
			$this->files[] = new SplFileInfo($i);
		}
		/**
		 * @todo Add initialization of module with $name to Log queue
		 */
	}
	
	/**
	 * Named constructor for a module
	 * 
	 * Associates a name and files with the module
	 * 
	 * @param SplString $name Then name of the module
	 * @param SplQueue $files The files names in the order to be loaded as strings or SplStrings
	 */
	public function GenericModule(SplString $name, SplQueue $files)
	{
		$this->__contruct($name, $files);
	}
	
	/**
	 * Logs the destruction of the module
	 */
	public function __destruct()
	{
		/**
		 * @todo Log destruction
		 */
	}
	
	/**
	 * @see Module::getName()
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @see Module::load()
	 */
	public function load()
	{
		$load = new SplBool(true);
		$this->files->setIteratorMode(SplQueue::IT_MODE_KEEP);
		foreach($this->files as $i)
		{
			if(!($i->isFile() && $i->isReadable())){
				$load = false;
				/**
				 * @todo Add error to log queue
				 */
			}
		}
		if($load)
		{
			$this->files->setIteratorMode(SplQueue::IT_MODE_DELETE);
			foreach($this->files as $i)
			{
				require_once($i->getPathname());
			}
			$this->loaded = true;
		}
		return $load;
	}
	
	/**
	 * @see Module::isLoaded()
	 */
	public function isLoaded()
	{
		return $this->loaded;
	}
}

?>