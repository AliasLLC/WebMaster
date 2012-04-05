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

import java.io.File
import java.util.regex.Pattern

import com.aliashost.WebMaster.exception.InvalidDescriptionFileException
import com.aliashost.WebMaster.exception.InvalidPluginException
import com.aliashost.WebMaster.exception.UnknownDependencyException

trait ModuleLoader {
	
	def getPatterns() : Array[Pattern]
	
	def enableModule(paramModule : Module)
	
	def disableModule(paramModule : Module)
	
	@throws(classOf[InvalidPluginException])
	@throws(classOf[UnknownDependencyException])
	@throws(classOf[InvalidDescriptionFileException])
	def loadModule(paramFile : File)
	
	@throws(classOf[InvalidPluginException])
	@throws(classOf[UnknownDependencyException])
	@throws(classOf[InvalidDescriptionFileException])
	def loadModule(paramFile : File, paramBoolean : Boolean)

}