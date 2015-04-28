<!doctype html>
<html class="" lang="spanish">
	  <head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <title>Inicio - SmartAgenda</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	    <script src="js/vendor/modernizr.js"></script>
	    <style type="text/css">
	      body{
	        background: #242425;
	      }
	      .holi{
	      	height: auto;
	      	background: #161616;
	      	border-radius: 10px;
	      	margin:0 auto;
	      	margin: 3px; 
	      	
	      	display: inline-block;
	      	direction: rtl;

	      }
	    </style>
	  </head>
	  <body>
		<nav role="navigation" class="navbar navbar-inverse">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="#" class="navbar-brand"><img width="70px" src="<?php echo base_url(); ?>img/smart.png"></a>
		    </div>
		    <!-- Collection of nav links, forms, and other content for toggling -->
		    <div id="navbarCollapse" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		            <li class="active"><a href="<?php echo site_url('contactos/index/.'); ?>">Inicio</a></li>
		        </ul>
		        <form role="search" class="navbar-form navbar-left">
		            <div class="form-group">
		                <input type="text" placeholder="Vamos! Busca un contacto!" class="form-control">
		            </div>
		            <div class="form-group">
		                <input type="submit" class="form-control btn-danger" value="¡Vamos!">
		            </div>
		        </form>
		        <div class="navbar-header navbar-right">
			        <img width="50px" src="<?php echo base_url(); ?>img/img_log.jpg">
			    </div>
			    <div class="navbar-header navbar-right">
			        <ul class="nav navbar-nav">
			        	<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Marcello Montenegro<span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="<?php echo site_url('contactos/agregarContacto/.'); ?>">Agregar contacto</a></li>
			            <li><a href="<?php echo site_url('contactos/eliminarCatalogo/.'); ?>">Eliminar contacto</a></li>
			            <li><a href="<?php echo site_url('contactos/modificarCatalogo/.'); ?>">Modificar contacto</a></li>
			            <li class="divider"></li>
			            <li><a href="#">¡Haz Magia!</a></li>
			          </ul>
			        </li>
			        </ul>
			    </div>
		    </div>
		</nav>
		<!--Aqui van los divs-->
		<div style="width:96%; background:ble; margin:0 auto; ">
		<div class="container" style="background:gry; width:100%; margin:0 auto;">
		<?php
			$i = 0;
	      	foreach ($data as $datos) {
		?>
		    <div class="holi" style=" max-width:235px; ">
		    	<div>
		    		<img src="<?php echo base_url(); echo $datos->imagen; ?>" style="padding:10px; width:230px; ">
		    	</div>
		    	<div style="text-align:center; background:yelow; color:white;">
		    		<?php echo $datos->nombre; ?>
		    	</div>
		    	<form method="POST" action="<?php echo site_url('contactos/detalles/'); ?>">
		    	<div style="text-align:center; padding:10px;">
		    		<input type="text" hidden="true" name="id" value="<?php echo $datos->id_contacto; ?>">
		    		<input type="submit" value="Mas información" style="width:210px;" class="btn btn-primary">
		    	</div>
		    	</form>
		    </div>
		<?php
			}
		?>    
	  	</div>
	  	<div class="footer" style="background:#161616; text-align:center; color:white; padding:20px; border:0;">
	  		Raccoon Development.<br>
	  		Todos los derechos reservados.<br>
	  		2015.
	  	</div>
	  	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  </body>
  </html>