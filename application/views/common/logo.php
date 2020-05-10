<style>
    /*body { 
    background: #ccc;
    font-family: helvetica, arial, serif;
    font-size: 13px;
    text-transform: uppercase;
    text-align: center;
    }*/

    .wrap {
        display: inline-block;
        -webkit-box-shadow: 0 0 70px #fff;
        -moz-box-shadow: 0 0 70px #fff;
        box-shadow: 0 0 70px #fff;
        /*margin-top: 20px;*/
    }

    /* a little "umph" */
    /*.decor {
    background: #6EAF8D;
    background: -webkit-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
    background: -moz-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
    background: -o-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
    background: linear-gradient(left, white 50%, #6EAF8D 50%);
    background-size: 50px 25%;;
    padding: 2px;
    display: block;
    }*/

    /*a {
    text-decoration: none;
    color: #fff;
    display: block;
    }*/

    ul {
        list-style: none;
        position: relative;
        text-align: left;
    }

    li {
        float: left;
    }

    /* clear'n floats */
    ul:after {
        clear: both;
    }

    ul:before,
    ul:after {
        content: " ";
        display: table;
    }

    nav {
        position: relative;
        /*background: #2B2B2B;
        background-image: -webkit-linear-gradient(bottom, #2B2B2B 7%, #333333 100%); 
        background-image: -moz-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
        background-image: -o-linear-gradient(bottom, #2B2B2B 7%, #333333 100%); 
        background-image: linear-gradient(bottom, #2B2B2B 7%, #333333 100%); 
        text-align: center;*/
        letter-spacing: 1px;
        /* text-shadow: 1px 1px 1px #0E0E0E;*/
        /*  -webkit-box-shadow: 2px 2px 3px #888;*/
        /* -moz-box-shadow: 2px 2px 3px #888;*/
        /* box-shadow: 2px 2px 3px #888;*/
        /*border-bottom-right-radius: 8px;*/
        /* border-bottom-left-radius: 8px;*/
    }

    /* prime */
    ul.primary li a {
        display: block;
        padding: 10px 20px;
        border-right: 1px solid #3D3D3D;
    }

    ul.primary li:last-child a {
        border-right: none;
    }

    ul.primary li a:hover {

        color: #000;
    }

    /* subs */
    ul.sub {
        position: absolute;
        z-index: 200;
        box-shadow: 2px 2px 0 #BEBEBE;
        width: 35%;
        display: none;
    }

    ul.sub li {
        float: none;
        margin-left: 10px;
        margin-right: 10px;
    }

    ul.sub li a {
        border-bottom: 1px dotted #ccc;
        border-right: none;
        color: #000;
        padding: 10px 0px;
    }

    ul.sub li:last-child a {
        border-bottom: none;
    }

    ul.sub li a:hover {
        color: #000;
        background: #eeeeee;
    }

    /* sub display*/
    ul.primary li:hover ul {
        display: block;
        background: #fff;
    }

    /* keeps the tab background white */
    ul.primary li:hover a {
        background: #fff;
        color: #666;
        text-shadow: none;
    }

    ul.primary li:hover > a{
        color: #000;
    } 

    @media only screen and (max-width: 600px) {
        .decor {
            padding: 3px;
        }

        .wrap {
            width: 100%;
            margin-top: 0px;
        }

        li {
            float: none;
        }

        ul.primary li:hover a {
            background: none;
            color: #8B8B8B;
            text-shadow: 1px 1px #000;
        }

        ul.primary li:hover ul {
            display: block;
            background: #272727;
            color: #fff;
        }

        ul.sub {
            display: block;  
            position: static;
            box-shadow: none;
            width: 100%;
        }

        ul.sub li a {
            background: #272727;
            border: none;
            color: #8B8B8B;
        }

        ul.sub li a:hover {
            color: #ccc;
            background: none;
        }
    }
</style>
<div style="background: white;z-index: 999999;font-size: 16px;font-weight: 600;" class="logo-class">
    <img src="<?php echo base_url(); ?>images/logo/logo4.ico">
    <div class="consol-port hidden-xs">
        <a href='javascript:void(0);'>
            <strong title=":: SPARSH ::">SPARSH</strong>
            <span>Initiated by Labour Department</span>
            <span>U.T. Administration of Daman & Diu.</span>
            <span>Government of India</span>
        </a>
    </div>

    <div class="wrap hidden-xs" style="float:right;margin-top:20px;">
        <span class="decor"></span>
        <nav>
            <ul class="primary">
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onclick="$('#login_model').modal('show'); $('.menu-bar-list').removeClass('active');">Login</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Registration/">Registration</a>
            
                </li>
                <li>
                     <a href="<?php echo base_url(); ?>forgot_password">Reset Password</a></li> 
                </li>
            </ul>
        </nav>
    </div>
</div>

<nav class="navbar navbar-inverse menu-bar">
    <div class="container-fluid container-fluid-menubar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu-navbar">
            <ul class="nav navbar-nav">
                <li class="menu-bar-list <?php echo isset($is_active_home) ? $is_active_home : '' ?>"><a href="<?php echo base_url(); ?>">
                        <i class="fa fa-home"></i> Home</a>
                </li>
                <li><a href="javascript:void(0);" onclick="$('#login_model').modal('show'); $('.menu-bar-list').removeClass('active');">
                        <i class="fa fa-sign-in"></i> Login</a>
                </li>
                <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">
                        <i class="fa fa-user-plus"></i> Registration</a>
                    <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                        <li><a href="<?php echo base_url(); ?>registration/company">&emsp;<i class="fa fa-user"></i> Company</a></li>
                        <li><a href="<?php echo base_url(); ?>registration/Contractor">&emsp;<i class="fa fa-user"></i> Contractor</a></li>
                    </ul>
                </li>
                <li class="menu-bar-list <?php echo isset($is_active_r_password) ? $is_active_r_password : '' ?>">
                    <a href="<?php echo base_url(); ?>forgot_password"><i class="fa fa-key"></i> Reset Password</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

