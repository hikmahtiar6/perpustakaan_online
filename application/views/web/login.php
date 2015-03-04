<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : login.php ,
     All rights reserved.
*/--->

<html>
<head>
<title>Form Login Adminsitrator</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo base_url()?>plugin/administrator/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?php echo base_url()?>plugin/administrator/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url()?>plugin/administrator/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$(document).pngFix( );
	});
</script>
</head>
<body id="login-bg" onLoad="document.postform.elements['username'].focus();"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="#"></a>
	</div>
	<!-- end logo -->
        	<div class="clear"></div>
	
    <br>
    
    
    </br>
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    	<p style="font-size:20px;">
        	Silahkan Login
        </p><br><br><br>
        <form  method="post" action="<?php echo base_url()?>website/masuk_cpanel">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input autocomplete="off" style="border-radius:5px;font-size:13px;padding-bottom: 5px;" type="text" onFocus="if(this.value=='username')this.value=''"  onBlur="if(this.value=='')this.value='username'" value="username"  class="login-inp" name="username"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input style="border-radius:5px;font-size:13px;padding-bottom: 5px;" type="password" value="password"  name="password" onFocus="if(this.value=='password')this.value=''"  onBlur="if(this.value=='')this.value='password'" class="login-inp" /></td>
		</tr>
        <tr>
			<th></th>
			<td>
            </td>
		</tr>
		<tr>
			<th></th>
			<td><input  type="submit" value="Login" style="border-radius:3px;padding:5px;background:#333;color:white;border:none;" name="login"/>&nbsp;<a style="border-radius:3px;cursor: default;padding:5px;background:#333;color:white;border:none;font-size:13px;" href="<?php echo base_url()?>">Kembali</a></td>
		</tr>
		</table>
        </form>
	</div>
    
    
 	<!--  end login-inner -->
	<div class="clear"></div>
 </div>
 <!--  end loginbox -->

</div>
<!-- End: login-holder -->
</body>

</html>