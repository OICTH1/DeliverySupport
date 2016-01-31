<?php

class Controller_Api extends Controller_Rest
{
	const DELIVERYID_LIST = 'deliveryid_list';
	public function post_addOrder(){
		$order_id = $_POST['order_id'];
		$deliveryid_list = Session::get(self::DELIVERYID_LIST);
		$deliveryid_list[] = $order_id;
		Session::set(self::DELIVERYID_LIST,$deliveryid_list);
		return $deliveryid_list;
	}

}
