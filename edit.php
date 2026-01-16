<?php
include "db.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE students SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
    <button name="update">Update</button>
</form>
