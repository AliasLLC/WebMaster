<?php

/**
 * Represents a boolean constraint on a column or table
 * @author Devon R.K. McAvoy
 *
 */
interface BooleanConstraint extends Constraint{

	/**
	 * Gets whether the constraint is set
	 * @return boolean
	 */
	public function is();
	/**
	 * Sets whether the constraint is set
	 * @param boolean $is
	 */
	public function set($is);

}

?>