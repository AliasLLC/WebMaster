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
 * Represents a Table in a database
 * @author Devon R.K. McAvoy <arrorn@dev.myrunelog.com>
 * @since 0.0.1
 * @version 0.0.1
 */

interface Table
{
	const UNIQUE = 0;
	const PRIMARY_KEY = 1;
	const FOREIGN_KEY = 2;
	const CHECK = 3;
	
	const ALL = array("*");
	
	public function select(ArrayObject $columns);
	public function getColumn(SplString $name);
	public function getColumns();
	public function setAutoIncrement(SplInt $increment);
	public function addColumn(Column $column);
	public function addConstraint($type, ArrayObject $columns, SplString $name = null, ArrayObject $conditions = null);
	public function dropColumn(Column $column);
	public function dropConstraint(SplString $name);
}