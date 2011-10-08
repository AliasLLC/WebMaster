<?php

/**
 * Represents a Row in a Table containing Cells
 * @author Devon R.K. McAvoy
 *
 */
interface Row{

	/**
	 * Gets the current index of what cell the pointer is at
	 * @return int
	 */
	public function getPointer();
	/**
	 * Sets the pointer
	 * @param int $pointer
	 */
	public function setPointer($pointer);
	/**
	 * Reset the pointer is at to 0
	 */
	public function resetPointer();
	/**
	 * Move the pointer to the next cell
	 */
	public function nextPointer();
	/**
	 * Move the pointer to the previous cell
	 */
	public function previousPointer();
	
	/**
	 * Gets the cell that the pointer currently is on
	 * @return Cell
	 */
	public function getCell();
	/**
	 * Gets the cell at that index
	 * @param int $index
	 * @return Cell
	 */
	public function getCellAt($index);

	/**
	 * Gets the cell at the specific Column
	 * @param Column $column
	 * @return Cell
	 */
	public function getCellIn($column);

}

?>