
<?php 
require_once("connection.php");
$ID=$_GET['GetID'];  
$query="SELECT * FROM planilla WHERE ID='".$ID."'"; 
$result=mysqli_query($conn,$query);
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
    }
    
    ?>





























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>



<div class="space">
<div class="turle">
<img src="imagenes/4ldUmOKS_400x400.png" class="avatar" alt="avatar">


<form action="update.php?ID=<?php echo $ID?>" method="POST" style="max-width: 500px;margin:auto">

<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Numero_empleado" placeholder="Numero de empleado" value="<?php echo $Numero_empleado?>" >
</div>

<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre?>" >
</div>


<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Apellido" placeholder="Apellido" value="<?php echo $Apellido?>" >
</div>


<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Numero_cedula" placeholder="Numero de Cedula"  value="<?php echo $Numero_cedula?>" >
</div>

<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Cargo" placeholder="Cargo">
</div>

<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Salario" placeholder="Salario">
</div>


<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="date" name="Fecha_inicio" placeholder="Fecha de Inicio">
</div>

<div class="Multiverso">
<i class="fa fa-user icon"></i>
<select class="Universo" name="Estatus" option>
<option>Permanente</option>
<option>Contrato</option>
</select>
</div>


<div class="Multiverso">
<i class="fa fa-user icon"></i>
<input class="Universo" type="text" name="Area_trabajo" placeholder="Area de trabajo">
</div>

<button class="btn"  name="update">Actualizar</button>
</div>






</form>



    
</body>
</html>