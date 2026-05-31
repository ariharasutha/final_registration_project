<?php

require_once "User.php";

$user = new User();

$id = $_GET['id'];

$row = $user->getUserById($id);

if(isset($_POST['update']))
{
    $user->updateUser(
        $id,
        $_POST['name'],
        $_POST['age'],
        $_POST['mobileno'],
        $_POST['email']
    );

    header("Location:view.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

<input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>

<input type="text" name="mobileno" value="<?php echo $row['mobileno']; ?>"><br><br>

<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<button type="submit" name="update">Update</button>

</form>
</div>