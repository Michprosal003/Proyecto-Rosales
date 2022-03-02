<?php 
require_once("connection.php");

$query="SELECT * FROM planilla";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>

<table class="table table-bordered  table-striped table-hover">
<tr>
<td>ID</td>
<td> N° de empleado</td>
<td>Nombre</td>
<td>Apellido</td>
<td>N° de cédula</td>
<td>Cargo Según Funciones</td>
<td>Salario</td>
<td>Fecha de Inicio</td>
<td>Estatus</td>
<td>Area de trabajo</td>
<td>Accion</td>
<td>Accion</td>
<td>Accion</td>
</tr>

<?php 

while($row=mysqli_fetch_assoc($result))
{
    $ID=$row['ID'];
   $Numero_empleado=$row['Numero_empleado'];  
   $Nombre=$row['Nombre']; 
   $Apellido=$row['Apellido']; 
   $Numero_cedula=$row['Numero_cedula']; 
   $Cargo=$row['Cargo']; 
   $Salario=$row['Salario']; 
   $Fecha_inicio=$row['Fecha_inicio']; 
   $Estatus=$row['Estatus']; 
   $Area_trabajo=$row['Area_trabajo']; 

?>

<tr>
<td><?php echo $ID?></td>
<td><?php echo $Numero_empleado?></td>
<td><?php echo $Nombre?></td>
<td><?php echo $Apellido?></td>
<td><?php echo $Numero_cedula?></td>
<td><?php echo $Cargo?></td>
<td><?php echo $Salario?></td>
<td><?php echo $Fecha_inicio?></td>
<td><?php echo $Estatus?></td>
<td><?php echo $Area_trabajo?></td>
<td><a href="edit.php?GetID=<?php echo $ID?>"class="btn bg-danger">Actualizar</a></td>
<td><a href="delete.php?DEL=<?php echo $ID?>"class="btn btn-success">Eliminar</a></td>
<td><a href="paginacion.php"class="btn bg-warning">view</a></td>


</tr>

<?php 
}
?>













</table>



    
</body>
</html>



