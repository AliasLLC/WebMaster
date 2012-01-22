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

import com.aliashost.WebMaster.Kernel

abstract class CommonModule extends Module{
	private var description : ModuleDescriptionFile = null
	private var kernel : Kernel = null
	private var enabled : Boolean = false
	//private var template : TemplateFolder
	//private var moduleLoader : CommonModuleLoader
	//private var classLoader : CommonClassLoader

	@UnsafeMethod
	override def onEnable() : Unit

	@UnsafeMethod
	override def onDisable() : Unit

	@UnsafeMethod
	override def onLoad() : Unit = {	
	}

	@UnsafeMethod
	override def onReload() : Unit = {	
	}

	override final def isEnabled() : Boolean = {
		return enabled
	}

	override final def setEnabled(enabled: Boolean) : Unit = {
		this.enabled = enabled
	}

	//override final def getModuleLoader() : ModuleLoader = {
	//	return moduleLoader
	//}

	//override final def getLogger() : Logger = {
	//	return kernel().getLogger()
	//}

	override final def getDescription() : ModuleDescriptionFile = {
		return description
	}

	//override final def getKernel() : Kernel = {
	//	return kernel
	//}

	//final def initialize( modLoader : CommonModuleLoader, kernel : Kernel, desc : ModuleDescriptionFile, template : TemplateFolder, loader : CommonClassLoader) : Unit = {
	//	moduleLoader = modLoader
	//	classLoader = loader
	//	this.kernel = kernel
	//	description = desc
	//	this.template = template
	//}

	//final def getClassLoader() : ClassLoader = {
	//	return classLoader
	//}

	//final def getTemplateFolder() : TemplateFolder = {
	//	return template
	//}

}
