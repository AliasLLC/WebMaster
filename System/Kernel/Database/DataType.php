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
 * Represents a DataType in a database
 * @author Devon R.K. McAvoy <arrorn@dev.myrunelog.com>
 * @since 0.0.1
 * @version 0.0.1
 */
interface DataType
{
	/**
	 * Type constant for DataTypes that are numeric
	 * @var int
	 */
	const NUMERIC = 0;
	/**
	 * Type constant for DataTypes that are strings
	 * @var int
	 */
	const STRING = 1;
	/**
	 * Type constant for DataTypes that are binary objects/strings
	 * @var int
	 */
	const BINARY = 2;
	/**
	 * Type constant for DataTypes that are unicode strings
	 * @var int
	 */
	const UNICODE = 3;
	/**
	 * Type constant for DataTypes that are date/time objects
	 * @var int
	 */
	const DATE = 4;
	/**
	 * Type constant for DataTypes that are of unspecified type
	 * @var int
	 */
	const OTHER = 5;
	
	/**
	 * Returns the name of the DataType
	 * 
	 * @return SplString name of the DataType
	 */
	public function getName();
	
	/**
	 * Returns the type constant of the DataType
	 * 
	 * @return SplInt the type constant of the DataType
	 */
	public function getType();
	
	/**
	 * Returns the regular expression that regulates length, characters, and pattern of the DataType
	 * 
	 * @return SplString the regulating regular expression
	 */
	public function getRegularExpression();
	
	/**
	 * Returns the maximum size in bytes of binary objects or other types that are limited by size
	 * 
	 * A size of 0 is interpreted as no maximum size
	 * 
	 * @return SplInt maximum size in bytes of the type
	 */
	public function getSize();
	
	/**
	 * Returns true if of type NUMERIC and is unsigned, only positive numbers
	 * 
	 * Unsinged types can store larger values than their signed counterparts
	 * 
	 * @return SplBool true if DataType is an unsigned NUMERIC type
	 */
	public function isUnsigned();
}