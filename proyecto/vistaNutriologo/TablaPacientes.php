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
                    <th>ID Paciente</th> 
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            	<?php
            		$sql = "SELECT * FROM paciente";
            		$result = mysqli_query($conexion,$sql);

            		while($mostar=mysqli_fetch_array($result)){
            	?>    

                <tr> <!-- Inicio de la segunda fila (datos) -->
                    <td><?php echo $mostar['id_Paciente'] ?></td>
                    <td><?php echo $mostar['nombre'] ?></td>
                    <td><?php echo $mostar['ap'] ?></td>
                    <td><?php echo $mostar['am'] ?></td>
                    <td><?php echo $mostar['edad'] ?></td>
                    <td><?php echo $mostar['tel'] ?></td>
                    <td><?php echo $mostar['sexo'] ?></td>
                </tr>
                <?php
                	}
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
