<?php

abstract class GenericColumn implements Column{

	private $oParent;
	private $oForeignKey;
	private $oDataType;

	private $sLimit;
	private $sName;

	private $bNotNull;
	private $bUnique;
	private $bPrimaryKey;

	public function setDataType($sDataType){
		$this->sDataType = $sDataType;
	}
	public function setLimit($sLimit){
		$this->sLimit = $sLimit;
	}
	public function setName($sName){
		$this->sName = $sName;
	}

	public function sGetDataType(){
		return $this->sDataType;
	}
	public function sGetLimit(){
		return $this->sLimit;
	}
	public function sGetName(){
		return $this->sName;
	}

	public function iGetLimit(){
		return intval($this->sLimit);
	}

	private function unSupportedDataType($sDataType, $sDatabaseType){
		throw new ErrorException($sDatabaseType + " does not support a datatype of " + $sDataType);
	}

}

?>