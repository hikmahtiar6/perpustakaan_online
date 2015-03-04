<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : header.php ,
     All rights reserved.
*/--->
	<?php ob_start(); 
	error_reporting(E_ALL^E_NOTICE)
	?>
    <?php date_default_timezone_set("Asia/Jakarta");?>
    <html>
    <head>
    <link rel="shortcut icon" href="<?php echo base_url()?>plugin/administrator/images/favicon.ico" type="image/x-icon">
    <title>Library System Administrator</title>
    <title></title>
        
        
        <link rel="stylesheet" href="<?php echo base_url()?>plugin/administrator/css/screen.css" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="<?php echo base_url()?>plugin/administrator/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url()?>plugin/js/ckeditor/ckeditor.js"></script>
        
        <script src="<?php echo base_url()?>plugin/js/waktu.js" type="text/javascript"></script>
     
        <!-- Custom jquery scripts -->
        <script src="<?php echo base_url()?>plugin/administrator/js/jquery/custom_jquery.js" type="text/javascript"></script>
         
        <!-- Tooltips -->
        <script src="<?php echo base_url()?>plugin/administrator/js/jquery/jquery.tooltip.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>plugin/administrator/js/jquery/jquery.dimensions.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('a.info-tooltip ').tooltip({
                track: true,
                delay: 0,
                fixPNG: true, 
                showURL: false,
                showBody: " - ",
                top: -35,
                left: 5
            });
        });
        </script>
        
        <script type="text/javascript" src="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        
        


    </head>
    
    <body onLoad="ajax()"> 
    <!-- Start: page-top-outer -->
    <div id="page-top-outer">    
    
    <!-- Start: page-top -->
    <div id="page-top">
    
        <!-- start logo -->
        <div id="logo">
        <a href="#"><img src="<?php echo base_url()?>plugin/administrator/images/shared/logo.png" width="200" height="45" alt="" /></a>
        </div>
        <!-- end logo -->
        
        <!--  start top-search -->
        <div id="top-search">
        </div>
        <!--  end top-search -->
        <div class="clear"></div>
    
    </div>
    <!-- End: page-top -->
    
    </div>
    <!-- End: page-top-outer -->
        
    <div class="clear">&nbsp;</div>
     
    <!--  start nav-outer-repeat................................................................................................. START -->
    <div class="nav-outer-repeat"> 
    <!--  start nav-outer -->
    <div class="nav-outer"> 
    
            <!-- start nav-right -->
            <div id="nav-right">
            
                <div class="nav-divider">&nbsp;</div>
                <div class="showhide-account"><img src="<?php echo base_url()?>plugin/administrator/images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
                <div class="nav-divider">&nbsp;</div>
                <a href="<?php echo base_url()?>administrator/logout" name="log" id="logout" onClick="return confirm('Apakah Anda Yakin Ingin Keluar?')"><img src="<?php echo base_url()?>plugin/administrator/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
                <div class="clear">&nbsp;</div>
            
                <!--  start account-content -->	
                <div class="account-content">
                <div class="account-drop-inner">
                    <a href="" id="acc-settings">Settings</a>
                    <div class="clear">&nbsp;</div>
                    <div class="acc-line">&nbsp;</div>
                    <a href="" id="acc-inbox">Inbox</a>
                    <div class="clear">&nbsp;</div>
                </div>
                </div>
                <!--  end account-content -->
            
            </div>
            <!-- end nav-right -->
    
    
            <!--  start nav -->
            <div class="nav">
            <div class="table">
