<!-- jQuery 3.3.1 -->
<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<!-- Show / Hide Password -->
<script src="<?php echo base_url(); ?>js/bootstrap-show-password.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>AdminLTE/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>AdminLTE/js/demo.js"></script>

<script src="<?php echo base_url(); ?>js/plugins/bootstrap-notify/bootstrap-notify.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/notifications.js" type="text/javascript"></script>

<!-- Custome -->
<script src="<?php echo base_url(); ?>js/sparsh/utility.js"></script>

<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree();
    })
</script>
<script>
    $(function () {
        $('#login_password').password()
                .password('focus')
                .on('show.bs.password', function (e) {
                    $('#eventLog').text('On show event');
                    $('#methods').prop('checked', true);
                }).on('hide.bs.password', function (e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function () {
            $('#login_password').password('toggle');
        });
    });
</script>

