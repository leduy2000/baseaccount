<?php

class Account extends Controller
{
    public $user_model;

    public function __construct()
    {
        $this->user_model = $this->model('User');
    }

    public function index()
    {
        session_start();
        if (isset($_SESSION['user_id'])) {
            $data = $this->user_model->get_users();
            $data['page'] = 'profile';
            $this->view('account', $data);
        } else {
            header('location: /baseaccount');
        }
        
    }

    public function user_logout()
    {
        session_start();
        session_destroy();
        header('location: /baseaccount');
    }

    //TODO: follow convention!!!!!
    public function user_update(){
        session_start();
        if (isset($_POST['btn_update'])){
            $info = [];
            $info['ID'] = $_SESSION['user_id'];
            //TODO: sanitize request data
            $info['first_name'] = $_POST['firstname'];
            $info['last_name'] = $_POST['lastname'];
            $info['position'] = $_POST['position'];
            $info['avatar'] = $_POST['avatar'];
            $info['phone_number'] = $_POST['phonenumber'];
            $date = $_POST['date'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $info['DOB'] = $year . '-' . $month . '-' . $date;
            $this->user_model->update($info);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function user_change_password() {
        session_start();
        if (isset($_POST['btn_change_password'])) {
            $info = [];
            $info['ID'] = $_SESSION['user_id'];
            $info['new_password'] = $_POST['new_password'];
            $this->user_model->update_password($info);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
