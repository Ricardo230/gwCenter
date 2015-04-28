<!doctype html>
<html class="" lang="spanish">
	  <head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <title>Home - General Skills</title>
	    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo base_url();?>img/system/icon-title.png" /> 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <link href="<?php echo base_url();?>bootstrap_fw/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>bootflat/bootflat/css/bootflat.min.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>bootstrap_fw/dist/css/styles.css" rel="stylesheet">

	    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	    <script src="js/vendor/modernizr.js"></script>
	    <style type="text/css">
	    	.navbar{
	    		border-radius: 0;
	    	}

	    	html,body{
			height:100%;
			background: #eee;
			}
			 
			.page-wrap{
			width: 100%;
			
			margin: auto;
			height: auto;
			min-height:100%;
			}
			 
			.page-wrap:after{
			content: ".";
			width: 100%;
			height:150px;
			display:block;
			clear:both;
			}
			 
			.footer{
			margin: -150px auto 0;
			background: #000;
			}
			.footer-nav{
				height: 120px;
			}
	    </style>
	    
	  </head>
	  <body>
		<nav class="navbar navbar-default navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <img  style="width:120px; margin:8px;" src="<?php echo base_url();?>img/gs_logo.png">
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">My grades</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Files <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">General Skills</a></li>
		            <li><a href="#">Workshops</a></li>
		            <li><a href="#">Clubs</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><img style="width:25px; margin-right:5px;" src="<?php echo base_url();?>img/user_profile/mvlo114467.jpg">Marcello Montenegro<span class="caret"></a>
		        	<ul class="dropdown-menu" role="menu">
			            <li><a href="#">Account</a></li>
			            <li><a href="#">Log Out</a></li>
		          	</ul>
		        </li>
		        <li>
		        	
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="page-wrap">
			<div class="col-md-4">
				<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>Warning!</h4><p>Change this and that and try again. <a class="alert-link">Duis mollis</a>, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p><p><a class="btn btn-warning" href="#">Take this action</a> <a class="btn btn-link" href="#">Or do this</a></p></div>
			</div>
			<div class="col-md-4">
				<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>Well done!</h4><p>Change this and that and try again. <a class="alert-link">Duis mollis</a>, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p><p><a class="btn btn-primary" href="#">Take this action</a> <a class="btn btn-link" href="#">Or do this</a></p></div>
			</div>
			<div class="col-md-4">
				<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>Heads up!</h4><p>Change this and that and try again. <a class="alert-link">Duis mollis</a>, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p><p><a class="btn btn-success" href="#">Take this action</a> <a class="btn btn-link" href="#">Or do this</a></p></div>
			</div>
		</div>


		<div class="footer">
			<div class="container">
			<div class="clearfix">
			<div class="footer-logo">
				<a href="#">COORDINACIÓN DE IDIOMAS</a>
			</div><br>
			<dl class="footer-nav">
				<dt class="nav-title">ABOUT US</dt>
				<dd class="nav-item"><a href="#">Coordinacion de idiomas</a></dd>
				<dd class="nav-item"><a href="#">Some trouble with the system</a></dd>
				<dd class="nav-item"><a href="#">FAQ's</a></dd>
			</dl>
			<dl class="footer-nav">
				<dd class="nav-item"><img style="width:100%; max-width:250px;" src="<?php echo base_url();?>img/engWs.png"></dd>
			</dl>
			<dl class="footer-nav">
				<dd class="nav-item"><img style="width:100%; max-width:250px;" src="<?php echo base_url();?>img/gs_logo.png"></dd>
			</dl>
			<dl class="footer-nav">
				<dd class="nav-item"><img style="width:100%; max-width:250px;" src="<?php echo base_url();?>img/gs_logo.png"></dd>
			</dl>
			
			<div class="footer-copyright text-center">Copyright © 2015. Raccoon Development. All rights reserved.</div>
			</div>
			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  </body>
  </html>