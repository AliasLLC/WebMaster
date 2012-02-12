package com.aliashost.WebMaster.observe

trait Subject {
	
	var observer : Observer = null
	
	def setObserver( observer : Observer ) = {
		this.observer = observer
	}
	
	def notify() = {
		observer.update(this)
	}

}