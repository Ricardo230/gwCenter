<!doctype html>
<html class="" lang="spanish">
	  <head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <title>Detalles contacto - SmartAgenda</title>
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
	      	margin:10px; 

	      }
	      .inputs{
	      	background:black; 
	      	border:0; 
	      	color:white;
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
		<div style="width:100%; background:blu; margin:0 auto; min-width:300px;">
		<div class="container" style="background:#161616; width:60%; min-width:318px; padding:10px; color:white;">
			<div style="background: ble; width:100%; max-width:; min-width:300px; maring:0 auto;">
				<?php
					$i = 0;
			      	foreach ($data as $datos) {
				?>
				<div style="width:230px; margin:0 auto;">
					<img style="width:230px;" src="<?php echo base_url(); echo $datos->imagen; ?>">
				</div>
				<form method="POST" action="<?php echo site_url('contactos/agregarContacto/'); ?>" enctype="multipart/form-data" autocomplete="off">
				    <div class="form-group">
				        <label for="inputLastName">Apellido paterno</label>
				        <input type="text" class="form-control" class="inputs" style="background:#242425; border:0; color:white;" disabled="true" name="ap" value="<?php echo $datos->ap; ?>" >
				    </div>
				    <div class="form-group">
				        <label for="inputLastName">Apellido materno</label>
				        <input type="text" class="form-control" style="background:#242425; border:0; color:white;" disabled="true" name="am" value="<?php echo $datos->am; ?>">
				    </div>
				    <div class="form-group">
				        <label for="inputName">Nombre</label>
				        <input type="text" class="form-control"style="background:#242425; border:0; color:white;" disabled="true"  name="nombre" value="<?php echo $datos->nombre; ?>">
				    </div>
				    <div class="form-group">
				        <label for="inputPassword">Telefono</label>
				        <input type="number" class="form-control" style="background:#242425; border:0; color:white;" disabled="true" name="phone" value="<?php echo $datos->phone; ?>">
				    </div>
				    <div class="form-group">
				        <label for="inputName">Dirección</label>
				        <input type="text" class="form-control" style="background:#242425; border:0; color:white;" disabled="true" name="direccion" value="<?php echo $datos->direccion; ?>">
				    </div>
				    <div class="form-group">
				        <label for="inputName">Correo electronico</label>
				        <input type="email" class="form-control" style="background:#242425; border:0; color:white;" disabled="true" name="email" value="<?php echo $datos->email; ?>">
				    </div>
				    
				</form>
				<form action="<?php echo site_url('contactos/index/'); ?>" style="float:right;">
				   	<button type="submit" class="btn btn-success" >Regresar</button>
				 </form>
				<?php
					}
				?>
			</div>
		</div><br>
	  	<div class="panel-footer" style="background:#161616; text-align:center; color:white; padding:20px; border:0;">
	  		Raccoon Development.<br>
	  		Todos los derechos reservados.<br>
	  		2015.
	  	</div>
	  	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  </body>
  </html>