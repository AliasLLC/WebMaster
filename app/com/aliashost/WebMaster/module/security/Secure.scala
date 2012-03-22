package com.aliashost.WebMaster.module.security

trait Secure {

	def isLocked() : Boolean
	def lock(key : Double) : Boolean
	def unlock(key : Double) : Unit
	
}