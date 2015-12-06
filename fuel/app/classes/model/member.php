<?php

class Model_Member extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'phonetic',
		'sex',
		'birthday',
		'address',
		'mailaddress',
		'password',
		'tel',
	);


	protected static $_table_name = 'tbl_member';

}
