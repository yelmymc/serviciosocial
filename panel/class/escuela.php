<?php
	require_once 'conexion.php';

	class escuela{
		var $idescuela;
		var $escuela;
		var $poblacion;
		var $descripcion;
		Var $fecha;

		function __construct($id = 0, $escuela = '', $poblacion = '', $descripcion= '', $fecha = ''){
			$this->idescuela = $id;
			$this->escuela = $escuela;
			$this->poblacion = $poblacion;
			$this->descripcion = $descripcion;
			$this->fecha = $fecha;
		}

		function inserta_escuela(){
			$conexion = new conexion();
			$sql = "insert into escuela (escuela, poblacion, descripcion, fecha) values('".htmlspecialchars($this->escuela)."','".htmlspecialchars($this->poblacion)."','".htmlspecialchars($this->descripcion)."','".$this->fecha."')";
			return $this->idescuela=$conexion->ejecutar_sentencia($sql);
		}

		function modifica_escuela(){
			$conexion= new conexion();
			$sql="update escuela set escuela = '".htmlspecialchars($this->escuela)."', poblacion = '".htmlspecialchars($this->poblacion)."', descripcion = '".htmlspecialchars($this->descripcion)."', '".$this->fecha."' where idescuela=".$this->idescuela;
			return $conexion->ejecutar_sentencia($sql);
		}

		function elimina_escuela(){
			$conexion=new conexion();
			$sql="delete from escuela where idescuela=".$this->idescuela;
			return $conexion->ejecutar_sentencia($sql);
		}

		function listaUsuarios(){
			$conexion = new conexion();
			$sql = "select * from escuela order by id desc";
			$result = $conexion->ejecutar_sentencia($sql);
			$resultados = array();
			while ($row = mysqli_fetch_array($result)){
				$registro = array();
				$registro['idescuela']=$row['idescuela'];
				$registro['escuela']=$row['escuela'];
				$registro['descripcion']=$row['descripcion'];
				array_push($resultados,$registro);
			}
			mysqli_free_result($result);
			return $resultados;
		}

		function obten_escuela(){
			$conexion=new conexion();
			$sql="select * from escuela where idescuela='".$this->idescuela."'";
			$result=$conexion->ejecutar_sentencia($sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->idescuela=$row['idescuela'];
				$this->escuela=$row['escuela'];
				$this->descripcion=$row['descripcion'];
			}
			mysqli_free_result($result);
		}
	}
?>