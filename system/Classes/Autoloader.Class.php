<?php

class Autoloader{
	
	const sClassPrefix = "";
	const sClassSuffix = "";
	const sClassExtension = ".php";
	
	const sInterfacePrefix = "";
	const sInterfaceSuffix = "";
	const sInterfaceExtension = ".php";
	
	private $sClassPath;
	private $sClassPrefix = "";
	private $sClassSuffix = "";
	private $sClassExtension = ".php";
	
	private $sInterfacePath;
	private $sInterfacePrefix = "";
	private $sInterfaceSuffix = "";
	private $sInterfaceExtension = ".php";
	
	private $bLoadClassesFirst = true;
	
	public function Autoloader($sClassPath, $sInterfacePath){
		$this->sClassPath = $sClassPath;
		$this->sInterfacePath = $sInterfacePath;
	}
	
	public function setLoadClassesFirst($bLoadClassesFirst){
		$this->bLoadClassesFirst = $bLoadClassesFirst;
	}
	
	public function setClassPath($sClassPath){
		$this->sClassPath = $sClassPath;
	}
	
	public function setClassPrefix($sClassPrefix){
		$this->sClassPrefix = $sClassPrefix;
	}
	
	public function setClassSuffix($sClassSuffix){
		$this->sClassSuffix = $sClassSuffix;
	}
	
	public function setClassExtension($sClassExtension){
		$this->sClassExtension = $sClassExtension;
	}
	
	public function removeClassPrefix(){
		$this->sClassPrefix = sClassPrefix;
	}
	
	public function removeClassSuffix(){
		$this->sClassSuffix = sClassSuffix;
	}
	
	public function resetClassExtension(){
		$this->sClassExtension = sClassExtension;
	}
	
	public function setInterfacePath($sInterfacePath){
		$this->sInterfacePath = $sInterfacePath;
	}
	
	public function setInterfacePrefix($sInterfacePrefix){
		$this->sInterfacePrefix = $sInterfacePrefix;
	}
	
	public function setInterfaceSuffix($sInterfaceSuffix){
		$this->sInterfaceSuffix = $sInterfaceSuffix;
	}
	
	public function setInterfaceExtension($sInterfaceExtension){
		$this->sInterfaceExtension = $sInterfaceExtension;
	}
	
	public function removeInterfacePrefix(){
		$this->sInterfacePrefix = sInterfacePrefix;
	}
	
	public function removeInterfaceSuffix(){
		$this->sInterfaceSuffix = sInterfaceSuffix;
	}
	
	public function resetInterfaceExtension(){
		$this->sInterfaceExtension = sInterfaceExtension;
	}
	
	public function autoLoad($sName){
		$sInterface = $this->sInterfacePath + $this->sInterfacePrefix + $sName + $this->sInterfaceSuffix + $sthis->InterfaceExtension;
		$sClass = $this->sClassPath + $this->sClassPrefix + $sName + $this->sClassSuffix + $this->sClassExtension;
		try{
			if($this->bLoadClassesFirst){
				include_once($sClass);
				return;
			}
			else{
				include_once($sInterface);
				return;
			}
		}
		catch(Exception $e){
			if($bLoadClassesFirst){
				include_once($sInterface);
				return;
			}
			else{
				include_once($sClass);
				return;
			}
		}
	}
	
}

?>