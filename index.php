<?php

require_once "User.php";

$user = new User();

$message = "";

if(isset($_POST['submit']))
{
    $mobileno = $_POST['mobileno'];

    if(strlen($mobileno) != 10)
    {
        $message = "Please enter a valid 10-digit mobile number";
    }
    elseif($_POST['password'] != $_POST['confirm_password'])
    {
        $message = "Password does not match";
    }
    else
    {
        $user->register(
            $_POST['name'],
            $_POST['age'],
            $_POST['mobileno'],
            $_POST['email'],
            $_POST['password']
        );

        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registration Form</h2>
<div class="container">
<form method="POST">

<input type="text" name="name" placeholder="Name" required><br><br>

<input type="number" name="age" placeholder="Age" required><br><br>

<input type="text" name="mobileno" placeholder="Mobile" required><br><br>

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<input type="password"
name="confirm_password"
placeholder="Confirm Password"
required><br><br>

<p style="color:red;">
<?php echo $message; ?>
</p>

<button type="submit" name="submit">
Register
</button>

</form>
</div>
<br>

<a href="login.php">Login</a>

</body>
</html>