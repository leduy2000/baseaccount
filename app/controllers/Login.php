<?php

require_once 'DataFilter.php';

class Login extends Controller
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
            header('location: /baseaccount/account');
            exit();
        }
        //TODO: convention!! in PHP use double quote, JS single quote
        $this->view('login', ['page' => 'regular']);
    }

    public function guest()
    {
        $this->view('login', ['page' => 'guest']);
    }

    public function recover()
    {
        $this->view('login', ['page' => 'recover']);
    }

    public function user_login()
    {
        if (isset($_POST['email'])) {
            $email = DataFilter::filter_mail($_POST['email']);
            $password = $_POST['password'];
            $user = $this->user_model->find_one('user', 'email', $email);
            if (isset($user)) {
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['ID'];
                    $_SESSION['role_id'] = $user['roleID'];
                    echo 1;
                    exit();
                }
            }
            echo 0;
        }
    }
}
