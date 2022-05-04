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
            $data = $this->get_users();
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

    public function user_update()
    {
        session_start();
        if (isset($_POST['btn_update'])) {
            $info = [];
            $info['ID'] = $_SESSION['user_id'];
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

    public function get_users()
    {
        // process data: key->value
        $data = [];
        $users = $this->user_model->get_all('User');
        while ($user = $users->fetch_assoc()) {
            $data['users'][$user['ID']] = [
                'first_name' => $user['firstName'],
                'last_name' => $user['lastName'],
                'email' => $user['email'],
                'username' => $user['username'],
                'position' => $user['position'],
                'role_id' => $user['roleID'],
                'avatar' => $user['avatar'],
                'DOB' => $user['DOB'],
                'phone_number' => $user['phoneNumber'],
                'address' => $user['address']
            ];
        }
        return $data;
    }
}
