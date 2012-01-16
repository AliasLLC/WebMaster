<?php

/**
 * Represents a boolean constraint on a column or table
 * @author Devon R.K. McAvoy
 * @version 0.1 10/7/11
 * @since 0.1 9/24/11
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