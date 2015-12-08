<?php

class Controller_Api extends Controller_Rest
{

	public function get_order($id){

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

	public function post_position(){
		$deliveryman = Model_Deliveryman::find(1);
		$deliveryman->lat = $_POST['lat'];
		$deliveryman->long = $_POST['long'];
		$deliveryman->save();
		return array($_POST['lat'],$_POST['long']);
	}

	public function post_orderstatus($id){
		$order = Model_Order::find($id);
		$order->status = true;
		$order->save();
	}

}
