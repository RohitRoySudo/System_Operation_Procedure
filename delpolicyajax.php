<?php
    include_once "db.php";

    $v = $_POST['v'];
    $dl = "DELETE FROM policy where id='$v'";
    $q = $conn->query($dl);
    if($q){
        echo 1;
    }
?>