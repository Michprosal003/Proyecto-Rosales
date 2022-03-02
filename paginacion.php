
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
  
   
    <title>Paginacion</title>
</head>
<body>
    














<!-- Estableciendo una conexion a la base de datos--> 


<?php 

$conn=mysqli_connect("localhost","root","","datatable");

$por_pagina=10;

if(isset($_GET['pagina']))
{
    $pagina=$_GET['pagina'];
}

else 
{
    $pagina=1;
}



$empieza=($pagina-1)* $por_pagina;
$query="SELECT * FROM planilla LIMIT $empieza,$por_pagina";
$resultado=mysqli_query($conn,$query);
?>

<table class="table table-hover table-striped table-bordered">
    <tr>
<td class="bg-warning">ID</td>
<td class="bg-success"> N° de empleado</td>
<td class="bg-primary">Nombre</td>
<td class="bg-secondary">Apellido</td>
<td class="bg-info">N° de cédula</td>
<td class="bg-danger">Cargo Según Funciones</td>
<td class="bg-light"> Salario</td>
<td class="bg-gradient-warning">Fecha de Inicio</td>
<td>Estatus</td>
<td>Area de trabajo</td>

</tr>

<?php 

while($fila=mysqli_fetch_assoc($resultado))
{


?>

<tr>
<td><?php echo $fila['ID']?></td>
<td><?php echo $fila['Numero_empleado']?></td>
<td><?php echo $fila['Nombre']?></td>
<td><?php echo $fila['Apellido']?></td>
<td><?php echo $fila['Numero_cedula']?></td>
<td><?php echo $fila['Cargo']?></td>
<td><?php echo $fila['Salario']?></td>
<td><?php echo $fila['Fecha_inicio']?></td>
<td><?php echo $fila['Estatus']?></td>
<td><?php echo $fila['Area_trabajo']?></td>
</tr>

<?php 
}
?>



</table>


<div>

<!--paginacion-->

<?php 

$query="SELECT * FROM planilla";
$resultado=mysqli_query($conn,$query);

$total_registros=mysqli_num_rows($resultado);
$total_paginas=ceil($total_registros/$por_pagina);

echo"<center><a href='paginacion.php?pagina=1'> Anterior </a>";

for($i=1;  $i<$total_paginas; $i++)
{
    echo"<a href=paginacion.php?pagina=".$i.">  ".$i." </a>";


}
            

echo"<a href='paginacion.php?pagina=$total_paginas'> Siguiente </a></center>";



?>






<style>

    a{ 

  padding: 15px;
  color: white;
  background-color: black;
  border: 1px solid darkgoldenrod;
  display: inline-block;
  text-decoration: none;
  opacity:0.8;



    }


    a:hover {
    opacity: 1;


    }


</style>
















</div>
</body>
</html>