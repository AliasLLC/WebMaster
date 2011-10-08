<?php

/**
 * Represents a Data type allowed in a Column
 * @author Devon R.K. McAvoy
 *
 */
interface DataType{

	/**
	 * Gets the limit length
	 * @return int
	 */
	public function getLimit();
	/**
	 * Sets the limit length
	 * @param int $len
	 */
	public function setLimit($len);

}

?>