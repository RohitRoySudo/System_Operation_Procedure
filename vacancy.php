<?php include_once "includes/header.php"; ?>

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">SOP</a></li>
                        <li class="breadcrumb-item active">Vacancy List</li>
                    </ol>
                </div>
                <h5 class="page-title">Vacancy List</h5>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Vacancy List</td>
                                <td align="right"><a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-primary"> <i class="mdi mdi-library-plus"></i> New Vacancy</a></td>
                            </tr>
                        </table>
                        <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Vacancy Information</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $get = "SELECT * FROM vacancy ORDER BY id DESC";
                                    $getqq = $conn->query($get);
                                    $gn = $getqq->num_rows;
                                    if($gn > 0){
                                        $sn = 1;
                                        while($row = $getqq->fetch_array()){
                                            ?>
                                            <tr>
                                                <td><?= $sn; ?></td>
                                                <td style="white-space: normal;width: 400px;"><div style="width:100%;height:100%;display:block;overflow: auto;">Position : <span style="font-weight:600;font-size:18px;"><?= $row['position']; ?></span><?= $row['vacancy_info']; ?></div></td>
                                                <td><?= $row['availibility']; ?></td>
                                                <td><a href="#" value="<?= $row['id']; ?>" class="btn btn-danger delvacancy">Delete</a></td>
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
                </div>
            </div><!-- end col -->


            <!-- modal here -->

            <div class="col-sm-6 col-md-3 m-t-30">
                                
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Add Vacancy</h5><button type="button" class="close"
                                                    data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- form -->
                                                <form action="#" id="vacancy_frm">
                                                    <div class="form-group">
                                                        <label>Position</label> 
                                                        <input type="text" id="position" class="form-control colorpicker-element" placeholder="Enter Position" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Availability</label> 
                                                        <input type="number" id="avaibility" class="form-control colorpicker-element" placeholder="Enter Availability" data-color-format="rgba" required>
                                                    </div>
                                                    <div class="form-group m-b-0"><label>Vacancy Information</label>
                                                        <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-group colorpicker-element">
                                                        <div id="summernote" class="summernote" required></div>
                                                         
                                                            <div class="input-group-append add-on">
                                                                
                                                                <button class="btn btn-primary mt-3 w-100 add_vacancy" type="submit"><i style="background-color: rgb(255, 146, 180); margin-top: 2px;"></i>SUBMIT</button>
                                                                
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


        </div><!-- end row -->
        
    </div><!-- container fluid -->
</div><!-- Page content Wrapper -->
</div><!-- content -->
<?php include_once "includes/footer.php"; ?>
