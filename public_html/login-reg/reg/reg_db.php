<?php
require('conn.php');
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$password = $_POST["password"];

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO `user` (`first_name`, `last_name`, `tel`, `email`,`hash`) 
                            VALUES ('$fname', '$lname', '$tel', '$email','$password')";


    // $sql = "INSERT INTO `register` (`re_id`, `re_fname`, `re_lname`, `re_user`, `re_pass`) 
    // VALUES (NULL, '$fname', '$sname', '$user', '$pass')";

    $result = $conn->query($sql);
    if ($result) {
        //echo "Register success";
        header("Refresh:1; url=wip\wip.html");
    } else {
        echo "fail Try again";
    }
}