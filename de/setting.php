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
        <title>Einstellungen</title>
        <!-- page CSS -->
        <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="../assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/node_modules/summernote/dist/summernote.css" rel="stylesheet" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/node_modules/dropify/dist/css/dropify.min.css">
        <link href="../assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <style>
            select{
                font-family: fontAwesome
            }
            .setting_div:hover {
                background-color: #ffffff;
            }
            .color_icon{
                color: #1dbeb7;
            }
            .black_color{
                color: black !important;
            }
        </style>

    </head>
    <body class="skin-default-dark fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Einstellungen</p>
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
                <div class="row   setting_title mobile-container-pl-75 pr-0">
                    <div class="col-md-2 p-3 ml-2 mt-2">
                        <h4 class="text-white font-size-title">Einstellungen</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid mobile-container-pl-75 pr-0">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-xlg-12 col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!-- Add Contact Popup Model -->
                                <div id="change_lan" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-language"></i> Sprache ändern</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <from class="form-horizontal" onsubmit="event.preventDefault();">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                                <select  name="change_language_model" id="change_language_model_id"  class="form-control" >
                                                                    <option value=""  disabled>Select Language</option>
                                                                    <option <?php if($language == "EN"){ echo "selected";} ?>   value="EN">English</option>
                                                                    <option <?php if($language == "IT"){ echo "selected" ;} ?> value="IT">Italian</option>
                                                                    <option <?php if($language == "DE"){ echo "selected";} ?> value="DE">German</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </from>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info waves-effect"  onclick="update_language()">Speichern</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Abbrechen</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>



                                <div id="welcome_note" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title black_color" id="myModalLabel"><i class="fa fa-sticky-note"></i> Willkommenstext anlegen<br><small>Empfohlene Lange von max. 300 Zeichen</small></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class=" nav nav-tabs profile-tab" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#welcome_en" role="tab">English</a> </li>
                                                    <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#welcome_it" role="tab">Italian</a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#welcome_de" role="tab">German </a> </li>
                                                </ul>
                                                <?php

                                                $mon_text="";
                                                $tue_text="";
                                                $wed_text="";
                                                $thu_text="";
                                                $fri_text="";
                                                $sat_text="";
                                                $sun_text="";

                                                $mon_text_it="";
                                                $tue_text_it="";
                                                $wed_text_it="";
                                                $thu_text_it="";
                                                $fri_text_it="";
                                                $sat_text_it="";
                                                $sun_text_it="";

                                                $mon_text_de="";
                                                $tue_text_de="";
                                                $wed_text_de="";
                                                $thu_text_de="";
                                                $fri_text_de="";
                                                $sat_text_de="";
                                                $sun_text_de="";


                                                $sql_welcome = "SELECT * FROM `tbl_hotel_welcome_note` WHERE hotel_id = $hotel_id";
                                                $result_welcome = $conn->query($sql_welcome);
                                                if ($result_welcome && $result_welcome->num_rows > 0) {
                                                    while($row_welcome = mysqli_fetch_array($result_welcome)) {


                                                        $mon_text= $row_welcome['monday_text'];
                                                        $tue_text= $row_welcome['tuesday_text'];
                                                        $wed_text= $row_welcome['wednesday_text'];
                                                        $thu_text= $row_welcome['thursday_text'];
                                                        $fri_text= $row_welcome['friday_text'];
                                                        $sat_text= $row_welcome['saturday_text'];
                                                        $sun_text= $row_welcome['sunday_text'];

                                                        $mon_text_it= $row_welcome['monday_text_it'];
                                                        $tue_text_it= $row_welcome['tuesday_text_it'];
                                                        $wed_text_it= $row_welcome['wednesday_text_it'];
                                                        $thu_text_it= $row_welcome['thursday_text_it'];
                                                        $fri_text_it= $row_welcome['friday_text_it'];
                                                        $sat_text_it= $row_welcome['saturday_text_it'];
                                                        $sun_text_it= $row_welcome['sunday_text_it'];

                                                        $mon_text_de= $row_welcome['monday_text_de'];
                                                        $tue_text_de= $row_welcome['tuesday_text_de'];
                                                        $wed_text_de= $row_welcome['wednesday_text_de'];
                                                        $thu_text_de= $row_welcome['thursday_text_de'];
                                                        $fri_text_de= $row_welcome['friday_text_de'];
                                                        $sat_text_de= $row_welcome['saturday_text_de'];
                                                        $sun_text_de= $row_welcome['sunday_text_de'];

                                                    }
                                                }
                                                ?>

                                                <div class="modal-body">
                                                    <from class="form-horizontal" onsubmit="event.preventDefault();">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="welcome_en" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h6 class="font-weight-title black_color mb-1">Montag <small>(Standard, wenn andere Tage leer)</small></h6>
                                                                        <input type="text" value="<?php if(trim($mon_text) == ""){echo "I wish you a nice day.";}else{echo $mon_text;} ?>" id="mon_note_id" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Dienstag</h6>
                                                                        <input type="text" value="<?php echo $tue_text; ?>" id="tue_note_id" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Mittwoch</h6>
                                                                        <input type="text" id="wed_note_id" value="<?php echo $wed_text; ?>" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Donnerstag</h6>
                                                                        <input type="text" id="thu_note_id" value="<?php echo $thu_text; ?>" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Freitag</h6>
                                                                        <input type="text" id="fri_note_id" value="<?php echo $fri_text; ?>" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Samstag</h6>
                                                                        <input type="text" id="sat_note_id" value="<?php echo $sat_text; ?>" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Sonntag</h6>
                                                                        <input type="text" id="sun_note_id" value="<?php echo $sun_text; ?>" class="form-control mb-2" placeholder="Text einfügen" maxlength="300">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="welcome_it" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h6 class="font-weight-title black_color mb-1">Montag <small>(standard, wenn andere tage leer.)</small></h6>
                                                                        <input type="text" id="mon_note_id_it" value="<?php if(trim($mon_text_it) == ""){echo "Ti auguro una buona giornata.";}else{echo $mon_text_it;} ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Dienstag</h6>
                                                                        <input type="text" id="tue_note_id_it" value="<?php echo $tue_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Mittwoch</h6>
                                                                        <input type="text" id="wed_note_id_it" value="<?php echo $wed_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Donnerstag</h6>
                                                                        <input type="text" id="thu_note_id_it" value="<?php echo $thu_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Freitag</h6>
                                                                        <input type="text" id="fri_note_id_it" value="<?php echo $fri_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Samstag</h6>
                                                                        <input type="text" id="sat_note_id_it" value="<?php echo $sat_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Sonntag</h6>
                                                                        <input type="text" id="sun_note_id_it" value="<?php echo $sun_text_it; ?>" class="form-control mb-2" placeholder="Geben Sie Note auf Italienisch ein" maxlength="300">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="welcome_de" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h6 class="font-weight-title black_color mb-1">Montag <small>(standard, wenn andere tage leer.)</small></h6>
                                                                        <input type="text" id="mon_note_id_de" value="<?php if(trim($mon_text_de) == ""){echo "ich wünsche Dir einen schönen Tag.";}else{echo $mon_text_de;} ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Dienstag</h6>
                                                                        <input type="text" id="tue_note_id_de" value="<?php echo $tue_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Mittwoch</h6>
                                                                        <input type="text" id="wed_note_id_de" value="<?php echo $wed_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Donnerstag</h6>
                                                                        <input type="text" id="thu_note_id_de" value="<?php echo $thu_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Freitag</h6>
                                                                        <input type="text" id="fri_note_id_de" value="<?php echo $fri_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Samstag</h6>
                                                                        <input type="text" id="sat_note_id_de" value="<?php echo $sat_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                        <h6 class="font-weight-title black_color mb-1">Sonntag</h6>
                                                                        <input type="text" id="sun_note_id_de" value="<?php echo $sun_text_de; ?>" class="form-control mb-2" placeholder="Hinweis auf Deutsch eingeben" maxlength="300">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </from>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info waves-effect"  onclick="update_welcome_note()">Speichern</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Abbrechen</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>


                                <div class="tab-pane active" role="tabpanel" id="list">
                                    <div class="row pt-4 ml-4 mm-0 wm-96">
                                        <?php if($Edit_users_teams_departments == 1 || $Edit_rules == 1 || $usert_id == 1){ ?>
                                        <div class="p-4 col-lg-5 col-xlg-5 col-md-5 div-white-background">
                                            <div class="row">
                                                <div  class="col-lg-12 col-xlg-12 col-md-12 mr-2 black_color">
                                                    <h3 class="font-weight-title">Benutzer &amp; Teams</h3>
                                                </div>

                                                <?php if($Edit_users_teams_departments == 1 || $usert_id == 1){ ?>
                                                <div  class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer" onclick="setting('user')">
                                                    <div class="row"> 
                                                        <div  class="col-lg-2 col-xl-2 col-md-3 color_icon">
                                                            <i class="mdi mdi-account font-size-big"></i>
                                                        </div>
                                                        <div  class="col-lg-10 col-xlg-10 col-md-9 ">
                                                            <h4 class="pt-3 black_color" >Benutzer verwalten</h4>
                                                            <h6>Benutzer erstellen,bearbiten und löschen</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                     onclick="setting('teams')">
                                                    <div class="row"> 
                                                        <div  class="col-lg-2 col-xl-2 col-md-3 color_icon">
                                                            <i class="mdi mdi-account-multiple font-size-big"></i>
                                                        </div>
                                                        <div  class="col-lg-10 col-xlg-10 col-md-9">
                                                            <h4 class="pt-3 black_color" >Teams/Abteilungen verwalten</h4>
                                                            <h6>Team/Abteilung erstellen, bearbeiten und löschen</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } if($Edit_rules == 1 || $usert_id == 1){ ?>

                                                <div  class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                     onclick="setting('roles')">
                                                    <div class="row"> 
                                                        <div  class="col-lg-2 col-xl-2 col-md-3 color_icon">
                                                            <i class="mdi mdi-key font-size-big"></i>
                                                        </div>
                                                        <div  class="col-lg-10 col-xlg-10 col-md-9">
                                                            <h4 class="pt-3 black_color" >Regeln verwalten</h4>
                                                            <h6>Benutzerregel erstellen, bearbeiten und löschen</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } ?>




                                            </div>

                                        </div>

                                        <?php } ?>

                                        <div class="col-lg-5 col-xlg-5 col-md-5 div-white-background p-4 ml-3 mm-0 mtbm-20">
                                            <div  class="col-lg-12 col-xlg-12 col-md-12 mr-2">
                                                <h3 class="font-weight-title black_color">Allgemein</h3>
                                            </div>
                                            <?php if($Edit_rules == 1 || $usert_id == 1){ ?>

                                            <div class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                 onclick="open_model_welcome()">
                                                <div class="row"> 
                                                    <div  class="pt-2 col-lg-2 col-xl-2 col-md-3 color_icon">
                                                        <i class="far fa-edit font-size-big"></i>
                                                    </div>
                                                    <div  class="col-lg-10 col-xlg-10 col-md-9">
                                                        <h4 class="pt-3 black_color" >Herzlich willkommen Notiz</h4>
                                                        <h6>Legen Sie die Willkommensnotiz für den Benutzer fest</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--                                                Change Language-->
                                            <?php } if($usert_id == 1){ ?>

                                            <div  class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                 onclick="open_model()">
                                                <div class="row"> 
                                                    <div  class="pt-3 col-lg-2 col-xl-2 col-md-3  color_icon">
                                                        <i class="fa fa-language font-size-big"></i>
                                                    </div>
                                                    <div  class="col-lg-10 col-xlg-10 col-md-9 ">
                                                        <h4 class="pt-3 black_color" >Sprache ändern</h4>
                                                        <h6>Ändern Sie die Sprache des Hotels</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } if($usert_id == 1){ ?>

                                            <div class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                 onclick="setting('trash')">
                                                <div class="row"> 
                                                    <div  class="col-lg-2 col-xl-2 col-md-3 color_icon">
                                                        <i class="mdi mdi-delete-variant font-size-big"></i>
                                                    </div>
                                                    <div  class="col-lg-10 col-xlg-10 col-md-9">
                                                        <h4 class="pt-3 black_color" >Papierkorb</h4>
                                                        <h6>Gelöschte Dateien wiederherstellen</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>
                                            <div  class="col-lg-12 col-xlg-12 col-md-12 setting_div pointer"
                                                 onclick="setting('logs')">
                                                <div class="row"> 
                                                    <div  class="pt-3 col-lg-2 col-xl-2 col-md-3 color_icon">
                                                        <i class="far fa-list-alt font-size-big"></i>
                                                    </div>
                                                    <div  class="col-lg-10 col-xlg-10 col-md-9">
                                                        <h4 class="pt-3 black_color" >Benutzerprotokoll</h4>
                                                        <h6>Siehe Benutzerprotokollaktivität</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <?php include 'util_right_nav.php'; ?>
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
        <!--stickey kit -->
        <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>
        <!-- Sweet-Alert  -->
        <script src="../assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="../assets/node_modules/sweetalert2/sweet-alert.init.js"></script>
        <script src="../assets/node_modules/dropzone-master/dist/dropzone.js"></script>

        <script>

            function setting(settings) {
                if(settings == "teams"){
                    window.location.href = "create_team_departments.php"; 
                }else if(settings == "user"){
                    window.location.href = "create_users.php"; 
                }else if (settings == "roles"){
                    window.location.href = "create_manage_rules.php"; 
                }else if (settings == "logs"){
                    window.location.href = "userlog.php"; 
                }else if (settings == "trash"){
                    window.location.href = "trash.php"; 
                }
            }

            function open_model() {
                $("#change_lan").modal();

            }

            function open_model_welcome() {
                $("#welcome_note").modal();
            }

            function update_welcome_note(){
                var mon_note = document.getElementById('mon_note_id').value;
                var tue_note = document.getElementById('tue_note_id').value;
                var wed_note = document.getElementById('wed_note_id').value;
                var thu_note = document.getElementById('thu_note_id').value;
                var fri_note = document.getElementById('fri_note_id').value;
                var sat_note = document.getElementById('sat_note_id').value;
                var sun_note = document.getElementById('sun_note_id').value;

                var mon_note_it = document.getElementById('mon_note_id_it').value;
                var tue_note_it = document.getElementById('tue_note_id_it').value;
                var wed_note_it = document.getElementById('wed_note_id_it').value;
                var thu_note_it = document.getElementById('thu_note_id_it').value;
                var fri_note_it = document.getElementById('fri_note_id_it').value;
                var sat_note_it = document.getElementById('sat_note_id_it').value;
                var sun_note_it = document.getElementById('sun_note_id_it').value;

                var mon_note_de = document.getElementById('mon_note_id_de').value;
                var tue_note_de = document.getElementById('tue_note_id_de').value;
                var wed_note_de = document.getElementById('wed_note_id_de').value;
                var thu_note_de = document.getElementById('thu_note_id_de').value;
                var fri_note_de = document.getElementById('fri_note_id_de').value;
                var sat_note_de = document.getElementById('sat_note_id_de').value;
                var sun_note_de = document.getElementById('sun_note_id_de').value;


                $.ajax({
                    url:'util_update_welcome_notes.php',
                    type: 'post',
                    data:{mon_note_e:mon_note,tue_note_e:tue_note,wed_note_e:wed_note,thu_note_e:thu_note,fri_note_e:fri_note,sat_note_e:sat_note,sun_note_e:sun_note,mon_note_it_e:mon_note_it,tue_note_it_e:tue_note_it,wed_note_it_e:wed_note_it,thu_note_it_e:thu_note_it,fri_note_it_e:fri_note_it,sat_note_it_e:sat_note_it,sun_note_it_e:sun_note_it,mon_note_de_e:mon_note_de,tue_note_de_e:tue_note_de,wed_note_de_e:wed_note_de,thu_note_de_e:thu_note_de,fri_note_de_e:fri_note_de,sat_note_de_e:sat_note_de,sun_note_de_e:sun_note_de},
                    success:function(response){
                        if(response == "1"){
                            Swal.fire({
                                title: 'Willkommenstext aktualisiert',
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value) {
                                    $("#welcome_note").modal('hide');
                                }
                            });
                        } else{

                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Etwas ist schief gelaufen!',
                                footer: ''
                            });
                        }

                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    },
                });

            }


            function update_language(){
                var selected_language = document.getElementById('change_language_model_id').value;
                $.ajax({
                    url:'util_update_language.php',
                    type: 'post',
                    data:{selected_language:selected_language},
                    success:function(response){
                        if(response == "1"){
                            Swal.fire({
                                title: 'Sprache aktualisiert',
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value) {
                                    $("#change_lan").modal('hide');
                                    if(selected_language == 'EN'){
                                        location.replace("../setting.php");
                                    } else if (selected_language == 'IT'){
                                        location.replace("../it/setting.php");
                                    } else if (selected_language == 'DE') {
                                        location.replace("setting.php");
                                    }

                                }
                            });
                            myDropzone.processQueue();
                        } else{

                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Etwas ist schief gelaufen!',
                                footer: ''
                            });
                        }

                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    },
                });

            }
        </script>
    </body>

</html>