<footer class="footer">© 2023 <b>All Rights Reserved</b> <span class="d-none d-sm-inline-block">- Developed By<i
                        class="mdi mdi-heart text-danger"></i> by <a href="https://www.chess.com/"
                        target="_blank">Rohit</a>.</span></footer>
        </div><!-- End Right content here -->
    </div><!-- END wrapper --><!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script><!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script><!-- App js -->
    
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="assets/js/app.js"></script>


    <script>jQuery(document).ready(function () {
            $('.summernote').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });



            $(document).on("click", ".add_vacancy", function(e){
          
          e.preventDefault();
          var position = $("#position").val();
          var avaibility = $("#avaibility").val();
          var smcode = $('#summernote').summernote('code');

        //   alert(smcode);
        if(position == "" || avaibility == "" || smcode == ""){
            $(".ress").html("Please fill all fields").css("color", "red");
        }else{
            $.post(
                "insvacancy.php",
                {pos : position, ava : avaibility, info : smcode},
                function(data){
                    if(data == 1){
                        window.location.href="http://localhost/rohit/vacancy.php";
                    }
                }
            );
        }
      });



      $(document).on("submit", "#policy_frm", function(e){
        e.preventDefault();
        var data = new FormData($(this)[0]);
        $.ajax({
            url : "inspolicy.php",
            type : "post",
            data : data,
            contentType : false,
            cache : false,
            processData : false,
            success : function(data){
                if(data == 1){
                    window.location.href="http://localhost/rohit/hrpolicy.php";
                }
            }
        });
      });





      $(document).on("click", ".add_employee", function(e){
          
          e.preventDefault();
          var employee_id = $("#employee").val();
          var name = $("#name").val();
          var start_date = $("#start_date").val();
          var department = $("#department").val();
          var job_title = $("#job_title").val();
          var manager = $("#manager").val();
          var email = $("#email").val();
          var mobile = $("#mobile").val();
          var orientation = $("#orientation").val();


          
        //   alert(smcode);
        if(employee_id == "" || name == "" || start_date == "" || department == "" || job_title == "" || manager == "" || email == "" || mobile == "" || orientation == ""){
            $(".ress").html("Please fill all fields").css("color", "red");
        }else{
            $.post(
                "insemployee.php",
                {empid : employee_id, nm : name, str_date : start_date, depart : department, job_tit : job_title, mana : manager, em : email, mob : mobile, orient : orientation},
                function(data){
                    if(data == 1){
                        window.location.href="http://localhost/rohit/employee.php";
                    }
                }
            );
        }
      });



    //   deelete

    
    $(document).on("click", ".delpolicy", function(e){
        e.preventDefault();
        var val = $(this).attr("value");
        $.post(
            "delpolicyajax.php", 
            {v : val},
            function(data){
                if(data == 1){
                    window.location.href="http://localhost/rohit/hrpolicy.php";
                }
            }
        );
    });

    $(document).on("click", ".delvacancy", function(e){
        e.preventDefault();
        var val = $(this).attr("value");
        $.post(
            "delvacancyajax.php",
            {v : val},
            function(data){
                if(data == 1){
                    window.location.href="http://localhost/rohit/vacancy.php";
                }
            }
        );
    });



    $(document).on("click", ".delemp", function(e){
        e.preventDefault();
        var val = $(this).attr("value");
        $.post(
            "delempajax.php",
            {v : val},
            function(data){
                if(data == 1){
                    window.location.href="http://localhost/rohit/employee.php";
                }
            }
        );
    });





        });</script>



    
</body>

</html>