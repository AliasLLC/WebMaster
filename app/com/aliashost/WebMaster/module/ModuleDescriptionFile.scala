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

package com.aliashost.WebMaster.module

import com.aliashost.WebMaster.exception.InvalidDescriptionFileException
import com.aliashost.WebMaster.module.LoadOrder

class ModuleDescriptionFile(private var name : String, private var version : String, private var main : String){
	
	private var description : String = null
	private var author : String = null
	private var authors : List[String] = null
	private var website : String = null
	private var reload = false
	private var load = LoadOrder.STARTUP
	private var depends : List[String] = null
	private var softdepends : List[String] = null
	private var fullname : String = new StringBuilder().append(name).append(" v").append(version).toString()
	private var protocol : String = null
	
	@throws(classOf[InvalidDescriptionFileException])
	private def load(map : Map[String, Object]) : Unit = {
		
		try{
			name = map.get("name").asInstanceOf[String]
			
			if(!name.matches("^[A-Za-z0-9 _.-]+$")){
				throw new InvalidDescriptionFileException("The field 'name' in module.xml contains invalid characters.")
			}
			
			if(name.toLowerCase().contains("webmaster")){
				throw new InvalidDescriptionFileException(new StringBuilder().append("The plugin '").append(name).append("' has WebMaster in the name. This is not allowed.").toString)
			}
			
		}
		catch{
			case ex : NullPointerException => throw new InvalidDescriptionFileException("The field 'name' is not defined in the module.xml!", ex)
			case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'name' is of the wrong type in the module.xml!", ex)
		}
		
		try{
			
			main = map.get("main").asInstanceOf[String]
			
			if(!isOfficialPlugin(main)){
				if(main.toLowerCase().startsWith("com.aliashost.")){
					throw new InvalidDescriptionFileException("The use of the namespace 'com.aliashost' is not permitted.")
				}
				else if(main.toLowerCase().startsWith("net.aliashost.")){
					throw new InvalidDescriptionFileException("The use of the namespace 'net.aliashost' is not permitted.")
				}
				else if(main.toLowerCase().startsWith("org.aliashost.")){
					throw new InvalidDescriptionFileException("The use of the namespace 'org.aliashost' is not permitted.")
				}
				else if(main.toLowerCase().startsWith("com.amadecia.")){
					throw new InvalidDescriptionFileException("The use of the namespace 'com.amadecia' is not permitted.")
				}
				else if(main.toLowerCase().startsWith("com.arrorn.")){
					throw new InvalidDescriptionFileException("The use of the namespace 'com.arrorn' is not permitted.")
				}
			}
		}
		catch{
			case ex : NullPointerException => throw new InvalidDescriptionFileException("The field 'main' is not defined in the module.xml!", ex)
			case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'main' is of the wrong type in the module.xml!", ex)
		}
		
		try{
			version = map.get("version").toString()
		}
		catch{
			case ex : NullPointerException => throw new InvalidDescriptionFileException("The field 'version' is not defined in the module.xml!", ex)
			case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'version' is of the wrong type in the module.xml!", ex)
		}
		
		fullname = new StringBuilder().append(name).append(" v").append(version).toString()
		
		if(map.contains("author")){
			try{
				author = map.get("author").asInstanceOf[String]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'author' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("authors")){
			try{
				authors = map.get("authors").asInstanceOf[List[String]]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'authors' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("depends")){
			try{
				depends = map.get("depends").asInstanceOf[List[String]]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'depends' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("softdepends")){
			try{
				softdepends = map.get("softdepends").asInstanceOf[List[String]]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'softdepends' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("description")){
			try{
				description = map.get("description").asInstanceOf[String]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'description' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("load")){
			try{
				load = LoadOrder.withName(map.get("description").asInstanceOf[String].toUpperCase())
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'load' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("reload")){
			try{
				reload = map.get("reload").asInstanceOf[Boolean]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'reload' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("website")){
			try{
				website = map.get("website").asInstanceOf[String]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'website' is of the wrong type in the module.xml!", ex)
			}
		}
		
		if(map.contains("protocol")){
			try{
				protocol = map.get("protocol").asInstanceOf[String]
			}
			catch{
				case ex : ClassCastException => throw new InvalidDescriptionFileException("The field 'protocol' is of the wrong type in the module.xml!", ex)
			}
		}	
	}
	
	private def isOfficialPlugin(namespace : String) : Boolean = {
		return false
	}
	
	def getName() : String = {
		return name;
	}

	def getVersion() : String = {
		return version;
	}

	def getDescription() : String = {
		return description;
	}

	def getAuthor() : String = {
		return author;
	}

	def getAuthors() : List[String] = {
		return authors;
	}

	def getWebsite() : String = {
		return website;
	}

	def allowsReload() : Boolean = {
		return reload;
	}

	def getLoad() : LoadOrder = {
		return load;
	}

	def getMain() : String = {
		return main;
	}
	
	def getDepends() : List[String] = {
		return depends;
	}
	
	def getSoftDepends() : List[String] = {
		return softdepends;
	}
	def getFullName() : String = {
		return fullname;
	}
	
	def getProtocol() : String = {
		return protocol;
	}
  
}
