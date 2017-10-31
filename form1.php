<?php
$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 		if([$_FILES["image"]["name"]!=""])
		{
			/*$target_dir = "/uploads/";
		$target_file1 = $target_dir . basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $target_file1);
				/*echo "The files has been uploaded.";
			
				
			} else {
				$err1=$err1."There was an error uploading your file.";
					$notsuccess++;
			}*/
		
		/*$uploadOk = 1;
		$fileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
		if (file_exists($target_file1)) {
		
			$uploadOk = 2;
		}*/	

		$file = rand(1000,100000)."-".$_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
		$file_type = $_FILES['image']['type'];
		$folder="uploads/";
		//$target_file1 = $folder . basename($_FILES['image']['name']);
		// new file size in KB
		$new_size = $file_size/1024;  
		// new file size in KB
	
		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case
	
		$final_file=str_replace(' ','-',$new_file_name);
		$target_file1 = $folder . $final_file;
	
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{			
		?>
			<script>
			alert('successfully uploaded');
			window.location.href='table.php?success';
			</script>
		<?php
		}
		}
		else
		{
		$target_file1=null;
		}
		
  
  //$sr = isset($_POST['Sr'])?$_POST['Sr']:'';
  $id = isset($_POST['ID'])?$_POST['ID']:'';
  $mode = isset($_POST['Mode'])?$_POST['Mode']:'';
  $referral = isset($_POST['Referral_no'])?$_POST['Referral_no']:'';
  $name = isset($_POST['complaint_name'])?$_POST['complaint_name']:'';
  $no = isset($_POST['complaint_no'])?$_POST['complaint_no']:'';
  $date = isset($_POST['dated'])?$_POST['dated']:'';
  $station = isset($_POST['station'])?$_POST['station']:'';
  $pertains = isset($_POST['pertains_to'])?$_POST['pertains_to']:'';
 // $upload = isset($_POST['PCO_upload'])?$_POST['PCO_upload']:'';
  $comment = isset($_POST['PCO_comments'])?$_POST['PCO_comments']:'';
  $general = isset($_POST['General_comments'])?$_POST['General_comments']:'';
  $up = isset($_POST['General_upload'])?$_POST['General_upload']:'';
  $status=isset($_POST['Status'])?$_POST['Status']:'';
  
  
   // $sr = mysqli_real_escape_string($con,$sr);
  $id = mysqli_real_escape_string($con,$id);
  $mode= mysqli_real_escape_string($con,$mode);
  $referral = mysqli_real_escape_string($con,$referral);
  $name = mysqli_real_escape_string($con,$name);
  $no = mysqli_real_escape_string($con,$no);
  $date = mysqli_real_escape_string($con,$date);
  $station = mysqli_real_escape_string($con,$station);
  $pertains = mysqli_real_escape_string($con,$pertains);
 // $upload = mysqli_real_escape_string($con,$upload);
  $comment = mysqli_real_escape_string($con,$comment);
  $up = mysqli_real_escape_string($con,$up);
  $general = mysqli_real_escape_string($con,$general);
   $status = mysqli_real_escape_string($con,$status);

 

  $query = "INSERT INTO complaints(ID, Mode, Referral_no, complaint_name, complaint_no, dated, station, pertains_to, PCO_upload, PCO_comments, Concern_to, subject, Brief_fact, Security_upload, Security_comments, Deptt, CISF_upload, CISF_comments, General_comments, General_upload, Status)VALUES('$id', '$mode', '$referral', '$name', '$no', '$date', '$station', '$pertains', '$file', '$comment','', '', '', '', '', '', '', '', '$general', '$up', '$status')";
  if(mysqli_query($con, $query)){
  header('location:table.php');}
	 else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}

  mysqli_close($con);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	background-color: #DFDFD6  ;
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
input[type=text]{
	width: 20%;
	padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=date]{
	width: 20%;
	padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
</head>
<body>
<h1> <center> New Complaint </center></h1>
<form action="" method="POST" enctype="multipart/form-data"><br>
<center>
<b> ID :</b>
<input type="text" placeholder="ID" class="input" name="ID"><br><br><br>

</center>

<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complaint Mode: </b> 
<input type="text" placeholder="Mode" class="input" name="Mode">
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referral No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
<input type="text" placeholder="Referral no" class="input" name="Referral no"><br><br>
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complaint Name: </b>
<input type="text" placeholder="complaint name" class="input" name="complaint name">
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complaint Date : &nbsp; </b>
<input type="date" placeholder="dated" class="input" name="dated"><br><br>
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complaint No : &nbsp;&nbsp;&nbsp;</b>
<input type="text" placeholder="complaint no" class="input" name="complaint no">
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Station : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
<input type="text" placeholder="station" class="input" name="station"><br><br>
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pertains to : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<input type="text" placeholder="pertains to" class="input" name="pertains to">
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PCO Comments : </b>
<input type="text" placeholder="PCO comments" class="input" name="PCO comments"><br><br>

<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PCO Upload :</b>
<input type="file" name="image"/>

<br><br><br>
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Upload :</b>
<input type="text" placeholder="General upload" class="input" name="Generalupload">
<b>General Comments :</b>
<input type="text" placeholder="General Comments" class="input" name="General Comments">
<b>Status :</b>
<input type="text" placeholder="Status" class="input" name="Status"><br><br>

<center><a href="table.php" class="button">Back</a></center><br>
<center><button class="button" type="submit" name="submit">Submit</button><center>

<form>
</body>
</html>

