<?php 
include('database.php');
?>
<style>
	.main-block
{
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}
.formcontainer {
      max-width: 300px; 
      border:1px solid black;
      background-color:white;
      }
      input{
      width: 90%;
      padding: 10px 5px;
      border: none;
      border-bottom: 2px solid black;
      outline:none;
      margin: 10px 10px 10px 10px;
      }
     
      .formcontainer button {
      background-color: #034e94;
      color: white;
      padding: 10px 0;
      margin: 10px 0;
      border: none;
      cursor:pointer;
      width: 40%;
      padding:auto;
      margin-left: 5px;
      }
      .formcontainer button a{
          color: #fff;
          text-decoration: none;
      }
      button:hover {
      opacity: 0.9;
      }
      span{
          margin-left: 10px;
          font-size: 18px;
          color: #CD5C5C;
      }
	</style>
    <?php
   $id =isset($_GET['id'])? $_GET['id']:"";
   $r="SELECT * FROM citzen WHERE id='".$id."';";
   $dx = mysqli_query($conn,$r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx))
   {
       ?>
<div class="flex-container">
<div class="formcontainer">
<form action="#" method="POST" enctype="multipart/form-data">
<span>Id</span>
<input type="text" class="input" name="id" value="<?php echo $d['id'];?>"  >
<span class="details">First Name</span>
<input type="text" class="input" name="firstname" value="<?php echo $d['firstName'];?>"  >
<span class="details">Last Name</span>
<input type="text" class="input" name="lastname" value="<?php echo $d['lastName'];?>" >
<span class="details">Email</span>
<input type="email" class="input" name="email" value="<?php echo $d['email'];?>" >
<span class="details">Id Number</span>
<input type="text" class="input"  name='idnumber' value="<?php echo $d['idNumber'];?>" >
<span class="details">gender</span>
<input type="text" class="input"  name='gender' value="<?php echo $d['gender'];?>" >
<span class="details">status</span>
<input type="text" class="input"  name='status' value="<?php echo $d['maritalStatus'];?>" >
<span class="details">Phone Number</span>
<input type="tel" class="input" name="phone" value="<?php echo $d['phoneNumber'];?>" >
<span class="details">Date</span>
<input type="text" class="input" name="date"value="<?php echo $d['moveDate'];?>" >
<span>SECTOR</span>
<input type="text" class="input" name="sector"value="<?php echo $d['sector'];?>" >
<span>CELL</span>
<input type="text" class="input" name="cell"value="<?php echo $d['cell'];?>">
<span>VILLAGE</span>
<input type="text" class="input" name="village"value="<?php echo $d['village'];?>" >
<button type="submit" name="edit"> UPDATE</button>
<button><a href="admin.php">BACK</a></button>
</form>
</div>

<?php
if(isset($_POST['edit']))
{	$date=$_POST['date']; 
    $id=$_POST['idnumber'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $status=$_POST['status'];
     $sector=$_POST['sector'];
     $cell=$_POST['cell'];
     $village=$_POST['village'];
     $email=$_POST['email'];
    $sql="UPDATE exaddress SET village='$village', cell='$cell' WHERE email='$email';";
    $save="INSERT INTO address (idnumber,firstname,lastname,gender,status,sector,cell,village,date) VALUES (' $id','$firstname',' $lastname',' $gender','$status','$sector','$cell','$village','$date');";
       mysqli_query($conn,$sql);
       mysqli_query($conn,$save);
       if(mysqli_query($conn,$save)){
           echo "saved";
       }
       else{
           echo "failed".mysqli_error($conn);
       }
       echo "<script>alert('The address has been updated');</script>";
       exit();
   }

}
?>