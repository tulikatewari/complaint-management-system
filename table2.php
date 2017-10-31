<?php
include_once('login.php');
?>
<?php

$connection=mysqli_connect("localhost","root","","compl");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query="SELECT * FROM complaints";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>

<style>
body{
	background-color: #DFDFD6  ;
}
table{
font-family: arial,sans-serif;
border-collapse: collapse;
width: 100%;
}
td,th{
order: 1px solid #dddddd;
text-align: left;
padding: 8px;
}
tr:nth-child(even)
{
background-color: #dddddd;
}
.button{
background-color: #79B5D1  ;
border: none;
color: white;
padding: 15px 32px;
text-align: centre;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}

</style>
</head>
<body>
<h1> Welcome <?php echo $_SESSION['username']; ?></h1>
<h2> DMRC Complaint System </h2>

<a href="form2.php" class="button">Update Complaint</a>
<a href="form3.php" class="button">Show Complaint</a>
<a href="index.php" class="button">Logout</a>

<table>

<tr>
<th>Sr</th>
<th>ID</th>
<th>Mode</th>
<th>Referral no</th>
<th>complaint name</th>
<th>complaint no</th>
<th>dated</th>
<th>station</th>
<th>pertains to</th>
<th>PCO upload</th>
<th>PCO comments</th>
<th>Concern to</th>
<th>subject</th>
<th>Brief fact</th>
<th>Security upload</th>
<th>Security comments</th>
<th>Deptt</th>
<th>CISF upload</th>
<th>CISF comments</th>
<th>General comments</th>
<th>General upload</th>
<th>Status</th>
</tr>
<tbody>
<?php

while($row=mysqli_fetch_array($result))
{
echo "<tr><td>" .$row['Sr'] ."</td><td>" .$row['ID'] ."</td><td>" .$row['Mode'] ."</td><td>" .$row['Referral_no'] ."</td><td>" .$row['complaint_name'] ."</td><td>" .$row['complaint_no'] ."</td><td>" .$row['dated'] ."</td><td>" .$row['station'] ."</td><td>" .$row['pertains_to'] ."</td><td>" .$row['PCO_upload'] ."</td><td>" .$row['PCO_comments'] ."</td><td>" .$row['Concern_to'] ."</td><td>" .$row['subject'] ."</td><td>" .$row['Brief_fact'] ."</td><td>" .$row['Security_upload'] ."</td><td>" .$row['Security_comments'] ."</td><td>" .$row['Deptt'] ."</td><td>" .$row['CISF_upload'] ."</td><td>" .$row['CISF_comments'] ."</td><td>" .$row['General_comments'] ."</td><td>" .$row['General_upload'] ."</td><td>" .$row['Status'] ."</td></tr>";
}

?>
</tbody>
</table>

</body>
</html>

