<?php

$connection=mysqli_connect("localhost","root","","mysql");
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
</style>
</head>
<body>
<table>

<?php
echo"<table>";

while($row=mysqli_fetch_array($result))
{
echo "<tr><td>" .$row['Sr'] ."</td><td>" .$row['ID'] ."</td><td>" .$row['Mode'] ."</td><td>" .$row['Referral no'] ."</td><td>" .$row['complaint name'] ."</td><td>" .$row['complaint no'] ."</td><td>" .$row['dated'] ."</td><td>" .$row['station'] ."</td><td>" .$row['pertains to'] ."</td><td>" .$row['PCO upload'] ."</td><td>" .$row['PCO comments'] ."</td><td>" .$row['Concern to'] ."</td><td>" .$row['subject'] ."</td><td>" .$row['Brief fact'] ."</td><td>" .$row['Security upload'] ."</td><td>" .$row['Security comments'] ."</td><td>" .$row['Deptt'] ."</td><td>" .$row['CISF upload'] ."</td><td>" .$row['CISF comments'] ."</td><td>" .$row['General comments'] ."</td><td>" .$row['General upload'] ."</td><td>" .$row['Status'] ."</td></tr>";
}
echo "</table>";


mysqli_close($connection);
?>
</table>
</body>
</html>