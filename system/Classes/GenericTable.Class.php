<?php

abstract class GenericTable implements Table{

	private $oParent;
	private $oPrimaryKey;

	private $sColumnPrefix;

	public function sGetColumnPrefix(){
		return $this->sColumnPrefix;
	}

	public function setColumnPrefix($sColumnPrefix){
		$this->sColumnPrefix = $sColumnPrefix;
	}

}

?>