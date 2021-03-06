<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_once('include/header.php');?>

		<title>Formulario de Noticia</title>

	</head>
	<body ng-app="panel">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-11 col-sm-offset-1 cuadro">
						<div class="">
							
						</div>
					</div>
				</div>
			</div>
		</header>
		<section ng-controller="formNoticia">
			<div class="container">
				<div class="row">
					<div class="col-sm-1 content-menu">
						<?php include_once 'include/menu.php';?>
					</div>
					<div class="col-sm-11 content-white">
						<div class="contenido">
							<h3>Nueva Noticia</h3>
							<hr />
							<form class="form-inline" method="post" action="controller/controller.php">
								<input type="hidden" name="value" value="agregarNoticia">
								<input type="hidden" name="idnoticia" value="">
								<div class="form-group">
							    	<label class="sr-only" for="titulo">Título</label>
							    	<div class="input-group">
							      		<div class="input-group-addon">Título</div>
							      		<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
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
							    	<input type="file" name="galeria" id="galeria" multiple />
							  	</div>

							  	<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>	
							
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

		

		<?php require_once 'scripts.php';?>

	</body>
</html>