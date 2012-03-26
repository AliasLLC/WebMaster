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

package com.aliashost.WebMaster.module

import com.aliashost.WebMaster.exception.InvalidDescriptionFileException
import scala.xml.Elem
import scala.collection.mutable.Map

class ModuleDescriptionFile(private var map : Map[String, Object]){
	
	private var description : String = null
	private var author : String = null
	private var authors : List[String] = null
	private var website : String = null
	private var reload : Boolean = false
	private var load = LoadOrder.STARTUP
	private var depends : List[String] = null
	private var softdepends : List[String] = null
	private var fullname : String = null
	private var protocol : String = null
	
	load(map)
	
	def this(stream : InputStream) = {
	  this(parse(XML.load(stream)))
	}
	
	def this(name : String, version : String, main : String) = {
	  map = new Map[String, Object]()
	  this(map)
	}
	
	@throws(classOf[InvalidDescriptionFileException])
	private def load(map : Map[String, Object]) : Unit = {
		try{
			name = map.get("name").asInstanceOf[String]
			if(!name.matches("^[A-Za-z0-9 _.-]+$")){
				throw new InvalidDescriptionFileException("The field 'name' in module.xml contains invalid characters.")
			}
		}
	}
	
	private def parse(elem : Elem) : Map[String, Object] = {
	  val map = Map[String, Object]()
	  return map
	}
  
}