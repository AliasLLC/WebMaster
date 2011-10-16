<?php

/**
 * Represents a Column in a Table
 * @author Devon R.K. McAvoy
 * @version 0.1.2 10/3/11
 * @since 0.1 9/12/11
 *
 */
interface Column{

	/**
	 * Sets the DataType
	 * @param DataType $dataType
	 */
	public function setDataType($dataType);
	/**
	 * Sets the alias of the Column
	 * @param string $alias
	 */
	public function setAlias($alias);

	/**
	 * Returns the DataType
	 * @return DataType
	 */
	public function getDataType();
	/**
	 * Returns the Name of Column
	 * @return string
	 */
	public function getName();

}

?>