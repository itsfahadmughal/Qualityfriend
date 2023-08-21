<?php
include 'util_config.php';
include '../util_session.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Riparazioni</title>
        <!-- Footable CSS -->
        <link href="../assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <link href="../assets/node_modules/tablesaw/dist/tablesaw.css" rel="stylesheet">

    </head>
    <body class="skin-default-dark fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Riparazioni</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <?php include 'util_header.php'; ?>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <?php include 'util_side_nav.php'; ?>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles mobile-container-padding heading_style">
                        <div class="col-md-3 align-self-center">
                            <h4 class="text-themecolor font-weight-title font-size-title">Riparazioni</h4>
                        </div>
                        <div class="col-md-6 mtm-5px">
                            <div class="input-group">
                                <input type="text" id="searchInput" placeholder="Search By" class="form-control">
                                <div class="input-group-append"><span class="input-group-text"><i class="ti-search"></i></span></div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Riparazioni</a></li>
                                    <li class="breadcrumb-item text-success">Riparazioni create</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->

                    <div class="row pr-4 mobile-container-padding">
                        <?php  if($recruiting_flag  == 1){ ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background text-center padding-top-8" onclick="redirect_url('jobs.php');">
                                <img src="../dist/images/icon-recruitment.png" />
                                <h6 class="text-white pt-2">Recruiting</h6>
                            </div>
                        </div>
                        <?php }
                        if($handover_flag == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background text-center padding-top-8" onclick="redirect_url('handover.php');">
                                <img src="../dist/images/icon-list.png" />
                                <h6 class="text-white pt-2">Handovers</h6>
                            </div>
                        </div>
                        <?php }
                        if($handbook_flag == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background text-center padding-top-8" onclick="redirect_url('handbook.php');">
                                <img src="../dist/images/icon-book.png" />
                                <h6 class="text-white pt-2">Manuali</h6>
                            </div>
                        </div>
                        <?php }
                        if($checklist_flag == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background text-center padding-top-8" onclick="redirect_url('todo_check_list.php');">
                                <img src="../dist/images/icon-checklist.png" />
                                <h6 class="text-white pt-2">Todo/Checklist</h6>
                            </div>
                        </div>
                        <?php }
                        if($notices_flag == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('notices.php');">
                                <img src="../dist/images/icon-notification.png" />
                                <h6 class="text-white pt-2">Notizie</h6>
                            </div>
                        </div>
                        <?php }
                        if($repairs_flag  == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background-active text-center padding-top-8" onclick="redirect_url('repairs.php');">
                                <img src="../dist/images/icon-repair.png" />
                                <h6 class="text-white pt-2">Riparazioni</h6>
                            </div>
                        </div>
                        <?php }
                        if($housekeeping_flag == 1){
                            if($housekeeping_admin == 1 || $housekeeping == 1){ ?> 
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('housekeeping.php');">
                                <img src="../dist/images/housekeeping.png" />
                                <h6 class="text-white pt-2">Housekeeping</h6>
                            </div>
                        </div>
                        <?php } }
                        if($time_schedule_flag == 1){
                        ?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('my_schedules.php');">
                                <img src="../dist/images/time_schedule.png" />
                                <h6 class="text-white pt-2">Gestione turni</h6>

                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->




                    <div class="row pl-3 pr-3">

                        <div class="col-lg-10  col-md-9 mt-2 mb-3">
                        </div>
                        <div class="col-lg-2 col-md-3 mt-2 mb-3">
                            <?php if($Create_edit_repairs == 1 || $usert_id == 1){ ?>
                            <a href="repair_create.php" class="btn w-100 wm-48 btn-secondary d-lg-block "><i class="fa fa-plus-circle"></i> Creare riparazione</a>
                            <?php } ?>
                        </div>


                        <?php
                        if($Create_edit_repairs == 1 || $usert_id == 1){
                            $sql="SELECT * FROM `tbl_repair` WHERE `hotel_id` = $hotel_id AND status_id = 6 and is_delete = 0 and saved_status = 'CREATE' ORDER BY 1 DESC";
                        }else{
                            $sql="SELECT DISTINCT a.* FROM `tbl_repair` as a LEFT OUTER JOIN tbl_repair_recipents as b ON a.rpr_id=b.rpr_id LEFT OUTER JOIN tbl_repair_departments as c on a.rpr_id=c.rpr_id WHERE a.`hotel_id` = $hotel_id AND status_id = 6 AND a.is_delete = 0 AND a.saved_status = 'CREATE' AND a.is_active = 1 AND (b.user_id=$user_id OR c.depart_id = $depart_id) ORDER BY 1 DESC";
                        }
                        $result = $conn->query($sql);
                        if ($result && $result->num_rows > 0) {
                        ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pm-0 small-screen-pr-0 mobile-container-pl-60">
                                    <div class="table-responsive">
                                        <table id="myTable" class="tablesaw table-bordered table-hover table no-wrap" data-tablesaw-mode="stack"
                                               data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap
                                               data-tablesaw-mode-switch>
                                            <thead>
                                                <tr>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" class="border text-center"><b>Titolo</b></th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1" class="border text-center"><b> Creatore</b></th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" class="border text-center"><b> Coinvolti</b></th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3" class="border text-center"><b> Stato</b></th>
                                                    <?php if($Create_edit_repairs == 1 || $usert_id == 1){ ?>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4" class="border text-center"><b> Azione</b></th>
                                                    <?php } ?>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5" class="border text-center"><b> Data</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                            while($row = mysqli_fetch_array($result)) {

                                if($row['visibility_status'] == "PRIVATE"){
                                    if($usert_id == 1 || $user_id == $row['entrybyid']){

                                    }else{
                                        continue;    
                                    }
                                }

                                $sql_sub="select firstname from tbl_user where user_id = $row[17]";
                                $result_sub = $conn->query($sql_sub);
                                $row_sub = mysqli_fetch_array($result_sub);

                                $sql_sub1="select b.department_name from tbl_repair_departments as a INNER JOIN tbl_department as b on a.depart_id=b.depart_id where a.rpr_id  = $row[0] Limit 1";
                                $result_sub1 = $conn->query($sql_sub1);

                                $rpr_id =$row['rpr_id'];
                                $sql_sub2="select b.firstname from tbl_repair_recipents as a INNER JOIN tbl_user as b on a.user_id=b.user_id where a.rpr_id  = $row[0] Limit 2";
                                $result_sub2 = $conn->query($sql_sub2);
                                if($row['title_it'] != ""){
                                    $title =$row['title_it'];
                                }else if($row['title'] != ""){
                                    $title =$row['title']; 
                                }else if($row['title_de'] != ""){
                                    $title =$row['title_de'];
                                }else{
                                    $title = "";
                                }




                                $is_completed = 0;
                                $sql_ = "SELECT * FROM `tbl_repair_recipents`   WHERE `user_id` = $user_id AND `rpr_id` = $rpr_id";
                                $result_ = $conn->query($sql_);
                                if ($result_ && $result_->num_rows > 0) {
                                    while($row_ = mysqli_fetch_array($result_)) {
                                        $is_completed = $row_['is_completed'];
                                    }
                                }

                                if($is_completed == 0){

                                                ?>
                                                <tr>    
                                                    <td class="text-center"><b><?php echo $title; ?></b><br><div class="label pl-4 pr-4 label-table btn-info cursor-pointer" onclick="redirect_url('repair_detail.php?id=<?php echo $row[0]; ?>');">Riparazione</div></td>

                                                    <td class="text-center"><b><?php echo $row_sub['firstname']; ?></b></td>

                                                    <td class="text-center">
                                                        <?php if($result_sub1 && $result_sub1->num_rows > 0){
                                                    $row_sub1 = mysqli_fetch_array($result_sub1);
                                                        ?>

                                                        <div class="label p-2 m-1 label-table label-inverse"><?php echo $row_sub1['department_name']; ?></div>
                                                        <?php
                                                }
                                    if($result_sub2 && $result_sub2->num_rows > 0){
                                        while($row_sub2 = mysqli_fetch_array($result_sub2)) {
                                                        ?>
                                                        <div class="label p-2 m-1 label-table label-inverse"><?php echo $row_sub2['firstname']; ?></div>
                                                        <?php 
                                        } } ?>
                                                    </td>
                                                    <td class="text-center"><div class="label p-2 label-table label-success">Riparazione <?php if($row['status_id'] == 8){echo 'Completato';}else{echo 'In-Pipeline';} ?></div></td>

                                                    <?php if($Create_edit_repairs == 1 || $usert_id == 1){ ?>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <span id="thisstatus" class="dropdown-toggle label label-table label-danger pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Azione</span>

                                                            <div class="dropdown-menu animated flipInY">
                                                                <a class="dropdown-item" href="javascript:void(0)" onclick="delete_repair('<?php echo $row[0]; ?>');">Eliminare</a>
                                                                <a class="dropdown-item" href="javascript:void(0)" onclick="duplicate_repair('<?php echo $row[0]; ?>');">Duplicare</a>
                                                                <a class="dropdown-item" href="repair_detail.php?id=<?php echo $row[0]; ?>">Visualizza</a>
                                                                <a class="dropdown-item" href="repair_edit.php?id=<?php echo $row[0]; ?>">Modificare</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php } ?>
                                                    <td class="text-center"><b><?php echo date("d.m.Y", strtotime(substr($row[16],0,10))); ?></b><br><span class="label-light-gray"><?php echo substr($row[16],10); ?></span></td>
                                                </tr>
                                                <?php

                                }

                            }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }else{
                        ?>
                        <div class="col-lg-12 col-xlg-12 col-md-12 mt-5">
                            <h1 class="text-center pt-5 pb-5">Riparazioni non trovate</h1>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <?php include 'util_right_nav.php'; ?>
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include 'util_footer.php'; ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/node_modules/popper/popper.min.js"></script>
        <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>
        <!-- Footable -->
        <script src="../assets/node_modules/moment/moment.js"></script>
        <script src="../assets/node_modules/footable/js/footable.min.js"></script>

        <!-- Sweet-Alert  -->
        <script src="../assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="../assets/node_modules/sweetalert2/sweet-alert.init.js"></script>
        <script>
            function duplicate_repair(id){

                Swal.fire({
                    title: 'Sei sicuro di voler duplicare?',
                    text: "Non sarai in grado di ripristinarlo!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sì, duplicalo!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'util_duplicate_handover_notice_repair.php',
                            method:'POST',
                            data:{ source:"repair", id:id},
                            success:function(response){
                                console.log(response);
                                if(response == "success"){
                                    Swal.fire({
                                        title: 'Ripara duplicato',
                                        type: 'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        if (result.value) {
                                            location.replace("repairs.php");
                                        }
                                    })
                                }else{
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Qualcosa è andato storto!',
                                        footer: ''
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                            },
                        });
                    }
                });
            }


            function delete_repair(id) {

                Swal.fire({
                    title: 'Sei sicuro?',
                    text: "Non sarai in grado di ripristinarlo!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sì, eliminalo!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'util_update_status.php',
                            method:'POST',
                            data:{ tablename:"tbl_repair", idname:"rpr_id", id:id, statusid:1,statusname: "is_delete"},
                            success:function(response){
                                console.log(response);
                                if(response == "Updated"){
                                    Swal.fire({
                                        title: 'Eliminato',
                                        type: 'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        if (result.value) {
                                            location.replace("repairs.php");
                                        }
                                    })
                                }
                                else{
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Qualcosa è andato storto!',
                                        footer: ''
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                            },
                        });
                    }
                });

            }

            function redirect_url(url) {
                window.location.href = url;
            }

            $(document).ready(function(){
                $("#searchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tbody tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

        <!-- jQuery peity -->
        <script src="../assets/node_modules/tablesaw/dist/tablesaw.jquery.js"></script>
        <script src="../assets/node_modules/tablesaw/dist/tablesaw-init.js"></script>
    </body>
</html>