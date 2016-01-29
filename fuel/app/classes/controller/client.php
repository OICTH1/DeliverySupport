<?php

class Controller_Client extends Controller_Template
{
    public $template = 'template/client';
    const LOGIN = 'login';
    public function before(){
        parent::before();
        if(empty(Session::get(self::LOGIN))){
            Response::redirect('client/auth');
        }
    }
    public function action_index(){
        $this->template->title = '配達一覧';
        $this->template->content = "";
    }

    public function action_detail($order_id){

    }

    public function action_add(){
        
    }
}
 ?>
