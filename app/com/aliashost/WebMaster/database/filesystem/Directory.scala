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

package com.aliashost.WebMaster.database.filesystem

import com.aliashost.WebMaster.database.Database
import com.aliashost.WebMaster.database.Table
import scala.collection.mutable.DoubleLinkedList

class Direcotry(Dir : java.io.File) extends Database{
	
	private var tables : DoubleLinkedList[Table] = null
	
	for(file <- Dir.listFiles()) {
		var tmp = new File(file)
		if( tables == null ) {
			tables = new DoubleLinkedList[Table]()
		}
		tables.+:(tmp)
	}
	
	def this(Dir : String) = this(new java.io.File(Dir))
	
	override def getName() : String = {
		return Dir.getName();
	}
	override def setName(name : String) : Boolean = {
		if( name.trim() == "" ){
			return false
		}
		var tmp : java.io.File = if (Dir.getParent() != null) new java.io.File(Dir.getParent() + name) else new java.io.File(name)
		if (tmp.exists()){
			return false
		}
		if(Dir.renameTo(tmp)){
			super.setName(name)
			return true
		}
		return false
	}
	override def addTable(table : Table) : Boolean = {
		if(table.getName().trim() == ""){
			return false
		}
		val file : File = table.asInstanceOf[File];
		if(file.getFile().exists()){
			
		}
		return false
	}
	
}