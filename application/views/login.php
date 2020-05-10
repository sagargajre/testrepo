<div id="login_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3c8dbc; color: white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="padding: 15px;">
                <p class="login-box-msg" style="padding: 0px 0px 10px 0px; font-size: 24px;"><b>Login</b></p>

                <form method="post" id="login_form" autocomplete="off">
                    <div class="form-group has-feedback">
                        <input type="text" id="login_username" name="username" class="form-control" placeholder="User Name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" id="login_password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <!-- /.col -->
                    <div class="form-group">
                        <button type="button" id="login_button" class="btn btn-primary btn-block btn-flat" onclick="login($(this));">Sign In</button>
                    </div>
                    <!-- /.col -->
                </form>
                <!-- /.social-auth-links -->
            <!--   <a href="<?php echo base_url(); ?>forgot_password">Reset Password.</a><br>
                         -->            </div>
            <div class="modal-footer"style="padding: 0px 15px 15px 0px;">
                <button type="button" class="btn btn-outline pull-right" data-dismiss="modal" style="border: 1px solid #3c8dbc; color: #3c8dbc;">Close</button>
            </div>
        </div>
    </div>
</div>


