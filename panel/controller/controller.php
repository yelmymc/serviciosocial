<?php
	function __autoload($nombre_clase) {
	    include_once '../class/'.$nombre_clase .'.php';
	}
	//header('Content-Type: application/json; charset=UTF-8');
 	$operaciones=$_REQUEST['value'];
 	switch ($operaciones) {
 		case 'login':
 			if($_REQUEST['username'] === 'fmat' && $_REQUEST['password'] == '1234'){
 				echo 'correct';
 			}else{
 				echo "wrong";
 			}
 		break;
 		case 'validarUser':
 			if(isset($_REQUEST['user'])){
 				$usuario = new usuario();
 				$usuario->usernameDisponible($_REQUEST['user']);	
 			}else{
 				echo 2;
 			}
 		break;
 		case 'validarCorreo':
 			if(isset($_REQUEST['correo'])){
 				$usuario = new usuario();
 				$usuario->emailDisponible($_REQUEST['correo']);	
 			}else{
 				echo 2;
 			}
 		break;
 		case 'agregarUsuario':
 			$usuario = new usuario(0, $_REQUEST['nombre'], $_REQUEST['correo'], $_REQUEST['username'], $_REQUEST['password']);
 			$success = $usuario->inserta_usuario();
 			if($success > 0)
 				echo 1;
 			else
 				echo 0;

 		break;
 		/*case 'listatours':
 			$tours = new noticia();
			$listatours = $tours->listartoursdisponibles();
			$vehicle = new preciotour();
			$fechas = new fechatour();
			$array = array();
			$arraytour = array();
			foreach ($listatours as $key) {
				$array['id'] = $key['idnoticia'];
				$array['titulo'] = $key['titulo'];
				$array['tituloeng'] = $key['tituloeng'];
				$array['urlamigable'] = $key['urlamigable'];
				$vehicle->idtour = $key['idnoticia'];
				$array['vehicle'] = $vehicle->listarpreciosactivo();
				$fechas->idtour = $key['idnoticia'];
				$array['fechas'] = $fechas->listarfechasactivas();
				array_push($arraytour, $array);
			}
			echo json_encode($arraytour);
 		break;
 		case 'obtenertour':
			$vehicle = new preciotour($_GET['idtour']);
			$vehicle->obtenerprecio();
			echo json_encode($vehicle->pasajeros);
 		break;*/
 	}
?>