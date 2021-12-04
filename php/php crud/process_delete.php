<?php
    $code = $_GET['model'];

    require_once './asset/php/connect.php';

    $sql="delete from info_model where code = $code";
    $result = mysqli_query($connect,$sql);

    $error = mysqli_error($connect);
    echo $error;

    mysqli_close($connect);
