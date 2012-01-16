<?php

/**
 * Represents a table within a database containing rows and columns
 * @author Devon R.K. McAvoy
 * @version 0.1.2 10/8/11
 * @since 0.1 9/12/11
 *
 */
interface Table{
	
	/**
	 * Gets the tables name
	 * @return string
	 */
	public function getTableName();

	/**
	 * Gets the column prefix in this table
	 * @return string
	 */
	public function getColumnPrefix();

	/**
	 * Sets the column prefix
	 * @param string $solumnPrefix
	 */
	public function setColumnPrefix($solumnPrefix);

	/**
	 * Adds a column
	 * @param Column $col
	 */
	public function addColumn($col);
	
	public function insertColumn($before, $col);
	/**
	 * Deletes the column from the table
	 * @param Column $col
	 */
	public function dropColumn($col);
	/**
	 * Alters the column
	 * @param Column $col
	 */
	public function alterColumn($col);

	/**
	 * Add a Row to the Table
	 * @param Row $row
	 */
	public function insertRow($row);
	/**
	 * Delete a Row from the Table
	 * @param Row $row
	 */
	public function deleteRow($row);
	/**
	 * Update the contents of a Row
	 * @param Table $row
	 * @return Row
	 */
	public function updateRow($row);
	/**
	 * Returns the Row the requested columns
	 * @param Table $row
	 * @return Row
	 */
	public function selectRow($row);

}

?>