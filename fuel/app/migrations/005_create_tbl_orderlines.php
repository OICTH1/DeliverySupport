<?php

namespace Fuel\Migrations;

class Create_tbl_orderlines
{
	public function up()
	{
		\DBUtil::create_table('tbl_orderlines', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'order_id' => array('constraint' => 12, 'type' => 'varchar'),
			'item_id' => array('constraint' => 3, 'type' => 'varchar'),
			'num' => array('constraint' => 11, 'type' => 'int'),
			'size' => array('constraint' => 1, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('tbl_orderlines');
	}
}