<?php
    include_once "db.php";
    $policy_num = $_POST['policy_num'];
    $policy_name = $_POST['policy_name'];
    $accept_policy = $_POST['accept_policy'];
    $policy_file = $_FILES['policy_file']['name'];
    $policy_filetmp = $_FILES['policy_file']['tmp_name'];

    $rand = rand(1000, 9999);
    $dates = date('d-m-Y');
    $newpolicyfilename = $rand.$policy_file;
    $target = 'assets/policy/'.$newpolicyfilename;
    
    if(move_uploaded_file($policy_filetmp, $target)){
        $ins = "INSERT INTO `policy`(`policy_num`, `policy_nm`, `accept_policy`, `upload_policy`) VALUES ('$policy_num','$policy_name','$accept_policy','$newpolicyfilename')";

        $qq = $conn->query($ins);
        if($qq){
            echo 1;
        }
    }
    

   
?>