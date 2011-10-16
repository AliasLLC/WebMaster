<?php

/**
 * Represents a constraint on a column or table based on another column
 * @author Devon R.K. McAvoy
 * @version 0.1 10/7/11
 * @since 0.1 9/24/11
 *
 */
interface ColumnConstraint extends Constraint{

	/**
	 * Gets the column that the constrant is based on
	 * @return Column
	 */
	public function getColumn();
	/**
	 * Sets the column that the constraint is based on
	 * @param Column $column
	 */
	public function setColumn($column);

}

?>