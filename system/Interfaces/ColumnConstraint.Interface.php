<?php

interface ColumnConstraint extends Constraint{

	public function oGetColumn();
	public function setColumn($oColumn);

}

?>