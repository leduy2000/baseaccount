<?php

class User extends DB
{
    public function get_users()
    {
        $data = [];
        $users = $this->get_all('User');
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

    public function update_avatar($info)
    {
        $sql = "update user set avatar = '" . $info['avatar'] . "' where ID = '" . $info['ID'] . "'";
        $this->execute($sql);
    }

    public function update($info)
    {
        $sql = "update user set firstName = '" . $info['first_name'] .
            "', lastName = '" . $info['last_name'] . "', position = '" . $info['position'] .
            "', DOB = '" . $info['DOB'] . "', phoneNumber = '" . $info['phone_number'] . "', address = '" . $info['address'] .
            "' where ID = '" . $info['ID'] . "'";
        if ($info['avatar'] != '')
            $this->update_avatar($info);
        $this->execute($sql);
    }

    public function update_password($info)
    {
        $sql = "update user set password = '" . $info['new_password'] . "' where ID = '" . $info['ID'] . "'";
        $res = $this->find_one('user', 'ID', $info['ID']);
        $user = $res->fetch_assoc();
        if ($user['password'] == $info['cur_password']) {
            $this->execute($sql);
            echo 1;
        } else {
            echo 0;
        }
    }
}
