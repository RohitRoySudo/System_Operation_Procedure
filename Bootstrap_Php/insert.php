<?php
include 'connect.php';
extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['emailsend']) && isset($_POST['mobilesend']) && isset($_POST['placesend']))
{
    $sql="insert into `crud` (name,email,mobile,place) values('$namesend','$emailsend','$mobilesend','$placesend')";
    $result=mysqli_query($con,$sql);
}
?>