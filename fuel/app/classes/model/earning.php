<?php

class Model_Earning extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'member_id',
		'item_id',
		'size',
		'unit_price',
		'num',
		'date',
		'age',
	);


	protected static $_table_name = 'tbl_earning';

}
