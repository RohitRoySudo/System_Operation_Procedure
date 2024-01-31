<?php
    include_once "db.php";

    $v = $_POST['v'];
    $dl = "DELETE FROM vacancy where id='$v'";
    $q = $conn->query($dl);
    if($q){
        echo 1;
    }
?>