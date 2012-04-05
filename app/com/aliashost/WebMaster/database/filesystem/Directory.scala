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
 * In addition, 365 days after any changes are published, you can use the
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
import com.aliashost.WebMaster.observe.Subject
import com.aliashost.WebMaster.WebMaster
import org.spout.api.UnsafeMethod

class Directory(Dir : java.io.File) extends Database with Subject{
	
	private var Parent : Database = null
	private var Databases = new DoubleLinkedList[Database]()
	setName(Dir.getName())
	setObserver(WebMaster)
	
	for(file <- Dir.listFiles()) {
		if( file.isFile() ){
			val tmp = new File(file)
			addTable(tmp)
		}
		else if( file.isDirectory() ){
			val tmp = new Directory(file)
			addDatabase(tmp)
		}
	}
	
	notify()
	
	def this(Dir : String) = this(new java.io.File(Dir))
	
	override def setName(name : String) : Boolean = {
		if( name.trim() == "" ){
			return false
		}
		if(notify()){
			super.setName(name)
			return true
		}
		return false
	}
	
	override def addTable(table : Table) : Boolean = {
		if(table.getName().trim() == "" || !table.isInstanceOf[File]){
			return false
		}
		super.addTable(table)
		notify()
		return true
	}
	
	override def dropTable(table : Table, strict : Boolean = true) : Boolean = {
		val dropped = super.dropTable(table, strict)
		notify()
		return dropped
	}
	
	def addDatabase(dat : Database) : Boolean = {
		if(dat.getName().trim() == "" || !dat.isInstanceOf[Directory]){
			return false
		}
		for(d <- Databases){
			if(d.eq(dat) || d.getName() == getName()){
				return false
			}
		}
		dat.asInstanceOf[Directory].setDatabase(this)
		Databases.+:(dat)
		notify()
		return true
	}
	
	def getDatabase(name : String) : Database = {
		for(dat <- Databases){
			if(dat.getName() == name){
				return dat
			}
		}
		return null
	}
	
	@UnsafeMethod
	def setDatabase( database : Database ) : Boolean = {
		if(database.eq(Parent)){
			return false
		}
		Parent = database
		notify()
		return true
	}
	
	def getDatabases() : Array[Database] = {
		return Databases.toArray
	}
	
	def dropDatabase(dat : Database, strict : Boolean = true) : Boolean = {
		for(d <- Databases){
			if(d.eq(dat) || ( !strict && d.getName() == dat.getName() ) ){
				//I don't know if a for loop increments the list's internal counter if not we'll
				//have to do it manually using next's.
				Databases.remove()
				notify()
				return true
			}
		}
		return false
	}
	
}