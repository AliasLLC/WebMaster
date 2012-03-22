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

import org.spout.api.UnsafeMethod
import com.aliashost.WebMaster.module.security.CommonSecurityManager
import com.aliashost.WebMaster.Kernel
import scala.collection.mutable.HashMap
import java.util.regex.Pattern

class CommonModuleLoader(protected final val kernel : Kernel, private final val manager : CommonSecurityManager, private final val key : Double) extends ModuleLoader {

	private final val patterns : Array[Pattern] = Array[Pattern] {Pattern.compile("//.jar$")}
	private final var loader : CommonClassLoader = null
	private final val classes : HashMap[String, Class[_]] = new HashMap[String, Class[_]]()
	private final val loaders : HashMap[String, CommonClassLoader] = new HashMap[String, CommonClassLoader]()
	
	def getPatterns() : Array[Pattern] = {
		return patterns
	}
	
	@UnsafeMethod
	def enableModule(paramModule : Module) = {
		synchronized{
			if(!classOf[CommonModule].isAssignableFrom(paramModule.getClass)){
				throw new IllegalArgumentException("Cannot enable module with this ModuleLoader as it is of the wrong type!")
			}
			if(!paramModule.isEnabled){
				val cp = paramModule.asInstanceOf[CommonModule]
				val name = cp.getDescription()
			}
		}
	}
}