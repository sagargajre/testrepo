<?php $base_url = base_url(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>USDD | Login</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php $this->load->view('common/css_links', array('base_url' => $base_url)); ?>
        <style type="text/css">
            img{
                max-height: 500px;
            }
            .small-box .icon {
                top: 0px;
            }
            @media (min-width: 768px){
                .navbar-nav>li>a {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    line-height: 20px;
                }
            }
        </style>
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <header class="main-header">
            <nav class="navbar"></nav>
           <?php $this->load->view('common/logo', array('is_active_home' => 'active')); ?>
        </header>
        <div class="body-container" style="margin-top: 94px;">
            <div id="home_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#home_slider" data-slide-to="0" class="active"></li>
                    <li data-target="#home_slider" data-slide-to="1"></li>
                    <li data-target="#home_slider" data-slide-to="2"></li>
                    <li data-target="#home_slider" data-slide-to="2"></li>
                </ol> -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo $base_url; ?>images/L1.jfif" alt="Los Angeles" style="width:100%;  ">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo $base_url; ?>images/L2.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo $base_url; ?>images/L3.jpeg" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo $base_url; ?>images/L4.jpg" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#home_slider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home_slider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </body>
    <?php $this->load->view('login'); ?>
    <?php $this->load->view('common/footer.php'); 
    	  $this->load->view('common/js_links', array('base_url' => $base_url)); ?>
    <script type="text/javascript">
        $('#home_slider').carousel({
            interval: 3000,
            cycle: true
        });

        var baseUrl = '<?php echo base_url(); ?>';
        var tempTypeInSession = false;
        
    </script>
</html> 
