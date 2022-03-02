<?php 

require_once("connection.php");
if(isset($_POST['submit']))
{
 if(empty($_POST['Numero_empleado']) ||   empty($_POST['Nombre']) || empty($_POST['Apellido']) || empty($_POST['Numero_cedula']) ||  empty($_POST['Cargo']) ||  empty($_POST['Salario']) || empty($_POST['Fecha_inicio']) || empty($_POST['Estatus']) ||  empty($_POST['Area_trabajo']))

 echo"Completa este campo";

 else 
 {
  

   $Numero_empleado=$_POST['Numero_empleado'];  
   $Nombre=$_POST['Nombre']; 
   $Apellido=$_POST['Apellido']; 
   $Numero_cedula=$_POST['Numero_cedula']; 
   $Cargo=$_POST['Cargo']; 
   $Salario=$_POST['Salario']; 
   $Fecha_inicio=$_POST['Fecha_inicio']; 
   $Estatus=$_POST['Estatus']; 
   $Area_trabajo=$_POST['Area_trabajo']; 
  
   $query="INSERT INTO planilla (Numero_empleado,Nombre,Apellido,Numero_cedula,Cargo,Salario,Fecha_inicio, Estatus, Area_trabajo) VALUES('$Numero_empleado','$Nombre','$Apellido','$Numero_cedula','$Cargo','$Salario','$Fecha_inicio','$Estatus','$Area_trabajo')";
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
}
else 
{
    header("location:portal.php");
}










?>