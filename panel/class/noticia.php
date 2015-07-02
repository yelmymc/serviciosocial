<?php
	require_once 'conexion.php';

	class noticia{
		var $idnoticia;
		var $titulo;
		var $descripcion;
		Var $fecha;

		function __construct($id = 0, $titulo = '', $descripcion= '', $fecha = ''){
			$this->idnoticia = $id;
			$this->titulo = $titulo;
			$this->descripcion = $descripcion;
			$this->fecha = $fecha;
		}

		function inserta_noticia(){
			$conexion = new conexion();
			$sql = "insert into noticias (titulo, descripcion, fecha) values('".htmlspecialchars($this->titulo)."','".htmlspecialchars($this->descripcion)."','".$this->fecha."')";
			return $this->idnoticia=$conexion->ejecutar_sentencia($sql);
		}

		function modifica_noticia(){
			$conexion= new conexion();
			$sql="update noticias set titulo = '".htmlspecialchars($this->titulo)."', descripcion = '".htmlspecialchars($this->descripcion)."', '".$this->fecha."' where idnoticia=".$this->idnoticia;
			return $conexion->ejecutar_sentencia($sql);
		}

		function elimina_noticia(){
			$conexion=new conexion();
			$sql="delete from noticias where idnoticia=".$this->idnoticia;
			return $conexion->ejecutar_sentencia($sql);
		}

		function listaUsuarios(){
			$conexion = new conexion();
			$sql = "select * from noticias order by id desc";
			$result = $conexion->ejecutar_sentencia($sql);
			$resultados = array();
			while ($row = mysqli_fetch_array($result)){
				$registro = array();
				$registro['idnoticia']=$row['idnoticia'];
				$registro['titulo']=$row['titulo'];
				$registro['descripcion']=$row['descripcion'];
				$registro['fecha']=$row['fecha'];
				array_push($resultados,$registro);
			}
			mysqli_free_result($result);
			return $resultados;
		}

		function obten_noticia(){
			$conexion=new conexion();
			$sql="select * from noticias where idnoticia='".$this->idnoticia."'";
			$result=$conexion->ejecutar_sentencia($sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->idnoticia=$row['idnoticia'];
				$this->titulo=$row['titulo'];
				$this->descripcion=$row['descripcion'];
				$this->fecha=$row['fecha'];
			}
			mysqli_free_result($result);
		}
	}
?>