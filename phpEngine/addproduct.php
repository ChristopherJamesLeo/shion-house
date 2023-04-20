<?php
    include "./config.php";

    $name = $_REQUEST["name"];
    $type = $_REQUEST["type"];
    $price = $_REQUEST["price"];


    $img_name = $_FILES["pro_img"]["name"];
    $img_temp = $_FILES["pro_img"]["tmp_name"];
    $filepath = "../asset/img/products/";
    $targetdir = $filepath . $img_name;
    $filetype = pathinfo($targetdir,PATHINFO_EXTENSION);

    if(!empty($img_name) && move_uploaded_file($img_temp,$targetdir)){
        $result = mysqli_query($conn , "INSERT INTO products (name,type,price,img) VALUES('{$name}','{$type}','{$price}','{$img_name}')");
    }

    header("location:http://localhost/shion-house/");

    mysqli_close($conn);

?>