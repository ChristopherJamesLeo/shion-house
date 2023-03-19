<?php
    session_start();

    session_unset();

    session_destroy();

    header("Location:http://localhost/shion-house/");

    mysqli_close($conn);


?>