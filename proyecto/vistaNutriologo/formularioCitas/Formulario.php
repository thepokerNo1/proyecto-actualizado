<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Formulario de prueba</title>
</head>
<body>
	<div class="container">
		<form action="./formularioCitas/fmc.php" method="post">
	<div class="container">
			<div class="col-4">
				<label for="fechaInput" class="form-label">Fecha</label>
				<input name="inFecha" type="fecha" class="form-control" id="fechaInput" placeholder="Escribe Fecha">
			</div>
			<div class="col-4">
				<label for="horaInput" class="form-label">Hora</label>
				<input name="inHora" type="hora" class="form-control" id="horaInput" placeholder="Escribe hora">
			</div>
			<div class="col-4">
				<label for="idPaciente" class="form-label">Id Paciente</label>
				<input name="inIdPaciente" type="id_paciente" class="form-control" id="idPaciente" placeholder="Escriba ID de paciente">
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