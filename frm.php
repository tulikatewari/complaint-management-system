<?php
$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo $_FILES["image"]["name"];
 		if($_POST[$_FILES["image"]["name"]!=""])
		{
			$target_dir = "uploads/";
		$target_file1 = $target_dir . basename($_FILES["image"]["name"]);
		
		$uploadOk = 1;
		$fileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
		if (file_exists($target_file1)) {
		
			$uploadOk = 2;
		}
	if ($uploadOk == 0) {
			$err1=$err1."Sorry, your file was not uploaded.";
				$notsuccess++;
		
		}
		   {		
			if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1)) {
				echo "The files has been uploaded.";
			
				
			} else {
				$err1=$err1."There was an error uploading your file.";
					$notsuccess++;
			}
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

 

  $query = "INSERT INTO complaints(ID, Mode, Referral_no, complaint_name, complaint_no, dated, station, pertains_to, PCO_upload, PCO_comments, Concern_to, subject, Brief_fact, Security_upload, Security_comments, Deptt, CISF_upload, CISF_comments, General_comments, General_upload, Status)VALUES('$id', '$mode', '$referral', '$name', '$no', '$date', '$station', '$pertains', '$target_file1', '$comment','', '', '', '', '', '', '', '', '$general', '$up', '$status')";
  if(mysqli_query($con, $query)){
  header('location:table.php');}
	 else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}

  mysqli_close($con);
}
?>