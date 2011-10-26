<?php

/**
 * Represents a Data type allowed in a Column
 * @author Devon R.K. McAvoy
 * @version 0.1.2 10/13/11
 * @since 0.1 9/24/11
 *
 */
interface DataType{

	/**
	 * Gets the limit length
	 * @return int
	 */
	public function getLength();
	
	/**
	 * Gets the PCRE Regular Expression that all values of this datatype are matched against
	 * @return string
	 */
	public function getFormat();
	
	/**
	 * Gets the limiting factor of this datatype:
	 * <ul>
	 * <li>"char" - Number of Characters or Digits
	 * <li>"byte" - Number of Bytes
	 * <li>"regex" - The Regular Expression only
	 * </ul>
	 * @return string
	 */
	public function getLimit();
	
	/**
	 * Gets the name of this datatype
	 * @return string
	 */
	public function getName();
	
	/**
	 * Returns whether the limiting factor is the number characters or digits in a value
	 * @return boolean
	 */
	public function isCharacterLimit();
	
	/**
	 * Returns whether the limiting factor is the number of bytes in a value
	 * @return boolean
	 */
	public function isByteLimit();
	
	/**
	 * Returns whether the limiting factor is the Regular Expression (format) to which the value is compared
	 * @return boolean
	 */
	public function isFormatLimit();
	
	/**
	 * Returns whether the value is valid
	 * @param mixed $val
	 * @return boolean
	 */
	public function isValid($val);
	

}

?>