<?php
	require_once 'conexion.php';

	class juego{
		var $idjuego;
		var $nombre;
		var $ruta;
		var $url;
		var $descripcion;
		Var $fecha;

		function __construct($id = 0, $nombre = '', $ruta = '', $url = '', $descripcion= '', $fecha = ''){
			$this->idjuego = $id;
			$this->nombre = $nombre;
			$this->ruta = $ruta;
			$this->url = $url;
			$this->descripcion = $descripcion;
			$this->fecha = $fecha;
		}

		function inserta_juego(){
			$conexion = new conexion();
			$sql = "insert into juegos (nombre, $url, ruta, descripcion, fecha) values('".htmlspecialchars($this->nombre)."','".$this->url."','".$this->ruta."','".htmlspecialchars($this->descripcion)."','".$this->fecha."')";
			return $this->idjuego=$conexion->ejecutar_sentencia($sql);
		}

		function modifica_juego(){
			$conexion= new conexion();
			$sql="update juego set nombre = '".htmlspecialchars($this->nombre)."', url = '".$url."',ruta = '".$this->ruta."', descripcion = '".htmlspecialchars($this->descripcion)."', '".$this->fecha."' where idjuego=".$this->idjuego;
			return $conexion->ejecutar_sentencia($sql);
		}

		function elimina_juego(){
			$conexion=new conexion();
			$sql="delete from juegos where idjuego=".$this->idjuego;
			return $conexion->ejecutar_sentencia($sql);
		}

		function listaUsuarios(){
			$conexion = new conexion();
			$sql = "select * from juegos order by id desc";
			$result = $conexion->ejecutar_sentencia($sql);
			$resultados = array();
			while ($row = mysqli_fetch_array($result)){
				$registro = array();
				$registro['idjuego']=$row['idjuego'];
				$registro['nombre']=$row['nombre'];
				$registro['ruta']=$row['ruta'];
				$registro['url']=$row['url'];
				$registro['descripcion']=$row['descripcion'];
				$registro['fecha']=$row['fecha'];
				array_push($resultados,$registro);
			}
			mysqli_free_result($result);
			return $resultados;
		}

		function obten_juego(){
			$conexion=new conexion();
			$sql="select * from juegos where idjuego='".$this->idjuego."'";
			$result=$conexion->ejecutar_sentencia($sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->idjuego=$row['idjuego'];
				$this->nombre=$row['nombre'];
				$this->ruta=$row['ruta'];
				$this->url=$row['url'];
				$this->descripcion=$row['descripcion'];
				$this->fecha=$row['fecha'];
			}
			mysqli_free_result($result);
		}
	}
?>