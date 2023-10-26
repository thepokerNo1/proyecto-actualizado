<?php
	$conexion=mysqli_connect('localhost','root','','proyecto');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
   

</head>
<body>
    <div class="container">
    	<table class="table table-striped table-hover"> 
            <thead class="thead thead-green">
                <tr> 
                    <th>ID Cita</th> 
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>ID Paciente</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            	<?php
            		$sql = "SELECT * FROM cita";
            		$result = mysqli_query($conexion,$sql);

            		while($mostar=mysqli_fetch_array($result)){
            	?>    

                <tr> <!-- Inicio de la segunda fila (datos) -->
                    <td><?php echo $mostar['id_cita'] ?></td>
                    <td><?php echo $mostar['fecha'] ?></td>
                    <td><?php echo $mostar['hora'] ?></td>
                    <td><?php echo $mostar['id_paciente'] ?></td>
                </tr>
                <?php
                	}
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>