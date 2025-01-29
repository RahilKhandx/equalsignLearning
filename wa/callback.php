
<?php
//$con = mysqli_connect("localhost","root","","finocred");
$con = mysqli_connect("35.200.242.200:3306","equal_new_user","yU89^*&hbfsd7GTas%&0as","equal_new_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$response = file_get_contents('php://input');
//$response='ABC';
$data = json_decode($response);
$sender_name=$data->entry[0]->changes[0]->value->contacts[0]->profile->name;
$sender_number=$data->entry[0]->changes[0]->value->messages[0]->from;
$receive_time=$data->entry[0]->changes[0]->value->messages[0]->timestamp;
$rdate = date("d-m-Y H:i:s", "$receive_time");
$message=$data->entry[0]->changes[0]->value->messages[0]->text->body;
if($message!='')
{
	$query="INSERT INTO wa_msg (sender_name, sender_number, messages, rdate) VALUES ('$sender_name','$sender_number','$message','$rdate')";
$result=mysqli_query($con,$query);
}


?>