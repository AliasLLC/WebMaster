<?php

class MySQLRow extends GenericRow
{
	public function MySQLRow( $cells )
	{
		foreach( $cells as $i => $j )
		{
			if( $i instanceof Column && !($i instanceof MySQLColumn))
			{
				throw new MySQLException( $i->getName() . " is not a MySQLColumn!" );
			}
		}
		parent::_construct( $cells );
	}
}

?>