<?php
require('conn.php');
session_start();
if (isset($_POST['submit'])) {
    $user = $_POST['email'];
    $pass = $conn->real_escape_string($_POST['password']);


    $sql = "SELECT * FROM `user` WHERE `email` = '" . $user . "' AND `hash` = '" . $pass . "' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];

        header("location:wip\wip.html");
    } else {
        echo 'Username & Password is invalid';
        header('<location:reg/reg.php');
    }
}
