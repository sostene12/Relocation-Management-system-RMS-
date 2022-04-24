<?php
   include("database.php");
   $id = $_GET['id'];
   $query = "SELECT * FROM citzen WHERE id =".$id;
   
   $result = mysqli_query ($conn, $query);
   if(!$result){
	   echo "Error ".mysqli_error($conn);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		   echo "ID: ".$row['id']; echo "<br/>";
		   echo "First Name: ".$row['firstName']; echo "<br/>";
           echo "Last Name: ".$row['lastName']; echo "<br/>";
		   echo "Email: ".$row['email']; echo "<br/>";
           echo "Phone Number: ".$row['phoneNumber']; echo "<br/>";
           echo "Date: ".$row['moveDate']; echo "<br/>";
           echo "Gender: ".$row['gender']; echo "<br/>";
           echo "Marital Status: ".$row['maritalStatus']; echo "<br/>";
           echo "Sector: ".$row['sector']; echo "<br/>";
           echo "Cell: ".$row['cell']; echo "<br/>";
           echo "Village: ".$row['village']; echo "<br/>";
           echo "Reason: ".$row['reason']; echo "<br/>";
           echo "File: ".$row['fileUpload']; echo "<br/>";
	   }
   }
?>