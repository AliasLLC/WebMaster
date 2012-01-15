<?php

/**
 * Represents a WebMaster Module
 * @author Devon R.K. McAvoy
 * @since 0.0.1
 *
 */
interface Module{
	/**
	 * Get the name of the module
	 * @return SplString
	 */
	public function getName();
	/**
	 * Attempts to load the files associated with the module
	 * @throws Exception
	 * @return SplBool
	 */
	public function load();
}

?>