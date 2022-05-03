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
        $users = $this->user_model->get_all('User');
        $data = ['page' => 'profile'];
        // process data: key->value
        while ($user = $users->fetch_assoc()) {
            $data['users'][$user['ID']] = [
                'full_name' => $user['fullName'],
                'email' => $user['email'],
                'username' => $user['username'],
                'position' => $user['position'],
                'role_id' => $user['roleID'],
                'avatar' => $user['avatar'],
                'DOB' => $user['DOB'],
                'phone_number' => $user['phoneNumber']
            ];
        }
        $this->view('account', $data);
    }

    public function user_logout()
    {
        session_destroy();
        header('location: /baseaccount');
    }
}
