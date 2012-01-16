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
* @subpackage Database
* @copyright Alias Host 2012
*/

/**
 * Represents a Column in a database
 * @author Devon R.K. McAvoy <arrorn@dev.myrunelog.com>
 * @since 0.0.1
 * @version 0.0.1
 */
interface Column
{
	/**
	 * Returns the name of the Column
	 * 
	 * @return SplString name of the Column
	 */
	public function getName();
	
	/**
	 * Returns the DataType of the Column
	 * 
	 * @return DataType DataType of the Column
	 */
	public function getDataType();
	
	/**
	 * Returns the default value of the Column if any
	 * 
	 * @return mixed null if no default value set
	 */
	public function getDefault();
	
	/**
	 * Sets the DataType of the Column to the specified value
	 * 
	 * @param DataType $dataType DataType to set the Column to
	 * 
	 * @return SplBool true on successful alteration of Column
	 */
	public function setDataType(DataType $dataType);
	
	/**
	 * Sets default value of the Column
	 * 
	 * @param mixed $value
	 * 
	 * @return SplBool true if default successfully set to $value
	 */
	public function setDefault($value);
	
	/**
	 * Drops the default value of the Column
	 * 
	 * @return SplBool true if default successfully dropped
	 */
	public function dropDefault();
	
	/**
	 * Returns true when passed a valid value
	 * 
	 * @param mixed $value Value to validate against the DataType and other constraints
	 * 
	 * @return SplBool true when passed a valid value
	 */
	public function isValid($value);
	
	/**
	 * Returns true if Column does not allow NULL values
	 * 
	 * @return SplBool true if Column does not allow NULL values
	 */
	public function notNull();
	
	/**
	 * Returns true if Column is auto-incremented
	 * 
	 * @return SplBool true if Column is auto-incremented
	 */
	public function isAutoIncrement();
}
