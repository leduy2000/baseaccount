<?php

class User extends DB
{
    public function update($info) {
        $sql = "update user set firstName = '".$info['first_name'].
        "', lastName = '".$info['last_name']."', position = '".$info['position']. 
        "', avatar = '".$info['avatar']."', DOB = '".$info['DOB']."', phoneNumber = '".$info['phone_number']."'";
        $this->execute($sql);
    }
}
