<?php

require_once "Database.php";

class User extends Database
{
    public function register($name,$age,$mobile,$email,$password)
    {
        $sql = "INSERT INTO user(name,age,mobileno,email,password)
                VALUES('$name','$age','$mobile','$email','$password')";

        return $this->conn->query($sql);
    }

    public function login($email,$password)
    {
        $sql = "SELECT * FROM user
                WHERE email='$email' AND password='$password'";

        return $this->conn->query($sql);
    }

    public function getAllUsers()
    {
        return $this->conn->query("SELECT * FROM user");
    }

    public function getUserById($id)
    {
        $result = $this->conn->query("SELECT * FROM user WHERE id=$id");
        return $result->fetch_assoc();
    }

    public function updateUser($id,$name,$age,$mobile,$email)
    {
        $sql = "UPDATE user SET
                name='$name',
                age='$age',
                mobileno='$mobile',
                email='$email'
                WHERE id=$id";

        return $this->conn->query($sql);
    }

    public function deleteUser($id)
    {
        return $this->conn->query("DELETE FROM user WHERE id=$id");
    }
}
?>