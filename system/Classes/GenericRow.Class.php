<?php

class GenericRow implements Row{
	
	private $pointer;
	private $cells;
	private $unInCells;
	private $len = 1;
	
	public function GenericRow( $cells )
	{
		foreach( $cells as $i => $j )
		{
			if( $i instanceof Column )
			{
				if( $this->cells == null )
				{
					$this->cells = array( );
				}
				$this->cells[ $i ] = $j;
			}
			else
			{
				$this->cells[ $j->getColumn( ) ] = $j;
			}
			$len++;
		}
		foreach( $cells as $i )
		{
			$unInCells[] = $i;
		}
	}
	
	public function getPointer( )
	{
		return $this->pointer;
	}
	
	public function setPointer( $pointer )
	{
		if( $pointer < $this->len )
		{
			$this->pointer = $pointer;
		}
		else
		{
			$this->pointer = $len - 1;
		}
	}		

	public function resetPointer( )
	{
		$this->pointer = 0;
	}
	
	public function nextPointer( )
	{
		if( $this->pointer < $this->len -1 )
		{
			++$this->pointer;
		}
	}
	
	public function previousPointer()
	{
		if( $this->pointer > 0 )
		{
			--$this->pointer;
		}
	}
	
	public function getCell()
	{
		return $this->unInCells[ $this->pointer ];
	}
	
	public function getCellAt( $index )
	{
		return $this->unInCells[ $index ];
	}

	public function getCellIn($column)
	{
		return $this->cells[ $column ];
	}
	
}

?>