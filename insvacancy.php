<?php
    include_once "db.php";
    $pos = $_POST['pos'];
    $ava = $_POST['ava'];
    $info = $_POST['info'];

    $dates = date('d-m-Y');

    $ins = "INSERT INTO vacancy(position, availibility, vacancy_info, dates)VALUES('$pos', '$ava', '$info', '$dates')";

    $qq = $conn->query($ins);
    if($qq){
        echo 1;
    }
?>