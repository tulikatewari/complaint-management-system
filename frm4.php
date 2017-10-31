<?php

$con = mysqli_connect("localhost","root","","compl");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 $sr = isset($_POST['Sr'])?$_POST['Sr']:'';
 
 
  $id = isset($_POST['ID'])?$_POST['ID']:'';
  $mode = isset($_POST['Mode'])?$_POST['Mode']:'';
  $referral = isset($_POST['Referral_no'])?$_POST['Referral_no']:'';
  $name = isset($_POST['complaint_name'])?$_POST['complaint_name']:'';
  $no = isset($_POST['complaint_no'])?$_POST['complaint_no']:'';
  $date = isset($_POST['dated'])?$_POST['dated']:'';
  $station = isset($_POST['station'])?$_POST['station']:'';
  $pertains = isset($_POST['pertains_to'])?$_POST['pertains_to']:'';
  $upload = isset($_POST['PCO_upload'])?$_POST['PCO_upload']:'';
  $comment = isset($_POST['PCO_comments'])?$_POST['PCO_comments']:'';
  $general = isset($_POST['General_comments'])?$_POST['General_comments']:'';
  $up = isset($_POST['General_upload'])?$_POST['General_upload']:'';
  $status=isset($_POST['Status'])?$_POST['Status']:'';
  
  
  $sr = mysqli_real_escape_string($con,$sr);
  $id = mysqli_real_escape_string($con,$id);
  $mode= mysqli_real_escape_string($con,$mode);
  $referral = mysqli_real_escape_string($con,$referral);
  $name = mysqli_real_escape_string($con,$name);
  $no = mysqli_real_escape_string($con,$no);
  $date = mysqli_real_escape_string($con,$date);
  $station = mysqli_real_escape_string($con,$station);
  $pertains = mysqli_real_escape_string($con,$pertains);
  $upload = mysqli_real_escape_string($con,$upload);
  $comment = mysqli_real_escape_string($con,$comment);
  $up = mysqli_real_escape_string($con,$up);
  $general = mysqli_real_escape_string($con,$general);
   $status = mysqli_real_escape_string($con,$status);
   
  
   
   $query="UPDATE complaints SET ID='".$id."',Mode='".$mode."',Referral_no='".$referral."',complaint_name='".$name."',complaint_no='".$no."',dated='".$date."',station='".$station."',pertains_to='".$pertains."',PCO_upload='".$upload."',PCO_comments='".$comment."',General_comments='".$general."',General_upload='".$up."',Status='".$status."' WHERE Sr='".$sr."'";
if(mysqli_query($con, $query)){
  header('location:table.php');}
	 else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
  mysqli_close($con);

?>