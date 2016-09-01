<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Carrental Admin Panel Giriş</title>
<link rel="stylesheet" href="<?php echo base_url();?>/template/carrental/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?php echo base_url();?>/template/carrental/js/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url();?>/template/carrental/js/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url();?>/template/carrental/js/jquery.pngFix.pack.js" type="text/javascript"></script>
<style type="text/css">
	#login-bg	{
	background: url(<?php echo base_url();?>/template/carrental/images/login_bg.jpg) repeat top center;
	}
	#login-holder	{
	margin: 0px auto 0 auto;
	width: 508px;
	}
#loginbox	{
	background: url(<?php echo base_url();?>/template/carrental/images/loginbox_bg.png) no-repeat;
	font-size: 12px;
	height: 212px;
	line-height: 12px;
	padding-top: 60px;
	position: relative;
	width: 508px;
	}

#login-inner	{
	color: #161616;
	font-family: Tahoma;
	font-size: 13px;
	line-height: 12px;
	margin: 0 auto;
	width: 310px;
	}
#login-inner label	{
	color: #161616;
	cursor: pointer;
	font-family: Tahoma;
	font-weight: bold;
	line-height: 12px;
	padding-left: 10px;
	 
	}
 .checkbox-size	{
	width:13px;
	height:13px;
	margin: 5px 0;
	 
	}	
#login-inner th	{
	padding: 0 0 6px 0;
	text-align: left;
	width: 95px;
	}
#login-inner td	{
	padding: 0 0 6px 0;
	}
.login-inp	{
	background: url(<?php echo base_url();?>/template/carrental/images/inp_login.gif) no-repeat;
	border: none;
	color: #fff;
	font-size: 16px;
	height: 28px;
	padding: 6px 6px 0 10px;
	width: 204px;
	}
#logo-login	{
	float: left;
	height: 35px;
	margin: 145px 0 0 15px;
	}
a.forgot-pwd	{
	bottom: 30px;
	color: #161616;
	font-family: Tahoma;
	font-size: 11px;
	font-weight: bold;
	line-height: 12px;
	position: absolute;
	right: 40px;
	}
a:hover.forgot-pwd	{
	color: #fff;
	}
#forgotbox-text	{
	color: #161616;
	font-family: Tahoma;
	font-size: 13px;
	font-weight: bold;
	line-height: 12px;
	margin: 0 auto 40px auto;
	width: 380px;
	}
#forgot-inner	{
	color: #161616;
	font-family: Tahoma;
	font-size: 13px;
	line-height: 12px;
	margin: 0 auto;
	width: 330px;
	}
#forgot-inner label	{
	color: #161616;
	cursor: pointer;
	font-family: Tahoma;
	font-weight: bold;
	line-height: 12px;
	padding-left: 10px;
	}
#forgot-inner th	{
	padding: 0 0 6px 0;
	text-align: left;
	width: 110px;
	}
#forgot-inner td	{
	padding: 0 0 6px 0;
	}
	a.back-login	{
	background: url(<?php echo base_url();?>/template/carrental/images/icon_back_login.gif) no-repeat 0 4px;
	bottom: 30px;
	color: #161616;
	font-family: Tahoma;
	font-size: 11px;
	font-weight: bold;
	line-height: 12px;
	padding: 0 0 0 10px;
	position: absolute;
	right: 40px;
	}
a:hover.back-login	{
	color: #fff;
	}
.submit-login	{
	background: url(<?php echo base_url();?>/template/carrental/images/submit_login.gif) no-repeat;
	border: none;
	cursor: pointer;
	display: block;
	height: 29px;
	text-indent: -3000px;
	width: 73px;
	}
.submit-login:hover	{
	background: url(<?php echo base_url();?>/template/carrental/images/submit_login.gif) no-repeat 0 -29px;
	}

</style>

</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner-->
	<div id="login-inner">

		<form id="form" method="POST" action="<?php echo base_url('auth/giris'); ?>">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			GİRİŞ İÇİN USERNAME: Admin  -  PASSWORD: 123
			 
		</tr>
		<br><br>
		<tr>
			<th>Username</th>
			<td><input type="text"  class="login-inp" id="username" name="username" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" value="************"  onfocus="this.value=''" class="login-inp" id="parola" name="parola" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"> </td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" class="submit-login" />
		</td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end login-inner -->
	  
 </div>
 <!--  end loginbox -->
 
</div>
<!-- End: login-holder -->
</body>
</html>