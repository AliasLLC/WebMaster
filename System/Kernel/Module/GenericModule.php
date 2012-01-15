<?php

/**
 * A generic WebMaster Module
 * @author Devon R.K. McAvoy
 * @since 0.0.1
 *
 */
class GenericModule implements Module
{
	/**
	 * The name of the module
	 * @var SplString
	 */
	private $name;
	/**
	 * Files associated with the module to be loaded in order
	 * @var SplQueue
	 */
	private $files;
	
	/**
	 * Default constructor for a module
	 * @param SplString $name Then name of the module
	 * @param SplQueue $files The files names in the order to be loaded as strings or SplStrings
	 */
	public function __construct(SplString $name,  SplQueue $files)
	{
		$this->name = $name;
		$this->files = new SplQueue();
		$files->setIteratorMode(SplQueue::IT_MODE_DELETE);
		foreach( $files as $i )
		{
			if(!($i instanceof SplString))
			{
				try
				{
					$i = new SplString($i);
				}
				catch(Exception $e)
				{
					/**
					* @todo Add error to Log queue
					* @todo Throw error
					*/
					return;
				}
			}
			$this->files[] = new SplFileInfo($i);
		}
	}
	/**
	 * Named constructor for a module
	 * @param SplString $name Then name of the module
	 * @param SplQueue $files The files names in the order to be loaded as strings or SplStrings
	 */
	public function GenericModule(SplString $name, SplQueue $files)
	{
		$this->__contruct($name, $files);
	}
	/**
	 * Default destructor
	 */
	public function __destruct()
	{
		/**
		 * @todo Log destruction
		 */
	}
	/**
	 * @see Module::getName()
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * @see Module::load()
	 */
	public function load()
	{
		$load = true;
		$this->files->setIteratorMode(SplQueue::IT_MODE_KEEP);
		foreach($this->files as $i)
		{
			if(!($i->isFile() && $i->isReadable())){
				$load = false;
				/**
				 * @todo Add error to log queue
				 */
			}
		}
		if($load)
		{
			$this->files->setIteratorMode(SplQueue::IT_MODE_DELETE);
			foreach($this->files as $i)
			{
				require_once($i->getPathname());
			}
		}
		return $load;
	}
}

?>