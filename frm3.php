
<?php
$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sr=$_POST['Sr'];
 //$query="SELECT * from complaints WHERE Sr=$sr";
 //$result=mysqli_query($con,$query);
 //$row=mysqli_num_rows($result);
}

?>


 <!DOCTYPE HTML>
 <html>
 <head>
 <style>
body{
	background-color: #DFDFD6  ;
	font-family: arial,sans-serif;
	font-size: 40px;
	
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
form{
	font-family: arial,sans-serif;
	font-size: 20px;
}
</style>
</head>

<body>
<center>
<h2> <b><font color="DarkSlateGrey">Show Complaint</font></b></h2>
<b>
<?php
$query="SELECT * from complaints WHERE Sr=$sr";
$result = $con->query($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo "SR   : &nbsp;&nbsp;" . $row["Sr"]. " &nbsp;&nbsp; ID    : &nbsp;&nbsp; " . $row["ID"]. " &nbsp;&nbsp;MODE : &nbsp;&nbsp;   " . $row["Mode"]. "<br><br>";
	echo "Referral no. : &nbsp;&nbsp;  " . $row["Referral_no"]. "&nbsp;&nbsp; Complaint no : &nbsp;&nbsp;" . $row["complaint_no"]. "&nbsp;&nbsp;Complaint Name :  " . $row["complaint_name"]. "<br><br>";
	echo "Dated  :  &nbsp;&nbsp;" . $row["dated"]. "&nbsp;&nbsp; Station  : &nbsp;&nbsp;" . $row["station"]. "pertains To :  &nbsp;&nbsp;" . $row["pertains_to"]. "<br><br>";
	echo "PCO comments :  &nbsp;&nbsp;" . $row["PCO_comments"]. "&nbsp;&nbsp; PCO upload : &nbsp;&nbsp;" . $row["PCO_upload"]. "<br><br>";
	echo "General comments :&nbsp;&nbsp;&nbsp;" . $row["General_comments"]. "&nbsp;&nbsp; General upload  :  &nbsp;&nbsp;" . $row["General_upload"]. "<br><br>";
	echo "Status : &nbsp;&nbsp;" . $row["Status"]. "<br><br>" ; 
	echo "Brief Fact   : &nbsp;&nbsp;" . $row["Brief_fact"];
	}
	if($result->num_rows==0) 
	{
		echo "no data found" ;
	}
}
?>
</center>


</body>
</html>