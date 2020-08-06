<!DOCTYPE html>
<html>
<head>
	<?php require_once "scripts.php"; ?>
	<title>Sistemas de encuestas</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body style="background-color: #084B8A">
		<header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-briefcase"></span>Encuesta día del niño</a>
        </div>
 
        <nav>
            <ul>
                <li><a href=""><span class="icon-briefcase"></span>Encuesta día del niño</a></li>
            </ul>
        </nav>
    </header>
<section>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
					<form id="frmRegistro">
						<h4>Registro</h4>
						<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="">
					<label>Apellido</label>
					<input type="text" class="form-control input-sm" id="apellido" name="">
					<label>Correo</label>
					<input type="text" class="form-control input-sm" id="usuario" name="">
					<p></p>
					<a href="index1.php" class="btn btn-primary" id="registrarNuevo">Registrar</a>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-default">Salir</a>
					</div>
					</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	</section>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								top.location.href="index1.php"
								alertify.success("Agregado con exito");
							}
							else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>