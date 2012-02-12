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

import com.aliashost.WebMaster.database.Table
import com.aliashost.WebMaster.database.Database
import scala.collection.mutable.DoubleLinkedList
import com.aliashost.WebMaster.database.Entry

class File(file : java.io.File) extends Table{
	private var entries : DoubleLinkedList[Entry] = null
	
	def this(file : String) = this(new java.io.File(file))
	super.setName(file.getName())
	super.setLocked(file.isHidden())
	super.setOwner(file.canRead() && file.canWrite() && file.canExecute())
	super.setRead(file.canRead())
	super.setWrite(file.canWrite())
	
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
		var tmp : java.io.File = if (file.getParent() != null) new java.io.File(file.getParent() + name) else new java.io.File(name)
		if (tmp.exists()){
			return false
		}
		if(file.renameTo(tmp)){
			super.setName(name)
			return true
		}
		return false
	}
	
}