<?php

class UserModel extends CI_Model
{

    function signUp($name, $email, $mobile, $password)
    {
        $sql = "INSERT INTO users (Name,Mobile,Email,Password) VALUES ('$name','$mobile','$email','$password')";
        $this->db->query($sql);
        return $this->db->insert_id();
    }

    function getUsers()
    {
        $sql = "SELECT * FROM `users` ORDER BY UserId DESC";
        $results = $this->db->query($sql)->result_array();
        return $results;
    }

    function getUserDetails($userId)
    {
        $sql = "SELECT * FROM users WHERE UserId = '$userId'";
        $results = $this->db->query($sql)->row_array();
        return $results;
    }

    function deleteUser($userId)
    {
        $sql = "DELETE FROM `users` WHERE UserId = '$userId'";
        $result = $this->db->query($sql);
        return $result;
    }

    function updateUser($name, $email, $mobile, $password, $userId)
    {
        $sql = "UPDATE users SET Name = '$name', Mobile = '$mobile', Email = '$email', Password = '$password' WHERE UserId = '$userId'";
        $result = $this->db->query($sql);
        return $result;
    }
}