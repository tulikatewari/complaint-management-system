<?php 
$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
}
$sr = $_POST['Sr'];
?>