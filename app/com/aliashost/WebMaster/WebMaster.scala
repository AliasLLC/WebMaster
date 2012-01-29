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

import java.io.File
import play.Logger
import play.Play

object WebMaster extends Kernel with System {
	private val name : String = "WebMaster Core"
	private val version : String = "0.0.1"
		
	private val configDir : File = Play.getFile("conf")
	private var logger : Logger = null
	
	private var init = false
	
	private var whitelisted : Array[String] = null
	private var whitelist = false
	private val whitelistFile : File = new File(configDir, "whitelist")
	
	private var ops : Array[String] = null
	private val opsFile : File = new File(configDir, "ops")
	
	private var banned : Array[String] = null
	private val bannedFile : File = new File(configDir, "banned")
	
	private var address : String = "*"
	private var port : String = "9000"
	
	private val appFile : File = new File(configDir, "application.conf")
	private val routesFile : File = new File(configDir, "routes")
	private val messagesFile : File = new File(configDir, "messages")
	private val dependenciesFile : File = new File(configDir, "dependencies.yml")
	
	def initialize() : Boolean = {
		if(!init){
			if(!whitelistFile.exists()){
				whitelistFile.createNewFile()
			}
			if(!opsFile.exists()){
				opsFile.createNewFile()
			}
			if(!bannedFile.exists()){
				bannedFile.createNewFile()
			}
			init = true
		}
		return init
	}
	
	override def getName() : String = {
		return name
	}
	override def getVersion() : String = {
		return version
	}
	override def getConfigDirectory() : File = {
		return configDir
	}
	override def getLogger() : Logger = {
		return logger
	}
	override def getIPBans() : Array[String] = {
		return banned
	}
	override def getWhitelistedIPs() : Array[String] = {
		return whitelisted
	}
	override def getOps() : Array[String] = {
		return ops
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
	override def updateWhitelist() : Unit = {
		
	}
	override def setWhitelist( whitelist : Boolean ) : Unit = {
		
	}
	override def isWhitelist() : Boolean = {
		return false
	}
	
	override def bind(address : String, port : String) : Boolean = {
		return false
	}
}