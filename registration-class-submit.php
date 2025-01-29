<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

$dbHost = '35.200.242.200:3306';
$dbUsername = 'equal_new_user';
$dbPassword = 'yU89^*&hbfsd7GTas%&0as';
$dbName = 'equal_new_db'; 

$con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$formmessage='';
if(isset($_POST['classsubmit']))
{
	$formclass=$_POST['formclass'];
	$rname=$_POST['Name'];
	$remail=$_POST['Email'];
	$rphone=$_POST['Phone'];
	$rcity=$_POST['Place'];
	$rcourses=$_POST['Course'];
	$enquiry_institute=$_POST['enquiry_institute'];

	$createat=date('Y-m-d');
	$createtime=date('Y-m-d H:i:s');

	$enquiry_math=0;
	$enquiry_science=0;
	$enquiry_phy=0;
	$enquiry_che=0;
	$enquiry_bio=0;
	$enquiry_reasoning=0;
	$enquiry_totalmarks=0;
	$enquiry_remarks='';
 
  $rphonecheck = strlen($rphone);
 if($rphonecheck == 10)
 {
  $insertqry="INSERT INTO `enquiry_master`(`enquiry_date`, `enquiry_institute`, `enquiry_name`, `enquiry_email`, `enquiry_phone`, `enquiry_class`, `enquiry_school`, `enquiry_cource`, `enquiry_remarks`,`enquiry_ctime`, `enquiry_city`, `enquiry_type`,`enquiry_math`,`enquiry_science`,`enquiry_phy`,`enquiry_che`,`enquiry_bio`,`enquiry_reasoning`,`enquiry_totalmarks`) VALUES ('$createat','$enquiry_institute','$rname','$remail','$rphone','$formclass','','$rcourses','$enquiry_remarks','$createtime','$rcity','Class','$enquiry_math','$enquiry_science','$enquiry_phy','$enquiry_che','$enquiry_bio','$enquiry_reasoning','$enquiry_totalmarks')";
 $insertres=mysqli_query($con, $insertqry);
 if($insertres)
 {
  echo '<script>alert("Form Successfully submitted"); window.location="index.php"; </script>';
 }
 else
 {
  echo '<script>alert("Sorry. Please try again"); window.location="index.php"; </script>';
 }	 
 }
 else{
 echo '<script>alert("Mobile number must be 10 digits. Please try again"); window.location="index.php"; </script>';
 }
}
else
{
 echo '<script>alert("Sorry. Please try again"); window.location="index.php"; </script>';
 }

 
?>