<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bootstrap Modual CRUD</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NEW USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <!--NAME-->
       <div class="form-group">
        <label for="completename">NAME</label>
        <input type="text" class="form-control" id="completename" aria-describedby="emailHelp" placeholder="Enter your Name">
       </div>
        <!--Email-->
       <div class="form-group">
        <label for="completeemail">EMAIL</label>
        <input type="email" class="form-control" id="completeemail" aria-describedby="emailHelp" placeholder="Enter your Email">
       </div>
       <!--Mobile-->
       <div class="form-group">
        <label for="completemobile">MOBILE NO</label>
        <input type="text" class="form-control" id="completemobile" aria-describedby="emailHelp" placeholder="Enter your Mobile Number">
       </div>
       <!--Place-->
       <div class="form-group">
        <label for="completeplace">PLACE</label>
        <input type="email" class="form-control" id="completeplace" aria-describedby="emailHelp" placeholder="Enter your Place">
       </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
      </div>
    </div>
  </div>
</div>
<!--Update Modal-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <!--NAME--> 
       <div class="form-group">
        <label for="updatename">NAME</label>
        <input type="text" class="form-control" id="updatename" aria-describedby="emailHelp" placeholder="Enter your Name">
       </div>
        <!--Email-->
       <div class="form-group">
        <label for="updateemail">EMAIL</label>
        <input type="email" class="form-control" id="updateemail" aria-describedby="emailHelp" placeholder="Enter your Email">
       </div>
       <!--Mobile-->
       <div class="form-group">
        <label for="updatemobile">MOBILE NO</label>
        <input type="text" class="form-control" id="updatemobile" aria-describedby="emailHelp" placeholder="Enter your Mobile Number">
       </div>
       <!--Place-->
       <div class="form-group">
        <label for="updateplace">PLACE</label>
        <input type="email" class="form-control" id="updateplace" aria-describedby="emailHelp" placeholder="Enter your Place">
       </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="UpdateDetails">Update</button>
        <input type="hidden" id="hiddendata ">
      </div>
    </div>
  </div>
</div>
    <div class="container my-3">
    <h1 class="text-center">EMPLOYEE LIST</h1>
   <!-- <button class="btn btn-dark my-4 ">ADD NEW EMPLOYEE</button>-->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
  ADD NEW USER
</button>
    <div id="displayDataTable"> </div>
    </div>
    
    <!--Bootstrap Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
<script>
  $(document).ready(function()
  {
     displayData();
  });
  //display function
  function displayData()
  {
    var displayData="true";
    $.ajax({
       url:"display.php",   
       type:'post',
       data:{
              displaysend:displayData
       },
       success:function(data,status)
       {
         $('#displayDataTable').html(data);
       }
    })
  }
    function adduser()
    {
        var nameAdd=$('#completename').val();
        var emailAdd=$('#completeemail').val();
        var mobileAdd=$('#completemobile').val();
        var placeAdd=$('#completeplace').val();
          
        $.ajax({
            url:"insert.php",
            type:'Post',
            data:{
                namesend:nameAdd,
                 emailsend:emailAdd,
                 mobilesend:mobileAdd,
                 placesend:placeAdd


            },
            success:function(data,status){
             //function to display data;
               //    console.log(status)
               $('#completeModal').modal('hide');
               displayData();
            }
                  
           
        });
        
    }
    //Delete Record
    function Deleteuser(deleteid){
      $.ajax({
        url:"delete.php",
        type:'post',
        data:{
          deletesend:deleteid
        },
        success:function(data,status){
            displayData();
        }
      });
    }

//update function
   function GetDetails(updateid){
    $('#hiddendata').val(updateid);
    $.post("update.php",{updateid:updateid},function(data,status){
      var userid=JSON.parse(data);
      $('#updatename').val(userid.name);
      $('#updateemail').val(userid.email);
      $('#updatemobile').val(userid.mobile);
      $('#updateplace').val(userid.place);  
    });
    $('#updateModal').modal("show");

   }
   //onclick update event function
   function UpdateDetails(){
     var updatename=$('#updatename').val();
     var updateemail=$('#updateemail').val();
     var updatemobile=$('#updatemobile').val();
     var updateplace=$('#updateplace').val();
     var hiddendata=$('#hiddendata').val();
     $.post("update.php",{
      updatename:updatename,
      updateemail:updateemail,
      updatemobile:updatemobile,
      updateplace:updateplace,
      hiddendata:hiddendata

     },function(data,status){
      $('#updateModal').modal('hide');
      displayData();

     });
   }
</script>

</body>
</html>
