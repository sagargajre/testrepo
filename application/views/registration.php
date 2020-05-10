<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>     Sparsh | Registration</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php $this->load->view('common/css_links'); ?>
        <style type="text/css">
            label{
                font-weight: normal;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar">
                    <?php $this->load->view('common/logo'); ?>
                </nav>
            </header>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 89.1%;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="row">
                        <h1 style="text-align: center;">
                            Registration
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-md-2 hidden-xs"></div>
                        <!-- left column -->
                        <div class="col-md-8">
                            <div class="box">
                                <form method="post" id="registration_form" role="form">
                                    <div class="box-header with-border">
                                        <h3 class="box-title f-w-b">Personal Information</h3>
                                        <small style="color: red; font-size: 13px;float: right;">Field Mark with (*) are Compulsory</small>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group col-md-4">
                                            <label for="first_name">First Name <span style="color: red;">*</span></label>
                                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="last_name">Last name <span style="color: red;">*</span></label>
                                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <label for="mobile_number">Mobile Number <span style="color: red;">*</span></label>
                                            <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Mobile Number"
                                                   onkeyup="checkNumeric($(this));" onblur="checkMobileNumber($(this));" maxlength="10">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="registration_category">Registration Category <span style="color: red;">*</span></label>
                                            <select id="registration_category" name="registration_category" class="form-control">
                                                <option value="">Select Registration Category</option>
                                                 <option value="<?php echo CHAWL_OWNER; ?>">Chawl Owner</option>
                                                  <option value="<?php echo PROMOTER; ?>">Promoter</option>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <label for="email_id">Email Id <span style="color: red;">*</span></label>
                                            <input type="text" id="email_id" name="email_id" class="form-control" placeholder="Email Id"
                                                   onblur="checkEmailId($(this), true);">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="address">Address <span style="color: red;">*</span></label>
                                            <textarea id="address" name="address" class="form-control" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="box-header with-border">
                                        <h3 class="box-title f-w-b">Login Information</h3>
                                    </div>
                                    <div class="box-body">
                                        <input type="hidden" id="captcha_code" name="captcha_code"/>
                                        <div class="form-group col-md-4">
                                            <label for="username">User Name <span style="color: red;">*</span></label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="User Name"
                                                   onblur="checkUserNameIsExists($(this));">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="password">Password <span style="color: red;">*</span></label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                                                   onblur="checkPassword($(this));">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="confirm_password">Retype Password <span style="color: red;">*</span></label>
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Retype Password">
                                        </div>
                                        <div class="col-md-4" style="margin-top: 30px;">
                                            <span class="label label-warning" style="padding: 4px;padding-left: 25px;padding-right: 25px;font-size: 20px;letter-spacing: 3px;" id="captcha_container"></span>
                                            <button type="button" class="btn btn-success btn-sm" onclick="setCaptchaCode();" style="margin-top: -7px;margin-left: 15px;">
                                                Change
                                            </button>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="captcha_code_varification">Captcha Code <span style="color: red;">*</span></label>
                                            <input type="text" id="captcha_code_varification" name="captcha_code_varification" class="form-control" placeholder="Enter Captcha">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="button" id="save_registration_btn" class="btn btn-primary" onclick="saveUser($(this));">Submit</button>
                                        <a href="<?php echo base_url(); ?>" class="btn btn-primary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2 hidden-xs"></div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright. All Rights Reserved.</strong>
            </footer>
        </div>
        <?php
        $this->load->view('common/message_form');
        $this->load->view('common/js_links');
       $this->load->view('common/utility_template');

        ?>

        <script type="text/javascript">
           // var optionTemplate = Handlebars.compile($("#option_template").html());
            var passwordRegex = <?php echo PASSWORD_REGEX; ?>;
            var panRegex = <?php echo PAN_REGEX; ?>;
            var USER = <?php echo USER; ?>;
            var passwordValidationMessage = '<?php echo PASSWORD_VALIDATION_MESSAGE; ?>';

           // var typeOfWorkArray = <?php echo json_encode($this->config->item('type_of_work_array')); ?>;
           //renderOptionsForTwoDimensionalArray(typeOfWorkArray, 'type_of_work', 'Type of work');

            function saveUser(btnObj) {
                var userFormData = $('#registration_form').serializeFormJSON();
                var validationData = checkValidationForUser(userFormData, false);
                if (validationData != '') {
                    setCaptchaCode();
                    $('#' + validationData.field).focus();
                    showError(validationData.message);
                    return false;
                }
                btnObj.html('Processing..');
                btnObj.attr('onclick', '');
                $.ajax({
                    type: 'POST',
                    url: "create",
                    data: userFormData,
                    error: function (textStatus, errorThrown) {
                        btnObj.html('Submit');
                        btnObj.attr('onclick', 'saveUser($(this));');
                        showError('Some unexpected database error encountered due to which your transaction could not be completed');
                    },
                    success: function (data) {        
                        var parseData = JSON.parse(data);
                        if (parseData.success == false) {
                            setCaptchaCode();
                            btnObj.html('Submit');
                            btnObj.attr('onclick', 'saveUser($(this));');
                            showError(parseData.message);
                            return false;
                        }
                        messagesForm('Registration', parseData.message);
                        $('#reset_password_form').trigger('reset');
                        setTimeout(function () {
                            window.location = '<?php echo base_url() . "Home" ?>';
                        }, 1000);
                    }
                });
            }
            $('#registration_form').find('input').keypress(function (e) {
                if (e.which == 13) {
                    saveUser($('#save_registration_btn'));
                }
            });
        </script>
    </body>
</html>
