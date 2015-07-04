<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:site_name" content="" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel='shortcut icon' href='favicon.ico'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

		<title></title>

	</head>
	<body ng-app="app" ng-controller="postController as postctrl">
	
		<section id="login">
			<div class="contenido">
				<center>
	 				<div class="sesion">
						<div class="box-title">
							<img src="../imagenes/logo_Proyecto.png" alt="" />
						</div>
						<div class="box-body">
							<form name="formlogin" ng-submit="postctrl.postForm()">
								<input type="text" ng-model="postctrl.inputData.username" name="user" placeholder="usuario" required/>
								<input type="password" ng-model="postctrl.inputData.password" name="pass" placeholder="contraseña" required/>
								<div class="alert alert-danger" role="alert" ng-show="errorMsg">{{errorMsg}}</div>
								<button type="submit" ng-disabled="formlogin.$invalid" name="login" value="Log In">Login</button>
								<a href="#">¿Olvido su contraseña?</a>
							</form>
						</div>
					</div>
				</center>
			</div>
		</section>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-sanitize.js"></script>


		<script type="text/javascript">
			var mylogin = angular.module('app', [])
			mylogin.controller('postController', ['$scope','$http', function($scope,$http){

				this.postForm = function(){
					$http({
						method: 'POST',
						url: 'controller.php',
						params: {value: "login",username: this.inputData.username, password: this.inputData.password}
					})
					.success(function(data){
						if(data.trim() === 'correct'){
							window.location.href = 'listescuela.php';
						}else{
							$scope.errorMsg = "Login not correct";
						}
					})
					.error(function(data){
						$scope.errorMsg = "Unable to submit form";
					})
				}
			}])
		</script>
	</body>
</html>