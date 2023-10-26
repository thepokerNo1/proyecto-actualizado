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
                    <th>ID Menú</th> 
                    <th>Desayuno</th>
                    <th>Primera Colacion</th>
                    <th>Comida</th>
                    <th>Segunda Colacion</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            	<?php
            		$sql = "SELECT * FROM menu";
            		$result = mysqli_query($conexion,$sql);

            		while($mostar=mysqli_fetch_array($result)){
            	?>    

                <tr> <!-- Inicio de la segunda fila (datos) -->
                    <td><?php echo $mostar['id_menu'] ?></td>
                    <td><?php echo $mostar['desayuno'] ?></td>
                    <td><?php echo $mostar['pColacion'] ?></td>
                    <td><?php echo $mostar['comida'] ?></td>
                    <td><?php echo $mostar['sColacion'] ?></td>
                    <td><?php echo $mostar['cena'] ?></td>
                </tr>
                <?php
                	}
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>