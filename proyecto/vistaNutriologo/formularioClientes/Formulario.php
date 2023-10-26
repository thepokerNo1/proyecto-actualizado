<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Formulario de prueba</title>
</head>
<body>
	<div class="container">
		<form action="./formularioClientes/fm.php" method="post">
	<div class="container">
			<div class="col-4">
				<label for="nameInput" class="form-label">Nombre</label>
				<input name="inNombre" type="name" class="form-control" id="nameInput" placeholder="Escribe nombre">
			</div>
			<div class="col-4">
				<label for="apellidopaternoInput" class="form-label">Apellido Paterno</label>
				<input name="inPaterno" type="apellidoPaterno" class="form-control" id="apellidopaternoInput" placeholder="Escribe primer apellido">
			</div>
			<div class="col-4">
				<label for="apellidomaternoInput" class="form-label">Apellido Materno</label>
				<input name="inMaterno" type="apellidoMaterno" class="form-control" id="apellidomaternoInput" placeholder="Escribe segundo apellido">
			</div>
			<div class="col-3">
				<label for="telefonoInput" class="form-label">Telefono</label>
				<input name="inTelefono" type="telefono" class="form-control" id="telefonoInput" placeholder="Escribe telefono">
			</div>
			<div class="col-1">
				<label for="edadInput" class="form-label">Edad</label>
				<input name="inEdad" type="Edad" class="form-control" id="edadInput" placeholder="Edad">
			</div>
			<div class="col9 col-center">
				<label for="edadInput" class="form-label">Seleccione su genero</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="inHombre" id="radioHombre">
  					<label class="form-check-label" for="radioHombre">Hombre</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="inMujer" id="radioMujer">
  					<label class="form-check-label" for="radioMujer">Mujer</label>
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="btnAgregar">
				Enviar
				</button>
			</div>
			</form>
		<script>
		document.getElementById("btnAgregarCliente").style.display = "none";
	</script>
	</div>
</body>
</html>