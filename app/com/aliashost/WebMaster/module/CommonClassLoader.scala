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

import java.net.URL
import java.net.URLClassLoader
import scala.collection.mutable.HashMap

class CommonClassLoader(private final val loader : CommonModuleLoader, private final val parent : ClassLoader) extends URLClassLoader {
	
	private final val classes : HashMap[String, Class[_]] = new HashMap[String, Class[_]]()
	
	override protected def addURL(url : URL) : Unit = {
		
	}
	
	@throws(classOf[ClassNotFoundException])
	protected def findClass(name : String) : Class[_] = {
		return findClass(name, true)
	}
	
	@throws(classOf[ClassNotFoundException])
	protected def findClass(name : String, checkGlobal : Boolean) : Class[_] = {
		var result : Class[_] = classes.get(name)
		if(result == null){
			if(checkGlobal){
				result = loader
			}
			if(result == null){
				
			}
		}
	}
	
}