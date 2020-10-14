<?php

class UserModel extends CI_Model
{

    function signUp($name, $email, $mobile, $password)
    {
        $sql = "INSERT INTO users (Name,Mobile,Email,Password) VALUES ('$name','$mobile','$email','$password')";
        $this->db->query($sql);
        return $this->db->insert_id();
    }
    
}