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

package com.aliashost.WebMaster

import com.aliashost.WebMaster.Kernel
import com.aliashost.WebMaster.System
import java.io.File
import play.Logger

class WebMaster extends Kernel with System {
	override def getName() : String = {
		return null
	}
	override def getIPBans() : Array[String] = {
		return null
	}
	override def ban( address : String ) : Unit = {
		
	}
	override def unban( address : String ) : Boolean = {
		return false
	}
	override def unWhitelist( address : String ) : Boolean = {
		return false
	}
	override def whitelist( address : String ) : Unit = {

	}
	override def getWhitelistedIPs() : Array[String] = {
		return null
	}
	override def updateWhitelist() : Unit = {
		
	}
	override def setWhitelist( whitelist : Boolean ) : Unit = {
		
	}
	override def isWhitelist() : Boolean = {
		return false
	}
	override def getOps() : Array[String] = {
		return null
	}
	override def getVersion() : String = {
		return null
	}
	override def getConfigDirectory() : File = {
		return null
	}
	override def getLogger() : Logger = {
		return null
	}
	override def bind(address : String, port : String) : Boolean = {
		return false
	}
}