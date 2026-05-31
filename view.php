<?php

require_once "User.php";

$user = new User();

$result = $user->getAllUsers();
?>
<link rel="stylesheet" href="style.css">
<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Mobile</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['mobileno']; ?></td>
<td><?php echo $row['email']; ?></td>

<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this user?')">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>