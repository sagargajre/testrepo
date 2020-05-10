<!DOCTYPE html>
<?php $base_url = base_url(); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPARSH </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>AdminLTE/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>js/plugins/select2/select2.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>js/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>js/plugins/datatables/buttons.dataTables.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="<?php echo $base_url; ?>AdminLTE/css/skins/_all-skins.min.css">

            <?php
            $this->load->view('common/js_links');
            $this->load->view('common/utility_template');
            ?>

            <script src="<?php echo $base_url; ?>js/plugins/select2/select2.full.min.js" type="text/javascript"></script>
            <script src="<?php echo $base_url; ?>js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

            <script src="<?php echo $base_url; ?>js/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="<?php echo $base_url; ?>js/dataTables.bootstrap.min.js" type="text/javascript"></script>
            <script src="<?php echo $base_url; ?>js/plugins/datatables/date-eu.js" type="text/javascript"></script>

            <script src="<?php echo $base_url; ?>js/underscore.js" type="text/javascript"></script>
            <script src="<?php echo $base_url; ?>js/backbone.js" type="text/javascript"></script>
            <script src="<?php echo $base_url; ?>js/handlebars-v4.1.2.js" type="text/javascript"></script>

            <script type="text/javascript">

                function show1(){
                  document.getElementById('div1').style.display ='none';
              }
              function show2(){
                  document.getElementById('div1').style.display = 'block';
              }


              var baseUrl = '<?php echo base_url(); ?>';
              var passwordRegex = <?php echo PASSWORD_REGEX; ?>;
              var passwordValidationMessage = '<?php echo PASSWORD_VALIDATION_MESSAGE; ?>';
              var isChecked = <?php echo IS_CHECKED; ?>;
              var tempIdInSession = <?php echo get_from_session('temp_id_for_sparsh'); ?>;

              var deleteTemplate = Handlebars.compile($("#delete_template").html());
              var deleteIconTemplate = Handlebars.compile($("#delete_icon_template").html());
              var addTemplate = Handlebars.compile($("#add_template").html());
              var editTemplate = Handlebars.compile($("#edit_template").html());
              var editIconTemplate = Handlebars.compile($("#edit_icon_template").html());
              var viewTemplate = Handlebars.compile($("#view_template").html());
              var viewIconTemplate = Handlebars.compile($("#view_icon_template").html());
              var submitTemplate = Handlebars.compile($("#submit_template").html());
              var cancelTemplate = Handlebars.compile($("#cancel_template").html());
              var optionTemplate = Handlebars.compile($("#option_template").html());
              var spinnerTemplate = Handlebars.compile($("#spinner_template").html());
              var spinnerIconTemplate = Handlebars.compile($("#spinner_icon_template").html());
              var pdfTemplate = Handlebars.compile($("#pdf_template").html());
              var certificateIconTemplate = Handlebars.compile($("#certificate_icon_template").html());
              var pdfIconTemplate = Handlebars.compile($("#pdf_icon_template").html());
              var selectTemplate = Handlebars.compile($("#select_template").html());
              var selectIconTemplate = Handlebars.compile($("#select_icon_template").html());
              var searchTemplate = Handlebars.compile($("#search_template").html());
              var excelTemplate = Handlebars.compile($("#excel_template").html());
              var revertTemplate = Handlebars.compile($("#revert_template").html());
              var revertIconTemplate = Handlebars.compile($("#revert_icon_template").html());
              var noRecoredTemplate = Handlebars.compile($("#no_recored_template").html());
              var paymentTemplate = Handlebars.compile($("#payment_template").html());
              var approveTemplate = Handlebars.compile($("#approve_template").html());
              var rejectIconTemplate = Handlebars.compile($("#reject_icon_template").html());
              var remarkIconTemplate = Handlebars.compile($("#remark_icon_template").html());
              var defaultProfilePicture = '<?php echo DEFAULT_PROFILE_PICTURE; ?>';
              var ADMIN = <?php echo ADMIN; ?>;
              var USER = <?php echo USER; ?>;



              var accountActivated = <?php echo ACCOUNT_ACTIVATED; ?>;
              var accountDeactivated = <?php echo ACCOUNT_DEACTIVATED; ?>;



              var accountStatusArray = <?php echo json_encode($this->config->item('account_status_array')); ?>;
              var lock = <?php echo LOCK; ?>;
              var unlock = <?php echo UNLOCK; ?>;

              var lockUserMessage = '<?php echo LOCK_USER_MESSAGE; ?>';
              var accountDeactivateMessage = '<?php echo ACCOUNT_DEACTIVATE_MESSAGE; ?>';

              




          </script> 
          <style type="text/css">
            .session_entity_name{
                left: 50px;
            }
            .navbar-nav>.user-menu>.dropdown-menu {
                width: 299px;
            }
            .select2-container :focus {
                border: 1px solid #3c8dbc;
                box-shadow: inset 0 2px 3px 0 rgba(0,0,0,.06);
            }
            .select2-selection__rendered :focus{
                border: 1px solid #3c8dbc;
            }
            .select2-container--default .select2-selection--single {
                border-radius: 0px; 
            }
            .select2-container .select2-selection--single .select2-selection__rendered {
                padding-left: 0px;
                padding-right: 5px;
            }
            .table tr:hover{
                background-color: #bbf9c0;
            }
            .deleted-table tr:hover{
                background-color: #f9a9a9;
            }
            body {
              font-family: arial;
          }
          .hide {
              display: none;
          }
          p {
              font-weight: bold;
          }


      </style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="main#home" class="logo hidden-xs">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SPASH</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>SPARSH</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu"> 
                                <?php $name = get_from_session('name'); ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo $base_url; ?>AdminLTE/img/user2-160x160.jpg" class="user-image" alt="User Image">

                                    <span class="hidden-xs" id="span_home_username"><?php echo $name; ?></span>

                                    <span class="hidden-xs" id="span_home_username"> 


                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo $base_url; ?>AdminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p class="home_username">
                                            <span class="hidden-xs" id="span_home_username"><?php echo $name; ?></span>

                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">

                                       <div class="pull-left" style="margin-right:5px">
                                        <a href="main#home/profile/<?php echo get_from_session('temp_id_for_sparsh'); ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                  <!--      <div class="pull-left">
                                      <a href="main#change_password" class="btn btn-default btn-flat">Change Password</a>
                                  </div> -->
                                  <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="default_model" class="modal fade" >
        <div class="modal-dialog" id="model_dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3c8dbc; color: white;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="default_model_title" class="modal-title f-w-b"></h4>
                    </div>
                    <div id="default_model_body_container" class="modal-body" style="padding: 5px;">
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common/sidebar.php'); ?>