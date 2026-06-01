<?php

require_once "User.php";

$user = new User();

$message = "";

if(isset($_POST['submit']))
{
    $name       = trim($_POST['name']);
    $age        = $_POST['age'];
    $mobileno   = trim($_POST['mobileno']);
    $email      = trim($_POST['email']);
    $password   = $_POST['password'];
    $confirmPwd = $_POST['confirm_password'];

    // Name Validation
    if(empty($name))
    {
        $message = "Name is required";
    }
    elseif(!preg_match("/^[a-zA-Z ]+$/", $name))
    {
        $message = "Name should contain only letters";
    }

    // Age Validation
    elseif($age < 18 || $age > 100)
    {
        $message = "Age must be between 18 and 100";
    }

    // Mobile Validation
    elseif(!preg_match("/^[0-9]{10}$/", $mobileno))
    {
        $message = "Please enter a valid 10-digit mobile number";
    }

    // Email Validation
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $message = "Please enter a valid email address";
    }

    // Password Validation
    elseif(strlen($password) < 6)
    {
        $message = "Password must be at least 6 characters";
    }

    // Confirm Password Validation
    elseif($password != $confirmPwd)
    {
        $message = "Password does not match";
    }

    else
    {
        $user->register(
            $name,
            $age,
            $mobileno,
            $email,
            $password
        );

        header("Location: login.php");
        exit();
    }
}
?>
