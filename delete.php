






<?php 

require_once("connection.php");
if(isset($_GET['DEL']))
{

$ID=$_GET['DEL'];  
  
  
   $query="DELETE  FROM planilla  WHERE ID='".$ID."'";
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