<?php 

require_once("connection.php");
if(isset($_POST['update']))
{
    $ID=$_GET['ID'];  
   $Numero_empleado=$_POST['Numero_empleado'];  
   $Nombre=$_POST['Nombre']; 
   $Apellido=$_POST['Apellido']; 
   $Numero_cedula=$_POST['Numero_cedula']; 
   $Cargo=$_POST['Cargo']; 
   $Salario=$_POST['Salario']; 
   $Fecha_inicio=$_POST['Fecha_inicio']; 
   $Estatus=$_POST['Estatus']; 
   $Area_trabajo=$_POST['Area_trabajo']; 
  
   $query="UPDATE planilla SET Numero_empleado='".$Numero_empleado."', Nombre='".$Nombre."', Apellido='".$Apellido."', Numero_cedula='".$Numero_cedula."', Cargo='".$Cargo."',   Salario='".$Salario."',  Fecha_inicio='".$Fecha_inicio."',  Estatus='".$Estatus."', Area_trabajo='".$Area_trabajo."' WHERE ID='".$ID."'";  
  $result=mysqli_query($conn,$query);
  if($result)
  {
    header("location:view.php");
  }

  else 
  {
      echo"Revisa tu query nuevamente";
  }
}

else 
{
    header("location:portal.php");
}










?>