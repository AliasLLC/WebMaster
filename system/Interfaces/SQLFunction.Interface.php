<?php

/**
 * Represents a SQL Function
 * @author Devon R.K. McAvoy
 * @version 0.1.1 10/7/11
 * @since 0.1 9/24/11
 *
 */
interface SQLFunction{
	
	/**
	 * Get the result of the function
	 * @return mixed
	 */
	public function getResult();

}

?>