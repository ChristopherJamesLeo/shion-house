<?php
    include "./config.php";

    echo $id = $_REQUEST["id"];

    echo $name = $_REQUEST["product_name"];

    echo $price = $_REQUEST["product_price"];

    $sql = "UPDATE products SET name = '{$name}' , price = {$price} WHERE id = {$id}";

    $result = mysqli_query($conn , $sql);

    header("location:http://localhost/shion-house");
    
    mysqli_close($conn);

    
?>