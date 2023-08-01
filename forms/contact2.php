<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
  $sql= "INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
  $result= mysqli_query($conn,$sql);
  if($result){
    header("location:index.html");
  }
}
?>
