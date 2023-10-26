<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Formulario de prueba</title>
</head>
<body>
	<div class="container">
		<form action="./formularioDietas/fmd.php" method="post">
	<div class="container">
			<div class="col-4">
				<label for="desayuno" class="form-label">Desayuno</label>
				<input name="desayuno" type="desayuno" class="form-control" id="desayuno" placeholder="Escriba el Desayuno">
			</div>
			<div class="col-4">
				<label for="pColacion" class="form-label">Primera Colacion</label>
				<input name="pColacion" type="pColacion" class="form-control" id="pColacion" placeholder="Escriba la primera colacion">
			</div>
			<div class="col-4">
				<label for="comida" class="form-label">Comida</label>
				<input name="comida" type="comida" class="form-control" id="comida" placeholder="Escriba la comida">
			</div>
			<div class="col-4">
				<label for="sColacion" class="form-label">Segunda Colacion</label>
				<input name="sColacion" type="sColacion" class="form-control" id="sColacion" placeholder="Escriba la segunda colacion">
			</div>
			<div class="col-4">
				<label for="cena" class="form-label">Cena</label>
				<input name="cena" type="cena" class="form-control" id="cena" placeholder="Escriba la cena">
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="btnAgregar">
				Enviar
				</button>
			</div>
			</form>
		<script>
		document.getElementById("btnAgregarDietas").style.display = "none";
	</script>
	</div>
</body>
</html>