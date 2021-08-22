<?php
   include("database.php");
   $id = $_GET['id'];
   $query = "SELECT * FROM contacts WHERE id =".$id;
   
   $result = mysqli_query ($conn, $query);
   if(!$result){
	   echo "Error ".mysqli_error($conn);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "ID: ".$row['id']; echo "<br/>";
		   echo "Full Name: ".$row['fullName']; echo "<br/>";
		   echo "Email: ".$row['email']; echo "<br/>";
           echo "Problem: ".$row['problem']; echo "<br/>";
	   }
   }
?>