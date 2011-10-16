<?php

/**
 * Represents a Cell in a Row containing a value
 * @author Devon R.K. McAvoy
 * @version 0.1.1 10/3/2011
 * @since 0.1 9/26/2011
 *
 */
interface Cell{
	
	/**
	 * Gets the value contained in the cell
	 * @return mixed
	 */
	public function getValue();
	/**
	 * Gets the column that the cell is in
	 * @return Column
	 */
	public function getColumn();
	/**
	 * Gets the data type of the column
	 * @return DataType
	 */
	public function getDataType();

}

?>