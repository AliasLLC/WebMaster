package com.aliashost.WebMaster.module

import java.net.URL
import java.net.URLClassLoader
import scala.collection.mutable.HashMap

class CommonClassLoader(private final val loader : CommonModuleLoader, private final val parent : ClassLoader) extends URLClassLoader {
	
	private final val classes : HashMap[String, Class[_]] = new HashMap[String, Class[_]]()
	
	override protected def addURL(url : URL) : Unit = {
		
	}
	
	@throws(classOf[ClassNotFoundException])
	protected def findClass(name : String) : Class[_] = {
		return findClass(name, true)
	}
	
	@throws(classOf[ClassNotFoundException])
	protected def findClass(name : String, checkGlobal : Boolean) : Class[_] = {
		var result : Class[_] = classes.get(name)
		if(result == null){
			if(checkGlobal){
				result = loader
			}
			if(result == null){
				
			}
		}
	}
	
}