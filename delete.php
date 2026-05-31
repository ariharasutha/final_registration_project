<?php

require_once "User.php";

$user = new User();

$id = $_GET['id'];

$user->deleteUser($id);

header("Location:view.php");
exit();
?>