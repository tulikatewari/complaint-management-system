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
	background-color: #EFECED  ;
	background-image: url(http://www.gpck.rajasthan.gov.in/placement/GovtPsJobs/Application%20Form%20DMRC_files/logo.bmp);
	background-repeat:no-repeat;
background-size:none;
background-position:top left;
}
table{
font-family: arial,sans-serif;
border-collapse: collapse;
width: 100%;
}
td,th{
border: 2px solid #000000;
text-align: left;
padding: 8px;
}
th {
    background-color: #CD0505;
    color: white;
}
tr:nth-child(even)
{
background-color: #dddddd;
}
.button{
background-color: #333333  ;
width: 19%;
border: 1px solid #000000;
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
<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome <?php echo $_SESSION['username']; ?></h1>
<h2> <center>DMRC Complaint System</center> </h2>
&nbsp;&nbsp;&nbsp; <a href="form1.php" class="button"><center><font size="4">New Complaint</font></center></a>
<a href="form2.php" class="button"><center><font size="4">Update Complaint</font></center></a>
<a href="form3.php" class="button"><center><font size="4">Show Complaint</font></center></a>
<a href="index.php" class="button"><center><font size="4">Logout</font></center></a>
<br><br>
<table>

<tr>
<th>Sr</th>
<th>ID</th>
<th>Mode</th>
<th>Referral No</th>
<th>Complaint Name</th>
<th>Complaint No</th>
<th>Dated</th>
<th>Station</th>
<th>Pertains To</th>
<th>PCO Upload</th>
<th>PCO Comments</th>
<th>Concern To</th>
<th>Subject</th>
<th>Brief Fact</th>
<th>Security Upload</th>
<th>Security Comments</th>
<th>Dept.</th>
<th>CISF Upload</th>
<th>CISF Comments</th>
<th>General Comments</th>
<th>General Upload</th>
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

