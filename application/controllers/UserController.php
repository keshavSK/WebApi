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

    function getUsers()
    {
        $result = $this->UserModel->getUsers();
        $message = "";
        if (empty($result)) {
            $message = "Users not available";
        } else {
            $message = "Users";
        }

        $response = array(
            'status' => 200,
            'Message' => $message,
            'User' => $result
        );

        echo json_encode($response);
    }

    function getUserDetails()
    {
        $userId = $_REQUEST['user_id'];
        $result = $this->UserModel->getUserDetails($userId);
        $message = "";
        if (empty($result)) {
            $message = "User not found";
        } else {
            $message = "User details";
        }

        $response = array(
            'status' => 200,
            'Message' => $message,
            'User' => $result
        );

        echo json_encode($response);
    }

    function deleteUser()
    {
        $userId = $_REQUEST['user_id'];
        $result = $this->UserModel->deleteUser($userId);
        $message = "";
        if (empty($result)) {
            $message = "User not deleted please try again";
        } else {
            $message = "user deleted successfully";
        }
        $response = array(
            'status' => 200,
            'Message' => $message,
            'User' => $result
        );

        echo json_encode($response);
    }

    function updateUserDetails()
    {
        $userId = $_REQUEST['user_id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $password = $_REQUEST['password'];

        $result = $this->UserModel->updateUser($name, $email, $mobile, $password, $userId);
        $message = "";
        if (empty($result)) {
            $message = "User details not updated";
        } else {
            $message = "User details updated";
        }

        $response = array(
            'status' => 200,
            'Message' => $message,
            'User' => $result
        );

        echo json_encode($response);
    }
}