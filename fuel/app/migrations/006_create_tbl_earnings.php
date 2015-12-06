<?php

namespace Fuel\Migrations;

class Create_tbl_earnings
{
	public function up()
	{
		\DBUtil::create_table('tbl_earnings', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'member_id' => array('constraint' => 10, 'type' => 'varchar'),
			'item_id' => array('constraint' => 3, 'type' => 'varchar'),
			'size' => array('constraint' => 1, 'type' => 'varchar'),
			'unit_price' => array('constraint' => 11, 'type' => 'int'),
			'num' => array('constraint' => 11, 'type' => 'int'),
			'date' => array('type' => 'datetime'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('tbl_earnings');
	}
}