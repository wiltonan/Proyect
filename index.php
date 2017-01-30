<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!-- materialize -->
	<link rel="stylesheet" href="view/plugins/materialize/css/materialize.min.css">
	<!-- sweetalert -->
	<link rel="stylesheet" href="view/plugins/sweetalert/dist/sweetalert.css">
	<!-- estilos propios -->
	<link rel="stylesheet" href="view/css/main.css" type="text/css">
</head>
<body class="purple lighten-5">
	<div class="row">

		<div class="col m12 s12">
			<img src="view/images/logo.png" class="responsive-img" alt="Logo" id="logo">
		</div>

		<div class="col m12 s12">

			<div id="bglog">
				<div class="row">
					<form action="" method="POST">

						<div class="col m12 s12 input-field">
							<input type="text" name="txtusname" id="txtusname" validate>
							<label for="" class=" black-text">Usuario</label>
						</div>

						<div class="col m12 s12 input-field" id="paso1">
							<a class="waves-effect waves-light btn" id="confirm">Confirmar</a>
						</div>

						<div class="col m12 s12 input-field" id="paso2">
							<input type="password" name="txtkey" id="txtkey" validate>
							<label for="" class=" black-text">Contraseña</label>
							<br>
							<button class="btn">Acceder</button>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
	<footer>
		<p>
			Medellín: Teléfono: (57-4) 448 8567 - Dirección: Cra 43 B Nº 9-33 / Parque El Poblado
			<br>
			Bogotá: Teléfono: (57-1) 805 30 40 - Dirección: Calle 94 A Nº 11ª-39 Of 206
			<br>
			2017 ©SQA. Todos los derechos reservados.
			<br>
			<a href="http://www.sqasa.com/SQA_ProteccionDatosPersonales.pdf" target="blank">Conoce nuestra Politica de Proteccion de Datos Personales</a>
		</p>
	</footer>
	<!-- jquery -->
	<script src="view/plugins/jquery-3.1.1.min.js"></script>
	<!-- materialize -->
	<script src="view/plugins/materialize/js/materialize.min.js"></script>
	<!-- sweetalert -->
	<script src="view/plugins/sweetalert/dist/sweetalert.min.js"></script>
	<!-- jquery propio-->
	<script>
		$(document).ready(function(){
			$("#confirm").click(function(){
				var nick = $("#txtusname").val();
				var act ="validateusr";
				$.post("controller/ajax.php", {nick:nick, act:act}).done(function(data){
					if (data=="1") {
						$("#paso1").css('display','none');
						$("#paso2").css('display','block');
					}else{
						swal("Este Usuario No Existe.","","error");
					}
				});
			});
		});
	</script>
</body>
</html>
