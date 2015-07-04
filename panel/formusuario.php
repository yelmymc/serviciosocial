<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_once('include/header.php');?>

		<title>Formulario de Escuela</title>

	</head>
	<body ng-app="usuario">
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
			<div class="container" ng-controller="insertUsuario">
				<div class="row">
					<div class="col-sm-1 content-menu">
						<?php include_once 'include/menu.php';?>
					</div>
					<div class="col-sm-11 content-white">
						<div class="contenido">
							<h3>Nueva Usuario</h3>
							<hr />
							<form name="formUsuario" class="form-inline" ng-submit="formUsuario()">
								<div class="form-group espacios">
									<label class="sr-only" for="nombre">Nombre</label>
									<div class="input-group">
									    <div class="input-group-addon">Nombre</div>
										<input type="text" class="form-control" ng-model="nombre" name="nombre" id="nombre" placeholder="Nombre completo" required>
									</div>
								</div>
								<div class="form-group espacios">
									<label class="sr-only" for="correo">E-mail</label>
									<div class="input-group">
									    <div class="input-group-addon">E-mail</div>
									    <input type="text" class="form-control" ng-model="correo" name="correo" id="correo" placeholder="E-mail" required>
									</div>
								</div>
								<div class="form-group espacios">
									<label class="sr-only" for="username">Username</label>
									<div class="input-group">
									    <div class="input-group-addon">Username</div>
									    <input type="text" class="form-control" ng-model="username" name="username" id="username" placeholder="Username" required>
									</div>									
								</div>
								
								<div class="form-group espacios">
									<label class="sr-only" for="password">Password</label>
									<div class="input-group">
									    <div class="input-group-addon">Password</div>
									    <input type="text" class="form-control" ng-model="password" name="password" id="password" placeholder="Password" required>
									</div>									
								</div>	
								<div class="form-group control espacios">
									<button type="submit" ng-disabled="formUsuario.$invalid" class="btn btn-primary">Guardar</button>
								</div>										
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-sanitize.js"></script>
		<script type="text/javascript">
		var usuario = angular.module('usuario'[]);

		usuario.controller('insertUsuario',['$scope', '$http', function($scope, $http){

			$scope.formUsuario = function(){
				
			}
		}]);
		</script>
	</body>
</html>