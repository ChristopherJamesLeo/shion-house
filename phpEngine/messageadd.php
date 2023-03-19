<?php
    include "./config.php";

    $message = $_REQUEST["message"];
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $subject = $_REQUEST["subject"];

    $sql = "INSERT INTO messages(name,email,subject,message) VALUES ('{$name}','{$email}','{$subject}','{$message}')";
    $result = mysqli_query($conn,$sql);

    header("location:http://localhost/shion-house");

    mysqli_close($conn);

?>