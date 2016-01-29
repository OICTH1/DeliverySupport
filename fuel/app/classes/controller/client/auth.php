<?php

class Controller_Client_Auth extends Controller_Template
{
    public $template = 'template/client';
    const LOGIN = 'login';

    public function action_index(){
        if(isset($_POST['input_staffNo'])){
                $staffNo = $_POST['input_staffNo'];
                if(!empty($staff = Model_Staff::isExist($staffNo))){
                    Session::set(self::LOGIN,$staff->staffno);
                    return Response::redirect('client');
                } else {
                    $this->template->title = 'ログイン';
                    $this->template->content = View::forge('client/login_error');
                }
        } else {
            $this->template->title = 'ログイン';
            $this->template->content = View::forge('client/login');
        }
    }
}
 ?>
