<?php
    $conn = new mysqli("localhost", "root", "", "rohit");
    if(!$conn){
        echo "Not Connected";
    }
?>