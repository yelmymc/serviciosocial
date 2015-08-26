<?php
	require_once 'conexion.php';

	class usuario{
		var $idusuario;
		var $nombre;
		var $correo;
		var $user;
		var $pass;
		var $status;
		var $token;

		function __construct($id = 0, $nombre = '', $correo = '', $usuario = '', $contrasena = ''){
			$this->idusuario = $id;
			$this->nombre = $nombre;
			$this->correo = $correo;
			$this->user = $usuario;
			$this->pass = $contrasena;
		}

		function inserta_usuario(){
			$conexion = new conexion();
			$sql = "insert into usuarios (nombre, correo, user, pass, status,token) values ('".htmlspecialchars($this->nombre)."','".htmlspecialchars($this->correo)."','".$this->user."',MD5('".$this->pass."'), 1, MD5('".$this->correo."'))";
			return $this->idusuario=$conexion->ejecutar_sentencia($sql);
		}

		function modifica_usuario(){
			$conexion= new conexion();
			$pedazo="";
			$pedazo2='';
			if($this->user != '')
				$pedazo2="user ='".$this->user."',";
			if ($this->password!='')   
				$pedazo="pass = MD5('".$this->pass."'),";
			$sql="update usuarios set ".$pedazo2." ".$pedazo." nombre = '".htmlspecialchars($this->nombre)."', correo = '".htmlspecialchars($this->correo)."' where idusuario=".$this->idusuario;
			return $conexion->ejecutar_sentencia($sql);
		}

		function elimina_usuario(){
			$conexion=new conexion();
			$sql="delete from usuarios where idusuario=".$this->idusuario;
			return $conexion->ejecutar_sentencia($sql);
		}

		function listaUsuarios(){
			$conexion = new conexion();
			$sql = "select * from usuarios order by id desc";
			$result = $conexion->ejecutar_sentencia($sql);
			$resultados = array();
			while ($row = mysqli_fetch_array($result)){
				$registro = array();
				$registro['idusuario']=$row['idusuario'];
				$registro['nombre']=$row['nombre'];
				$registro['user']=$row['user'];
				array_push($resultados,$registro);
			}
			mysqli_free_result($result);
			return $resultados;
		}

		function obten_usuario(){
			$conexion=new conexion();
			$sql="select * from usuarios where idusuario='".$this->idusuario."'";
			$result=$conexion->ejecutar_sentencia($sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->idusuario=$row['idusuario'];
				$this->nombre=$row['nombre'];
				$this->user=$row['user'];
			}
			mysqli_free_result($result);
		}

		function usernameDisponible($username){
			$conexion = new conexion();
			$sql = "select user from usuarios where user = '".$username."'";
			$result = $conexion->ejecutar_sentencia($sql);
			$rows = mysqli_num_rows($result);
			if($rows > 0)
				echo 1;
			else
				echo 0; 
		}	

		function emailDisponible($email){
			$conexion = new conexion();
			$sql = "select correo from usuarios where correo = '".$email."'";
			$result = $conexion->ejecutar_sentencia($sql);
			$rows = mysqli_num_rows($result);
			if($rows > 0)
				echo 1;
			else
				echo 0;
		}	
	}
?>