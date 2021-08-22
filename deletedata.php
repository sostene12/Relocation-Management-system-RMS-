<?php
   include("database.php");
   $id = $_GET['id'];
   $query = "DELETE FROM citzen WHERE id=$id;";
   mysqli_query($conn,$query);
   header("Location:admin.php?success");
   exit();
?>