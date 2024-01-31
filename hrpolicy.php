<?php include_once "includes/header.php"; ?>

<div class="page-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="float-right page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">SOP</a></li>
<li class="breadcrumb-item active">Policy List</li>
</ol>
</div>
<h5 class="page-title">Policy List</h5>
</div>
</div><!-- end row -->


<div class="row">
<div class="col-12">
<div class="card m-b-30">
<div class="card-body">
<table class="table">
<tr>
<td>Policy List</td>
<td align="right"><a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary"> <i class="mdi mdi-library-plus"></i> Add Policy</a></td>
</tr>
</table>
<!-- <h4 class="mt-0 header-title">Buttons example</h4> -->

<table id="datatable-buttons"
class="table table-striped table-bordered dt-responsive"
style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th>Policy Number</th>
<th>Policy Name</th>
<th>Accept Policy</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
    $get = "SELECT * FROM policy ORDER BY id DESC";
    $getqq = $conn->query($get);
    $gn = $getqq->num_rows;
    if($gn > 0){
        $sn = 1;
        while($row = $getqq->fetch_array()){
            ?>
<tr>
<td><?= $row['policy_num']; ?></td>
<td><a href="assets/policy/<?= $row['upload_policy']; ?>"><?= $row['policy_nm']; ?></a></td>
<td><?= $row['accept_policy']; ?></td>

<td><a href="#" value="<?= $row['id']; ?>" class="btn btn-danger delpolicy">Delete</a></td>
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
<h5 class="modal-title mt-0" id="myModalLabel">Add Policy</h5><button type="button" class="close"
data-dismiss="modal" aria-label="Close"><span
aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<!-- form -->
<form action="#" id="policy_frm">
<div class="form-group">
<label>Policy Number</label> 
<input type="text" id="policy_num" name="policy_num" class="form-control colorpicker-element" placeholder="Enter policy number" required>
</div>
<div class="form-group">
<label>Policy Name</label> 
<input type="text" id="policy_name" name="policy_name" class="form-control colorpicker-element" placeholder="Enter Policy Name" data-color-format="rgba" required>
</div>

<div class="form-group">
<label>Accept Policy</label> 
<select name="accept_policy" id="accept_policy" name="accept_policy" class="form-control" required>
    <option value="POLICY ACCEPTED">POLICY ACCEPTED</option>
    <option value="ACCEPT POLICY">ACCEPT POLICY </option>
</select>
</div>

<div class="form-group">
<label>Upload Policy</label> 
<input type="file" id="policy_file" name="policy_file" class="form-control colorpicker-element" placeholder="Enter Upload Policy" data-color-format="rgba" required>
</div>



<!-- <div class="form-group m-b-0"><label>Start Date</label>
<div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-group colorpicker-element">
<div id="summernote" class="summernote" required></div>

<div class="input-group-append add-on"> -->
    
    <button class="btn btn-primary mt-3 w-100 add_hr" type="submit"><i style="background-color: rgb(255, 146, 180); margin-top: 2px;"></i>SUBMIT</button>
    
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