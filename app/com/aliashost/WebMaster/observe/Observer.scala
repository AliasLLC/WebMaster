package com.aliashost.WebMaster.observe

trait Observer {
	
	def update( subject : Subject ) : Boolean

}