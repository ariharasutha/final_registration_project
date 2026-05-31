<?php

session_start();

require_once "User.php";

$user = new User();

if(isset($_POST['login']))
{
    $result = $user->login(
        $_POST['email'],
        $_POST['password']
    );

    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();

        $_SESSION['user'] = $row['name'];

        header("Location: welcome.php");
        exit();
    }
    else
    {
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<div class="container">

<form method="POST">

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button type="submit" name="login">Login</button>
</div>

</form>
</div>
</body>
</html>