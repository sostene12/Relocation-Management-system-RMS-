<?php
   include("database.php");
   
   $r = "DELETE FROM admin WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   echo "User deleted successfly";
   }
       
   
?>
