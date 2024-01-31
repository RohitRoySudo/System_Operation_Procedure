<?php
    include_once "db.php";

    // Sanitize user inputs (consider using appropriate validation functions)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile= $_POST['mobile'];
    $designation = $_POST['designation'];
    $resume_nm= $_POST['resume_name'];
    $date = $_POST['date'];
    
    // File upload handling
    $resume_file = $_FILES['resume_file']['name'];
    $resume_filetmp = $_FILES['resume_file']['tmp_name'];
    
    // Generate a unique filename for the uploaded resume
    $rand = rand(1000, 9999);
    $newresumefilename = $rand . $resume_file;
    $tar = 'assets/resume/' . $newresumefilename;
    
    // Move the uploaded file to the desired location
    if (move_uploaded_file($resume_filetmp, $tar)) {
        // Insert data into the database using prepared statements
        $ins = "INSERT INTO `hiring` (`name`, `email`, `mobile`, `designation`, `resume_name`, `date`, `upload_resume`) VALUES ( '$name', '$email', '$mobile', '$designation', '$resume_nm', '$date', '$newresumefilename')";

        
        $qq = $conn->query($ins);
        if($qq){
            echo 1;
        }
    }
    

?>
