package com.aliashost.WebMaster.module.security

class CommonSecurityManager(private final val key : Double) extends SecurityManager with Secure {
	private var locked : Boolean = false

	def isLocked(): Boolean = {
		return locked
	}

	def lock(key: Double): Boolean = {
		val old = locked
		if(key == this.key){
			locked = true
		}
		return old
	}

	def unlock(key: Double): Unit = {
		if(key == this.key){
			locked = false
		}
	}

}