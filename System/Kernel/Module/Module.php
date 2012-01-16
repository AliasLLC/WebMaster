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
 * Represents a WebMaster Module, which may or maynot be loaded
 * @author Devon R.K. McAvoy
 * @since 0.0.1
 * @version 0.0.1
 */
interface Module{
	
	/**
	 * Get the name of the module
	 * 
	 * @return SplString the name of the moudule
	 */
	public function getName();
	
	/**
	 * Attempts to load the files associated with the module
	 * 
	 * Returns true if the module has been loaded successfully
	 * 
	 * @throws Exception on failure to read a file specified for any reason
	 * 
	 * @return SplBool true if the module loaded without any errors
	 */
	public function load();
	
	/**
	 * Returns true if the module has been loaded successfully
	 * 
	 * @return SplBool true if the module has been loaded
	 */
	public function isLoaded();
}

?>