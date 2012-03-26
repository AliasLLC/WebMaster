/*
 * This file is part of WebMaster (http://github.com/MyRuneLog/WebMaster).
 *
 * WebMaster is licensed under the Alias License Version 1.
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
 * the MIT license and the Alias License Version 1 along with this program.
 * If not, see <http://www.gnu.org/licenses/> for the GNU Lesser General Public
 * License and see <http://www.aliashost.com/AliasLicenseVersion_1.txt> for the full license,
 * including the MIT license.
 */

package com.aliashost.WebMaster.database
import scala.collection.mutable.DoubleLinkedList

trait Database {
	
	private var Name : String = null 
	
	private var Tables : DoubleLinkedList[Table] = new DoubleLinkedList[Table]
	
	def getName() : String = {
		return Name
	}
	
	def setName(name : String) : Boolean = {
		if(name != "") {
			Name = name
			return true
		}
		return false
	}
	
	def getTables() : Array[Table] = {
		return Tables.toArray
	}
	
	def getTable(name : String) : Table = {
		for(table <- Tables){
			if(table.getName() == name){
				return table
			}
		}
		return null
	}
	
	def addTable(table : Table) : Boolean = {
		for(t <- Tables){
			if(t.eq(table) || t.getName() == table.getName()){
				return false
			}
		}
		table.setDatabase(this)
		Tables.+:(table)
		return true
	}
	
	def dropTable(table : Table, strict : Boolean = true) : Boolean = {
		for(t <- Tables){
			if(t.eq(table) || ( !strict && t.getName() == table.getName() ) ){
				//I don't know if a for loop increments the list's internal counter if not we'll
				//have to do it manually using next's.
				Tables.remove()
				return true
			}
		}
		return false
	}
}