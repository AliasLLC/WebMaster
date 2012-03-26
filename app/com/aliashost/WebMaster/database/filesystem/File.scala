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

import scala.collection.mutable.DoubleLinkedList

import com.aliashost.WebMaster.database.Database
import com.aliashost.WebMaster.database.Entry
import com.aliashost.WebMaster.database.Table
import com.aliashost.WebMaster.observe.Subject
import com.aliashost.WebMaster.WebMaster

class File(file : java.io.File) extends Table with Subject{
	
	private var Entries : DoubleLinkedList[Entry] = new DoubleLinkedList[Entry]()
	
	def this(file : String) = this(new java.io.File(file))
	super.setName(file.getName())
	super.setLocked(file.isHidden())
	super.setOwner(file.canRead() && file.canWrite() && file.canExecute())
	super.setRead(file.canRead())
	super.setWrite(file.canWrite())
	setObserver(WebMaster)
	notify()
	
	def getFile() : java.io.File = {
		return file
	}
	
	override def setLocked( locked : Boolean ) : Boolean = {
		if(super.setLocked(locked)){
			if(isLocked()){
				return setName("." + getName())
			}
			return setName(getName().substring(1))
		}
		return false
	}
	
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
	
	override def setDatabase(database : Database) : Boolean = {
		var set = super.setDatabase(database)
		notify()
		return set
	}
	
	override def setOwner(owner : Boolean) : Unit = {
		super.setOwner(owner)
		notify()
	}
	
	override def setRead(read : Boolean) : Unit = {
		super.setRead(read)
		notify()
	}
	
	override def setWrite(write : Boolean) : Unit = {
		super.setWrite(write)
		notify()
	}
	
	def addEntry(entry : Entry) : Boolean = {
		Entries.+:(entry)
		return notify()
	}
	
	def getEntries() : Array[Entry] = {
		return Entries.toArray
	}
	
	def dropEntry(entry : Entry) : Boolean = {
		for(e <- Entries){
			if(e.eq(entry)){
				//I don't know if a for loop increments the list's internal counter if not we'll
				//have to do it manually using next's.
				Entries.remove()
				notify()
				return true
			}
		}
		return false
	}
	
}