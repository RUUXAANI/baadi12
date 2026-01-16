<?php
include "db.php";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button name="save">Save</button>
</form>
