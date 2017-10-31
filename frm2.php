<?php
$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sr = isset($_POST['Sr'])?$_POST['Sr']:'';
 //$query="SELECT * from complaints WHERE Sr=$sr";
 //$result=mysqli_query($con,$query);
 //$row=mysqli_num_rows($result);
 $sql="SELECT * from complaints WHERE Sr=$sr";
 $result = mysqli_query ($con,$sql);
 
if ($result->num_rows > 0) 
	while($row = $result->fetch_assoc())
 {
	 $sr = $row['Sr'];
  $id = $row['ID'];
  $mode = $row['Mode'];
  $referral = $row['Referral_no'];
  $name = $row['complaint_name'];
  $no = $row['complaint_no'];
  $date = $row['dated'];
  $station = $row['station'];
  $pertains = $row['pertains_to'];
  $upload = $row['PCO_upload'];
  $comment = $row['PCO_comments'];
  $general = $row['General_comments'];
  $up = $row['General_upload'];
  $status=$row['Status'];
}

}
?>


 <!DOCTYPE HTML>
 <html>
 <head>
 <style>
input[type=text],input[type=date]{
	width: 20%;
	padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
}
body{
	background-color: #DFDFD6  ;
	font-family: arial,sans-serif;
	font-size: 40px;
	
}
.button{
background-color: #931109  ;
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
<h2> <b><font color="FireBrick">Update Complaint</font></b></h2>

<form action="frm4.php" method="POST">
<center>
<b> ID :</b>
<input type="text"  name="ID" value="<?php echo "$id" ?>"><br><br>
<b> SR :</b>
<input type="text"  name="Sr" value="<?php echo "$sr" ?>"><br><br><br>

</center>

<b> Complaint Mode: </b> 
<input type="text"  name="Mode" value="<?php echo "$mode" ?>">
<b> &nbsp;&nbsp;&nbsp; Referral No: </b>
<input type="text"  name="Referral no" value="<?php echo "$referral" ?>">
<b> &nbsp;&nbsp;&nbsp;Complaint Name : </b>
<input type="text"  name="complaint name" value="<?php echo "$name" ?>"><br><br>
<b> Complaint Date: </b>
<input type="date"  name="dated" value="<?php echo "$date" ?>">
<b> Complaint No: </b>
<input type="text"  name="complaint no" value="<?php echo "$no" ?>">
<b>&nbsp;&nbsp;&nbsp; Station : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<input type="text" name="station" value="<?php echo "$station" ?>"><br><br><br>
<b> Pertains to (security/CISF): </b>
<input type="text"  name="pertains to" value="<?php echo "$pertains" ?>"><br><br><br>
<b> PCO Comments : </b>
<input type="text" name="PCO comments" value="<?php echo "$comment" ?>">
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PCO Upload :</b>
<input type="text"  name="PCO upload" value="<?php echo "$upload" ?>"><br><br>
<b>General Upload :</b>
<input type="text" name="General upload" value="<?php echo "$up" ?>">
<b>&nbsp;&nbsp;&nbsp; General Comments :</b>
<input type="text"  name="General Comments" value="<?php echo "$general" ?>"><br><br>
<b>Status :</b>
<input type="text"  name="Status" value="<?php echo "$status" ?>"><br><br>

<center><a href="table.php" class="button">Back</a></center><br>
<center><button class="button" type="submit" name="submit">Submit</button><center>


</center>


</body>
</html>