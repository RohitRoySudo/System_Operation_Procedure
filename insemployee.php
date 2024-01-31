<?php
    include_once "db.php";
    $empid = $_POST['empid'];
    $nm = $_POST['nm'];
    $str_date = $_POST['str_date'];
    $depart = $_POST['depart'];
    $job_tit = $_POST['job_tit'];
    $mana = $_POST['mana'];
    $em = $_POST['em'];
    $mob = $_POST['mob'];
    $orient = $_POST['orient'];

    $dates = date('d-m-Y');

    $ins = "INSERT INTO `employee`(`emp_id`, `name`, `start_date`, `department`, `job_title`, `manager`, `email`, `mon_num`, `orientation`, `dates`) VALUES ('$empid','$nm','$str_date','$depart','$job_tit','$mana','$em','$mob','$orient', '$dates')";

    $qq = $conn->query($ins);
    if($qq){
        echo 1;
    }
?>