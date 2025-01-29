
<?php
//$con = mysqli_connect("localhost","root","","finocred");
$con = mysqli_connect("35.200.242.200:3306","equal_new_user","yU89^*&hbfsd7GTas%&0as","equal_new_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$whatsappqry ="select * from whatsapp_tocken where tocken_status='Enable'";
$whatsappresult=mysqli_query($con,$whatsappqry);
$whatsappdata=mysqli_fetch_assoc($whatsappresult);
$tockenno=$whatsappdata['tocken_name'];


$receipientno=9650702656;
        $curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://graph.facebook.com/v15.0/109353615428126/messages',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>'{
		"messaging_product": "whatsapp",
		"to": "91'.$receipientno.'",
		"type": "template",
		"template": {
		"name": "eq_rzp_payment",
		"language": {
		"code": "en"
		},
		"components": [
		{
		"type": "body",
		"parameters": [
		]
		}
		]
		}
		}',
		CURLOPT_HTTPHEADER => array(
		'Authorization: Bearer '.$tockenno,
		'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		//print_r($response);
		//////// Whatsapp for parents END
		
		$receipientno=9650912288;
        $curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://graph.facebook.com/v15.0/109353615428126/messages',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>'{
		"messaging_product": "whatsapp",
		"to": "91'.$receipientno.'",
		"type": "template",
		"template": {
		"name": "eq_rzp_payment",
		"language": {
		"code": "en"
		},
		"components": [
		{
		"type": "body",
		"parameters": [
		]
		}
		]
		}
		}',
		CURLOPT_HTTPHEADER => array(
		'Authorization: Bearer '.$tockenno,
		'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		
?>