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
if(isset($_POST['btnRSubmit']))
{
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rphone=$_POST['rphone'];
	$rcity=$_POST['rcity'];
	$rcourses=$_POST['rcourses'];
	$enquiry_institute=$_POST['enquiry_institute'];
	$tntse_term='1';

	$createtime=date('Y-m-d H:i:s');

 
 $rphonecheck = strlen($rphone);
 if($rphonecheck == 10 AND $rname!='' AND $remail!='' AND $rcity!='' AND $rcourses!='' AND $enquiry_institute!='')
 {
  $insertqry="INSERT INTO `tntse_registration_2023`(`tntse_name`, `tntse_email`, `tntse_phone`, `tntse_city`, `tntse_center`, `tntse_course`, `tntse_term`, `tntse_ctime`) 
  VALUES ('$rname','$remail','$rphone','$rcity','$enquiry_institute','$rcourses','$tntse_term','$createtime')";
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