<?php include_once "includes/header.php"; ?>


    <link rel="stylesheet" href="assets/plugins/chartist/css/chartist.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    <?php
    $tot = 0;
    $tot1 = 0;
    $todays = date('d-m-Y');
        $getemp = "SELECT * FROM employee where dates='$todays'";
        $qr = $conn->query($getemp);
        $num = $qr->num_rows;
        if($num > 0){
            $tot = $num;
        }

        $getemp1 = "SELECT * FROM employee";
        $qr1 = $conn->query($getemp1);
        $num1 = $qr1->num_rows;
        if($num1 > 0){
            $tot1 = $num1;
        }

    ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Todays',     <?= $tot; ?>],
          ['Total',      <?= $tot1; ?>],
        ]);

        var options = {
          title: 'Employees Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


<!-- next -->
<?php
    $all = 0;
    $all1 = 0;
    $todays2 = date('d-m-Y');
        $getvacancy = "SELECT * FROM vacancy where dates='$todays2'";
        $qry = $conn->query($getvacancy);
        $num2 = $qry->num_rows;
        if($num2 > 0){
            $all = $num2;
        }

        $getvacancy1 = "SELECT * FROM vacancy";
        $qry1 = $conn->query($getvacancy1);
        $num21 = $qry1->num_rows;
        if($num21 > 0){
            $all1 = $num21;
        }

    ?>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'All Vacancy'],
          ['Today Listing',     <?= $all ?>],
          ['Total Vacancy',      <?= $all1 ?>]
          
        ]);

        var options = {
          title: 'Vacancy Chart',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



    

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="float-right page-breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">SOP</a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
                                </div>
                                <h5 class="page-title"><Datag>Dashboard</Datag></h5>
                            </div>
                        </div><!-- end row -->
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Employee Chart</h4>
                                       
                                        <div id="piechart" style="width: 100%; height: 500px;"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Vacancy Chart</h4>
                                        
                                        <div id="donutchart" style="width: 100%; height: 500px;"></div>
                                        <!-- <div id="piechart2" style="width: 100%; height: 500px;"></div> -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        
                    </div><!-- container fluid -->
                </div><!-- Page content Wrapper -->
            </div><!-- content -->
<!--Chartist Chart-->
<script src="assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/pages/chartist.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script> 
<?php include_once "includes/footer.php"; ?>



