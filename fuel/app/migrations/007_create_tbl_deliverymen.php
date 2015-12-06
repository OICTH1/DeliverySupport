<?php

namespace Fuel\Migrations;

class Create_tbl_deliverymen
{
	public function up()
	{
		\DBUtil::create_table('tbl_deliverymen', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'long' => array('type' => 'float'),
			'lat' => array('type' => 'float'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('tbl_deliverymen');
	}
}