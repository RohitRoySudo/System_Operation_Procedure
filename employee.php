<?php include_once "includes/header.php"; ?>

<div class="page-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="float-right page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">SOP</a></li>
<li class="breadcrumb-item active">Employee List</li>
</ol>
</div>
<h5 class="page-title">Employee List</h5>
</div>
</div><!-- end row -->


<div class="row">
<div class="col-12">
<div class="card m-b-30">
<div class="card-body">
<table class="table">
<tr>
<td>Employee List</td>
<td align="right"><a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary"> <i class="mdi mdi-library-plus"></i> Add Employee</a></td>
</tr>
</table>
<!-- <h4 class="mt-0 header-title">Buttons example</h4> -->

<table id="datatable-buttons"
class="table table-striped table-bordered dt-responsive"
style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Start Date</th>
<th>Department</th>
<th>Job Title</th>
<th>Manager</th>
<th>Email-ID</th>
<th>Mobile No</th>
<th>Orientation</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
    $get = "SELECT * FROM employee ORDER BY id DESC";
    $getqq = $conn->query($get);
    $gn = $getqq->num_rows;
    if($gn > 0){
        $sn = 1;
        while($row = $getqq->fetch_array()){
            ?>
<tr>
<td><?= $row['emp_id']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['start_date']; ?></td>
<td><?= $row['department']; ?></td>
<td><?= $row['job_title']; ?></td>
<td><?= $row['manager']; ?></td>
<td><?= $row['email']; ?></td>
<td><?= $row['mon_num']; ?></td>
<td><?= $row['orientation']; ?></td>
<td><a href="#" value="<?= $row['id']; ?>" class="btn btn-danger delemp">Delete</a></td>
</tr>
<?php
            $sn++;
        }
    }
?>
</tbody>
</table>
</div>
</div>
</div><!-- end col -->
</div><!-- end row -->






</div><!-- container fluid -->
</div><!-- Page content Wrapper -->
</div><!-- content -->


<div class="col-sm-6 col-md-3 m-t-30">

<div id="myModal" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title mt-0" id="myModalLabel">Add Employee</h5><button type="button" class="close"
data-dismiss="modal" aria-label="Close"><span
aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<!-- form -->
<form action="#" id="employee_frm">
<div class="form-group">
<label>Employee ID</label> 
<input type="text" id="employee" class="form-control colorpicker-element" placeholder="Enter Employee ID" required>
</div>
<div class="form-group">
<label>Name</label> 
<input type="text" id="name" class="form-control colorpicker-element" placeholder="Enter Name" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Start Date</label> 
<input type="date" id="start_date" class="form-control colorpicker-element" placeholder="Enter Start Date" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Department</label> 
<input type="text" id="department" class="form-control colorpicker-element" placeholder="Enter Department" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Job Title</label> 
<input type="text" id="job_title" class="form-control colorpicker-element" placeholder="Enter job title" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Manager</label> 
<input type="text" id="manager" class="form-control colorpicker-element" placeholder="Enter manager" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Email-ID</label> 
<input type="email" id="email" class="form-control colorpicker-element" placeholder="Enter email" 
data-color-format="rgba" required>
</div>


<div class="form-group">
<label>Mobile No</label> 
<input type="text" id="mobile" class="form-control colorpicker-element" placeholder="Enter mobile" 
data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Orientation</label> 
<input type="date" id="orientation" class="form-control colorpicker-element" placeholder="Enter orientation" 
data-color-format="rgba" required>
</div>



<!-- <div class="form-group m-b-0"><label>Start Date</label>
<div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-group colorpicker-element">
<div id="summernote" class="summernote" required></div>

<div class="input-group-append add-on"> -->
    
    <button class="btn btn-primary mt-3 w-100 add_employee" type="submit"><i style="background-color: rgb(255, 146, 180); margin-top: 2px;"></i>SUBMIT</button>
    
</div>
</div>
<p class="ress text-center"></p>
</div>
</form>
<!-- form -->
</div>
<!-- <div class="modal-footer"><button type="button"
class="btn btn-secondary waves-effect"
data-dismiss="modal">Close</button> <button
type="button"
class="btn btn-primary waves-effect waves-light">Save
changes</button></div> -->
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<!-- modal ends -->


<?php include_once "includes/footer.php"; ?>
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>