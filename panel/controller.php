<?php
	function __autoload($nombre_clase) {
	    include 'clases/'.$nombre_clase .'.php';
	}
	
	header('Content-Type: application/json; charset=UTF-8');
 	
 	$operaciones=$_GET['value'];
 	switch ($operaciones) {
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