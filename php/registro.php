<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
		

		if(buscaRepetido($usuario,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT INTO usuarios (nombre,apellido,usuario)
				VALUES ('$nombre','$apellido','$usuario')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$conexion){
			$sql="SELECT * FROM usuarios 
				WHERE usuario='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
				
			}
			else{
				return 0;
			}
		}

 ?>