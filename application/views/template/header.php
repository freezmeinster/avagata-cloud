<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Avagata Cloud Service</title>

<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/reset.css" />
<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/style.css" />
<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/messages.css" />
<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/pricing.css" />
<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/forms.css" />
<link rel="stylesheet" media="screen" HREF="<?php echo asset_url();?>/css/tables.css" />

<script SRC="<?php echo asset_url();?>/js/html5.js"></script>
<!-- jquerytools -->
<script SRC="<?php echo asset_url();?>/js/jquery.tools.min.js"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<script type="text/javascript" src="js/ie.js"></script>
<![endif]-->

<?php 
	//mendapatkan alamat url , controler mana kita sekarang
	$now = $this->uri->segment(2);
?>

</head>
<body>
    
    <div id="wrapper">
        <header id="page-header">
            <div class="wrapper">
            <div id="util-logo"></div>
                <div id="util-nav">
                    <ul>
                        <li>Logged in as admin:</li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <h1>Avagata Cloud Service</h1>
				
                <div id="main-nav">
                    <ul class="clearfix">
                        <li <?php if($now == ""){ echo "class=\"active\""; }?>><a HREF="<?php echo base_url();?>home/">Dashboard</a></li>
                        <li <?php if($now == "upgrade"){ echo "class=\"active\""; }?>><a HREF="<?php echo base_url();?>home/upgrade/">Upgrade</a></li>
						
                    </ul>
                   <div id="logo"><img src="<?php echo asset_url();?>/images/logo.png" height="50px"/></div>
              </div>
            </div>
            <div id="page-subheader">
                <div class="wrapper">
                    <h2>Dashboard</h2>
                </div>
            </div>
         
        </header>
