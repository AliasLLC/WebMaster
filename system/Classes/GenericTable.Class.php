<?php

class GenericTable implements Table{
	
	private $tableName;
	private $columnPrefix;
	private $numCols;
	private $columns;
	private $numRows;
	private $rows;
	
	public function GenericTable( $tableName, $columnPrefix )
	{
		$this->tableName = $tableName;
		$this->columnPrefix = $columnPrefix;
	}
	
	public function getTableName( )
	{
		return $this->tableName;
	}
	
	public function getColumnPrefix( )
	{
		return $this->columnPrefix;
	}
	
	public function setColumnPrefix( $solumnPrefix )
	{
		$this->columnPrefix = $columnPrefix;
	}
	
	public function addColumn( $col )
	{
		if( !isset( $this->columns ) )
		{
			$this->columns = array( );
		}
		$this->columns[ ] = $col;
		++$this->numCols;
	}
	public function insertColumn( $before, $col )
	{
		$key = array_search($before, $this->columns);
		if( isset($key) )
		{
			for($i = $this->numCols; $i > $key; $i--)
			{
				$this->columns[ $i + 1 ] = $this->columns[ $i ];
			}
			$this->columns[ $key ] = $col;
			++$this->numCols;
		}
	}
	public function dropColumn( $col )
	{
		$key = array_search($col, $this->columns);
		if( isset($key) )
		{
			unset( $this->columns[ $key ] );
			for($i = $key; $i > $this->numCols; $i++)
			{
				$this->columns[ $i ] = $this->columns[ $i + 1 ];
			}
			--$this->numCols;
		}
	}
	public function alterColumn( $col ){
		
	}
	
	public function insertRow( $row );
	public function deleteRow( $row );
	public function updateRow( $row );
	public function selectRow( $row );

}

?>