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
        <title>Jobs - Funnel</title>

        <!-- Footable CSS -->
        <link href="../assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

        <link href="../dist/css/style.min.css" rel="stylesheet">

    </head>
    <body class="skin-default-dark fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Jobs - Funnel</p>
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
                    <div class="mobile-container-padding">

                        <div class="mobile-container-padding">
                            <div class="row page-titles mb-3 heading_style">
                                <div class="col-md-3 align-self-center">
                                    <h5 class="text-themecolor font-weight-title font-size-title mb-0">Jobs - Funnel</h5>
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Recruiting</a></li>
                                            <li class="breadcrumb-item text-success">Jobs - Funnel</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->

                    <div class="row pr-4 mobile-container-padding">
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background-active icon text-center padding-top-8" onclick="redirect_url('jobs.php');">
                                <img src="../dist/images/icon-recruitment.png" />
                                <h6 class="text-white pt-2">Recruiting</h6>

                            </div>
                        </div>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('handover.php');">
                                <img src="../dist/images/icon-list.png" />
                                <h6 class="text-white pt-2">Übergaben</h6>

                            </div>
                        </div>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('handbook.php');">
                                <img src="../dist/images/icon-book.png" />
                                <h6 class="text-white pt-2">Handbuch</h6>

                            </div>
                        </div>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('todo_check_list.php');">
                                <img src="../dist/images/icon-checklist.png" />
                                <h6 class="text-white pt-2">Todo/Checklist</h6>

                            </div>
                        </div>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('notices.php');">
                                <img src="../dist/images/icon-notification.png" />
                                <h6 class="text-white pt-2">Notizen</h6>
                            </div>
                        </div>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('repairs.php');">
                                <img src="../dist/images/icon-repair.png" />
                                <h6 class="text-white pt-2">Reparaturen</h6>

                            </div>
                        </div>
                        <?php if($housekeeping_admin == 1 || $housekeeping == 1){ ?> 
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('housekeeping.php');">
                                <img src="../dist/images/housekeeping.png" />
                                <h6 class="text-white pt-2">Housekeeping</h6>
                            </div>
                        </div>
                        <?php }?>
                        <div class="col-lg-12-custom pr-0">
                            <div  class="list-background icon text-center padding-top-8" onclick="redirect_url('my_schedules.php');">
                                <img src="../dist/images/time_schedule.png" />
                                <h6 class="text-white pt-2">Dienstplanung</h6>

                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pm-0 small-screen-pr-0 mobile-container-pl-60">
                                    <h4 class="card-title inline-div mtm-10 mbm-0">Jobs - Funnel</h4>
                                    <br>


                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!--                                                    Add Template Category-->
                                                    <h4 class="modal-title" id="myModalLabel">Erstellen Sie einen neuen Trichter</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div id="refrash" class="modal-body">
                                                    <from class="form-horizontal" onsubmit="event.preventDefault();">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                                                <input type="text" class="form-control" id="add_funnel" placeholder="Namen erstellen"> 
                                                            </div>
                                                        </div>
                                                        <div id="checklists" class="mt-2">
                                                        </div>
                                                    </from>
                                                </div>
                                                <div class="modal-footer">
                                                    <button onclick="create_new_funnel()" type="button" class="btn btn-info waves-effect" >Erstellen</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Löschen</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>


                                    <button data-toggle="modal" data-target="#add-contact" type="button" class="btn mt-4 btn-secondary">Erstelle einen Funnel</button>
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="shift_pool_tables table table-bordered m-t-30 table-hover contact-list" data-paging="true">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Erstellungsdatum</th>
                                                    <th>Aktualisierungsdatum</th>
                                                    <th class="text-center"  >Bearbeiten</th>
                                                    <th class="text-center"  >Aktionen</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sql="SELECT * FROM `tbl_funnel_info` WHERE `hotel_id` = $hotel_id ORDER BY 1 DESC";
                                                $result = $conn->query($sql);
                                                if ($result && $result->num_rows > 0) {
                                                    $i=1;
                                                    while($row = mysqli_fetch_array($result)) { 
                                                        $f_id = $row['f_id'];
                                                        $name = $row['name'];
                                                        $create_at = $row['create_at'];
                                                        $update_at = $row['update_at'];

                                                ?>
                                                <tr id="<?php echo $i; ?>">
                                                    <td><?php echo $i; ?></td>

                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $create_at; ?></td>
                                                    <td><?php echo $update_at; ?></td>
                                                    <td class="font-size-subheading text-center"><a href="funnel_edit.php?id=<?php echo $f_id; ?>"><i class="far fa-edit"></i></a></td>

                                                    <td class="text-center" > <a onclick="d('<?php echo $f_id;?>')" href="javascript:void(0)"><i class="fas fa-trash-alt"></i></a></td>
                                                </tr>

                                                <?php $i++; } } ?>

                                            </tbody>
                                        </table>
                                        <div id="snackbar">Some text some message..</div>
                                    </div>
                                </div>
                            </div>




                        </div>
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


            function d(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'../funnel_php/funnel_del.php',
                            method:'POST',
                            data:{ id:id},
                            success:function(response){
                                console.log(response);
                                if(response == "Updated"){
                                    Swal.fire({
                                        title: 'Deleted',
                                        type: 'success',
                                        confirmButtonColor: '#3085d6',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        if (result.value) {
                                            location.replace("all_funnel.php");
                                        }
                                    })
                                }
                                else{
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text: 'Something went wrong!',
                                        footer: ''
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                                l
                            },
                        });
                    }
                })
            }


            function create_new_funnel(){

                let add_funnel=document.getElementById("add_funnel").value;

                console.log(add_funnel);
                const formData = new FormData();
                formData.append('what', 'create');
                formData.append('name', add_funnel);

                // Fetch request to send data to the server
                fetch('utill_save_funnel_code.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(result => {
                    console.log(result);
                    if(result != "error"){

                        console.log(result);
                        window.location.href = 'funnel_edit.php?id='+result;
                    }else{
                        console.log(result);
                    }
                })
                    .catch(error => {
                    console.error('Error:', error);
                });
            }


        </script>



        <script>
            $(document).ready(function(){
                $("#searchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#demo-foo-addrow tbody tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            function redirect_url(url){
                window.location.href = url;
            }
        </script>
    </body>
</html>