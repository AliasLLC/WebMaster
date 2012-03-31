package com.aliashost.WebMaster.observe

trait Subject {
	
	var observer : Observer = null
	
	def setObserver( observer : Observer ) : Boolean = {
		this.observer = observer
		return true
	}
	
	def notify() : Boolean = {
		return observer.update(this)
	}

}