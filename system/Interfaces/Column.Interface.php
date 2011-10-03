<?php

/**
 * Represents a Column in a Table
 * @author Devon R.K. McAvoy
 *
 */
interface Column{

	/**
	 * Sets the DataType
	 * @param DataType $dataType
	 */
	public function setDataType($dataType);
	/**
	 * Sets the data type limit
	 * @param int $limit
	 */
	public function setLimit($limit);
	/**
	 * Sets the name of the Column
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * Returns the DataType
	 * @return DataType
	 */
	public function getDataType();
	/**
	 * Returns the data type limit
	 * @return int
	 */
	public function getLimit();
	/**
	 * Returns the Name of Column
	 * @return string
	 */
	public function getName();

}

?>