<?php

class Controller_Api extends Controller_Rest
{

	public function get_order($id){
		/*{\"ORDERLINE_ID\":\"1234567890123\","
				+ "\"CUSTOMER_NAME\":\"山田太郎\","
				+ "\"CUSTOMER_TEL\":\"080-xxx-xxx\","
				+ "\"ORDER_LIST\":["
				+ "			{\"ITEM_NAME\":\"aaaa\",\"NUM\":2},"
				+ "			{\"ITEM_NAME\":\"bbbb\",\"NUM\":3}"
				+ "],"
				+ "\"DESTINATION\":\"大阪府大阪市天王寺区上本町6-8-4\"}";*/
		$order = Model_Order::find($id);
		$orderlines = $order->orderline;
		$member = $order->member;
		$result = array(
			'ORDERLINE_ID' => $order->id,
			'CUSTOMER_NAME' => $member->name,
			'CUSTOMER_TEL' => $member->tel,
			'ORDER_LIST' => array(),
			'DESTINATION' => $order->destination,
		);
		foreach ($orderlines as $orderline) {
			$result['ORDER_LIST'][] = array(
				'ITEM_NAME' => $orderline->item->name,
			 	'SIZE' => $orderline->size,
				'NUM' => $orderline->num);
		}

		return $this->response($result);
	}

}
