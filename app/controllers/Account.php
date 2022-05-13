<?php

require_once 'DataFilter.php';

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
    // use camel case for method name
    // remember ){
    public function user_update()
    {
        session_start();
        if (isset($_POST['firstname'])) {
            $info = [];
            $info['ID'] = $_SESSION['user_id'];
            //TODO: sanitize request data
            $info['first_name'] = DataFilter::filter_str($_POST['firstname']);
            $info['last_name'] = DataFilter::filter_str($_POST['lastname']);
            $info['position'] = DataFilter::filter_str($_POST['position']);
            $info['avatar'] = $this->process_img();
            $info['phone_number'] = DataFilter::filter_str($_POST['phonenumber']);
            $info['address'] = DataFilter::filter_str($_POST['address']);
            $date = $_POST['date'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $info['DOB'] = $year . '-' . $month . '-' . $date;
            $this->user_model->update($info);
        }
    }

    public function user_change_avatar() {
        session_start();
        $info = [];
        $info['avatar'] = $this->process_img();
        $info['ID'] = $_SESSION['user_id'];
        $this->user_model->update_avatar($info);
    }

    public function user_change_password()
    {
        session_start();
        if (isset($_POST['new_password'])) {
            $info = [];
            $info['ID'] = $_SESSION['user_id'];
            $info['new_password'] = $_POST['new_password'];
            $info['cur_password'] = $_POST['cur_password'];
            $this->user_model->update_password($info);
        }
    }


    public function process_img()
    {
        $root = "D:/xampp/htdocs/";
        $target_dir = "/baseaccount/public/asset/img/avatar/";
        $target_file = $target_dir . basename($_FILES['file_upload']['name']);
        $type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (!$type)
            return '';
        if (!getimagesize($_FILES['file_upload']['tmp_name']))
            return '';
        $extensions = ['jpg', 'png', 'jpeg'];
        if (in_array($type, $extensions)) {
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $root . $target_file);
            return $target_file;
        }
        return '';
    }
}
