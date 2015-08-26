<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require_once('include/header.php');?>

		<title>Formulario de Usuarios</title>

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
							<form name="formUsuario" ng-model="form" class="form-inline" ng-submit="formulario()">
								<div class="form-group espacios">
									<label class="sr-only" for="nombre">Nombre</label>
									<div class="input-group">
									    <div class="input-group-addon">Nombre</div>
										<input type="text" class="form-control" ng-model="form.nombre" name="nombre" id="nombre" placeholder="Nombre completo" required>
									</div>
								</div>
								<div class="form-group espacios">
									<label class="sr-only" for="correo">e-mail</label>
									<div class="input-group">
									    <div class="input-group-addon">e-mail</div>
									    <input type="email" class="form-control" ng-model="form.correo" ng-keyup="validarCorreo()" name="correo" id="correo" placeholder="e-mail" required>
									</div>
								</div>
								<!--<div class="form-group espacios">
									<label class="sr-only" for="telefono">Teléfono</label>
									<div class="input-group">
									    <div class="input-group-addon">Teléfono</div>
									    <input type="text" class="form-control" ng-model="form.telefono" name="telefono" id="telefono" placeholder="Teléfono">
									</div>
								</div>-->
								<div class="form-group espacios">
									<label class="sr-only" for="username">username</label>
									<div class="input-group">
									    <div class="input-group-addon">username</div>
									    <input type="text" class="form-control" ng-model="form.username" ng-keyup="validarUser()" name="username" id="username" placeholder="username" required>
									</div>									
								</div>
								
								<div class="form-group espacios">
									<label class="sr-only" for="password">password</label>
									<div class="input-group">
									    <div class="input-group-addon">password</div>
									    <input type="password" class="form-control" ng-model="form.password" name="password" id="password" placeholder="password" required>
									</div>									
								</div>	
								<div class="form-group espacios">
									<label class="sr-only" for="repassword">repassword</label>
									<div class="input-group">
									    <div class="input-group-addon">confirmar password</div>
									    <input type="password" class="form-control" ng-model="form.repassword" name="repassword" id="repassword" placeholder="confirmas password" required>
									</div>									
								</div>	
								<div class="form-group control espacios">
									<button type="submit" ng-disabled="formUsuario.$invalid" class="btn btn-primary" value="agregarUsuario">Guardar</button>
								</div>										
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		

		<?php require_once 'include/scripts.php';?>

		<script type="text/javascript">
			var usuario = angular.module('usuario',[]);

			usuario.controller('insertUsuario',['$scope', '$http', function($scope, $http){
				$scope.form = {value: 'agregarUsuario'}

				$scope.formulario = function(){
					formulario = $scope.form;
					$http({
      					method: 'POST',
      					url: 'controller/controller.php',
      					params: formulario
     				})
     				.success(function(response) {
     					console.log(response)
     					if(response == 1)
     						window.location.href = "listescuela.php";
				        //$scope.codeStatus = response.data;
				    })
				    /*.error(function(response) {
				        $scope.codeStatus = response || "Request failed";
				    });*/
				};

				$scope.validarUser = function(){
					$http({
						method: 'POST',
						url: 'controller/controller.php',
						params: {value: 'validarUser', user: $scope.form.username}
					})
					.success(function(response){
						console.log(response);
					})
				};

				$scope.validarCorreo = function(){
					validador = formUsuario.input[type='email'].$valid;

					console.log(validador);
					$http({
						method: 'POST',
						url: 'controller/controller.php',
						params: {value: 'validarCorreo', correo: $scope.form.correo}
					})
					.success(function(response){
						console.log(response);
					})
				};
			}]);
		</script>
	</body>
</html>