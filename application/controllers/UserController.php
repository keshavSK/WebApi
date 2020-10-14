<?php

class UserController extends CI_Controller
{

    function signUp()
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $password = $_REQUEST['password'];

        $result = $this->UserModel->signUp($name, $email, $mobile, $password);
        $message = "";
        if (empty($result)) {
            $message = "User registration failed. Please try again";
        } else {
            $message = "User register successfully";
        }

        $response = array(
            'status' => 200,
            'Message' => $message,
            'User' => $result
        );

        echo json_encode($response);
    }
}