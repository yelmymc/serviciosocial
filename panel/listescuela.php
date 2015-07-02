<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_once('include/header.php');?>

		<title>Noticias</title>

	</head>
	<body>
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

		<section>	
			<div class="container">
				<div class="row">
					<div class="col-sm-1 content-menu">
						<?php include_once 'include/menu.php';?>
					</div>
					<div class="col-sm-11 content-white">
						<div class="contenido">
							<h3>Lista de Escuelas</h3>
							<hr />
							
							<table class="table table-hover">
								 <thead>
								 	<tr>
								 		<th>Escuela</th>
								 		<th>Población</th>
								 		<th>Fecha</th>
								 		<th></th>
								 	</tr>
								 </thead>

								 <tbody>
								 	<tr>
								 		<td><a href="formescuela.php">Escuela 1</a></td>
								 		<td>Mérida, Yucatán</td>
								 		<td>2/Julio/2015</td>
								 		<td class="text-center"><i class="fa fa-trash-o"></i></td>
								 	</tr>
								 	<tr>
								 		<td><a href="formescuela.php">Escuela 2</a></td>
								 		<td>Izamal, Yucatán</td>
								 		<td>2/Julio/2015</td>
								 		<td class="text-center"><i class="fa fa-trash-o"></i></td>
								 	</tr>
								 </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.1/angular.min.js"></script>
	</body>
</html>