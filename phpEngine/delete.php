<?php
    include "./config.php";

    $id = $_REQUEST["id"];

    $sql = "DELETE FROM products WHERE id = {$id}";

    $result = mysqli_query($conn,$sql);

    header("location:http://localhost/shion-house");

    mysqli_close($conn);
?>