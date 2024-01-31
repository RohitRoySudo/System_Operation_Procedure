<?php include_once "includes/header.php"; ?>
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h5 class="page-title">Dashboard</h5>
            </div>
        </div><!-- end row -->



        <!-- chart -->


        <div class="row">
            <div class="col-xl-6"><div class="card m-b-30"><div class="card-body"><h4 class="mt-0 header-title">Donut Chart</h4><p class="text-muted m-b-30 font-14 d-inline-block text-truncate w-100">This really couldn't be easier. Create a Donut chart using Morris.Donut(options).</p><ul class="list-inline widget-chart m-t-20 m-b-15 text-center"><li class="list-inline-item"><h4 class=""><b>3654</b></h4><p class="text-muted">Marketplace</p></li><li class="list-inline-item"><h4 class=""><b>954</b></h4><p class="text-muted">Last week</p></li><li class="list-inline-item"><h4 class=""><b>8462</b></h4><p class="text-muted">Last Month</p></li></ul><div id="morris-donut-example" style="height: 300px"><svg height="300" version="1.1" width="835" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#ff5560" d="M417.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,505.7277551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ff5560" stroke="#ffffff" d="M417.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,508.56364732624417,181.4248826052307L545.1151459070204,194.03833029452744A135,135,0,0,1,417.5,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#508aeb" d="M505.7277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,333.78484627831415,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#508aeb" stroke="#ffffff" d="M508.56364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,331.09400205154566,107.40757544301087L291.92726941747117,88.10097469226493A140,140,0,0,1,549.8416327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#fcc24c" d="M333.78484627831415,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,417.47067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#fcc24c" stroke="#ffffff" d="M331.09400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,417.46973599126824,246.3333285794739L417.4575884998742,284.9999933380171A135,135,0,0,1,296.4120097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="417.5" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.4577,0,0,1.4577,-191.09,-69.1128)" stroke-width="0.6860119047619048"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="417.5" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.9444,0,0,1.9444,-394.4038,-143.5556)" stroke-width="0.5142857142857143"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div></div></div></div>
            <div class="col-xl-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Simple pie chart</h4>
                        <p class="text-muted m-b-30 font-14 d-inline-block text-truncate w-100">A very simple pie chart
                            with label interpolation to show percentage instead of the actual data series value.</p>
                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                            <li>
                                <h4 class=""><b>33%</b></h4>
                                <p class="text-muted">Marketplace</p>
                            </li>
                            <li>
                                <h4 class=""><b>42%</b></h4>
                                <p class="text-muted">Last week</p>
                            </li>
                            <li>
                                <h4 class=""><b>25%</b></h4>
                                <p class="text-muted">Last Month</p>
                            </li>
                        </ul>
                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"><svg
                                xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                                class="ct-chart-pie" style="width: 100%; height: 100%;">
                                <g class="ct-series ct-series-c">
                                    <path d="M417.5,5A145,145,0,0,0,292.18,222.938L417.5,150Z" class="ct-slice-pie"
                                        ct:value="4"></path>
                                </g>
                                <g class="ct-series ct-series-b">
                                    <path d="M291.926,222.5A145,145,0,0,0,490.438,275.32L417.5,150Z"
                                        class="ct-slice-pie" ct:value="3"></path>
                                </g>
                                <g class="ct-series ct-series-a">
                                    <path d="M490,275.574A145,145,0,0,0,417.5,5L417.5,150Z" class="ct-slice-pie"
                                        ct:value="5"></path>
                                </g>
                                <g><text dx="487.52962240595747" dy="131.23561923006724" text-anchor="middle"
                                        class="ct-label">42%</text><text dx="398.73561923006724" dy="220.02962240595747"
                                        text-anchor="middle" class="ct-label">25%</text><text dx="354.7131582256282"
                                        dy="113.75" text-anchor="middle" class="ct-label">33%</text></g>
                            </svg></div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>


        <!-- chart -->



    </div><!-- container fluid -->
</div><!-- Page content Wrapper -->
</div><!-- content -->
<?php include_once "includes/footer.php"; ?>