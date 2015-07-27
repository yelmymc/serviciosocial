<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_once('include/header.php');?>

		<title>Formulario de Juego</title>

	</head>
	<body>
		<header>
			<div></div>
		</header>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<form class="form-inline">
								<div class="form-group">
							    	<label class="sr-only" for="juego">Título</label>
							    	<div class="input-group">
							      		<div class="input-group-addon">Título</div>
							      		<input type="text" class="form-control" name="juego" id="juego" placeholder="Título">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<label class="sr-only" for="poblacion">Url</label>
							    	<div class="input-group">
							      		<div class="input-group-addon">Url</div>
							      		<input type="text" class="form-control" name="url" id="url" placeholder="Url">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<label class="sr-only" for="descripcion">Descripcion</label>
							    	<span>Descripción</span>
							    	<div class="input-group">
							      		<textarea class="form-control" name="descripcion" id="descripcion" placeholder=""></textarea> 
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<input type="file" name="galeria" id="galeria" multiple/>
							  	</div>
							  	<div class="form-group">
							    	<input type="file" name="juego" id="juego" />
							  	</div>

							  	<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</section>

		<!--<?php include_once('include/menu.php');?>

		<div class="site-wrap"> 
			<header>
				<div></div>|
			</header>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-10">
							<input type="text" name="titulo" value=""/>
						</div>
					</div>
				</div>
			</section>
		</div>-->

		

		<?php require_once 'script.php';?>

	</body>
</html>