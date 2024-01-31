<?php
include 'connect.php';
if(isset($_POST['displaysend']))
{
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SI NO</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">MOBILE NO</th>
        <th scope="col">PLACE</th>
        <th scope="col">OPERATION</th>
      </tr>
    </thead>';
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $place=$row['place'];
        $table.='<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$place.'</td>
        <td>
        <button class="btn btn-dark"  onclick="GetDetails('.$id.')">Update</button>
        <button class="btn btn-danger" onclick="Deleteuser('.$id.')">Delete</button>
</td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
} 
?> 
