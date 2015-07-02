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
			$sql = "insert into escuelas (escuela, poblacion, descripcion, fecha) values('".htmlspecialchars($this->escuela)."','".htmlspecialchars($this->poblacion)."','".htmlspecialchars($this->descripcion)."','".$this->fecha."')";
			return $this->idescuela=$conexion->ejecutar_sentencia($sql);
		}

		function modifica_escuela(){
			$conexion= new conexion();
			$sql="update escuelas set escuela = '".htmlspecialchars($this->escuela)."', poblacion = '".htmlspecialchars($this->poblacion)."', descripcion = '".htmlspecialchars($this->descripcion)."', '".$this->fecha."' where idescuela=".$this->idescuela;
			return $conexion->ejecutar_sentencia($sql);
		}

		function elimina_escuela(){
			$conexion=new conexion();
			$sql="delete from escuelas where idescuela=".$this->idescuela;
			return $conexion->ejecutar_sentencia($sql);
		}

		function listaUsuarios(){
			$conexion = new conexion();
			$sql = "select * from escuelas order by id desc";
			$result = $conexion->ejecutar_sentencia($sql);
			$resultados = array();
			while ($row = mysqli_fetch_array($result)){
				$registro = array();
				$registro['idescuela']=$row['idescuela'];
				$registro['escuela']=$row['escuela'];
				$registro['poblacion']=$row['poblacion'];
				$registro['descripcion']=$row['descripcion'];
				$registro['fecha']=$row['fecha'];
				array_push($resultados,$registro);
			}
			mysqli_free_result($result);
			return $resultados;
		}

		function obten_escuela(){
			$conexion=new conexion();
			$sql="select * from escuelas where idescuela='".$this->idescuela."'";
			$result=$conexion->ejecutar_sentencia($sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->idescuela=$row['idescuela'];
				$this->escuela=$row['escuela'];
				$this->poblacion=$row['poblacion'];
				$this->descripcion=$row['descripcion'];
				$this->fecha=$row['fecha'];
			}
			mysqli_free_result($result);
		}
	}
?>