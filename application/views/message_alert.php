<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sparsh| <?php echo $title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php $this->load->view('common/css_links'); ?>

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
                    <div class="col-md-3"></div>
                    <div class="callout callout-success col-md-6">
                        <h4><?php echo $title; ?></h4>
                        <p><?php echo $message; ?></p>
                        <p>Click here to <a href="<?php echo base_url(); ?>"><b>Home</b>.</a></p>
                    </div>
                    <div class="col-md-3"></div>
                </section>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2017. All Rights Reserved.</strong>
            </footer>
        </div>

        <?php
        $this->load->view('common/js_links');
        ?>
    </body>
</html>
