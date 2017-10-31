<?php
session_start(); 

// Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo $error;
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","compl");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);



// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from users where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['username']=$username; // Initializing Session
if($username=="controller"){
header('location:table.php'); }
else if($username=="security")
	{
header('location:table2.php'); }
else{
header('location:table2.php'); } }
else {
$error = "Username or Password is invalid";}
echo $error;
}
mysqli_close($connection); // Closing Connection
}

?>