<html>
<head> <title>Technical Altaf</title>
<meta name="viewport" content="width=device-width"><style>
.hr-19 {
  border: none;
  height: 10px;
  background: linear-gradient(-135deg, #fff 5px, transparent 0) 0 5px, linear-gradient(135deg, #fff 5px, #8c8c8c 0) 0 5px;
  background-color: #fff;
  background-position: left bottom;
  background-repeat: repeat-x;
  background-size: 10px 10px;
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:placeholder {
  color: #cccccc;
}input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FF0040;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
</style></head><title></title><body><center><b><center>
<html><head>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
</head>
<body style='font-family: Yatra One;'>
 </style>
 </head>
 <title>Technical Altaf</title>
 <body>
 <center>
     <?php
error_reporting(0);
if(isset($_GET['submit'])){
	#header('refresh: 2');
	$uid=$_GET['uid'];
    $cd=$_GET['cd'];
    $utok=$_GET['utok'];
    
    $timer=$_GET['timer'];
	
$url1="http://fkhas.ir/api/v1/orders.php";
$data1='user_pk='.$uid.'&x_version=1&action='.$cd.'&user_token='.$utok.'&';
$headers1=['X-Access: cafegram', 
'X-Version: 1', 
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8', 
'User-Agent:Dalvik/2.1.0 (Linux; U; Android 9; RMX1945 Build/PPR1.180610.011)', 
'Host:fkhas.ir', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

	$output1= curl_exec ($ch);
	$json1=json_decode($output1,true);
	curl_close ($ch);
$id=$json1['data'][0]['id'];
$pk=$json1['data'][0]['user_pk'];


$url0="http://fkhas.ir/api/v1/coin.php";
$data0='user_pk='.$uid.'&x_version=1&action='.$cd.'&user_token='.$utok.'&pk='.$pk.'&order_id='.$id.'&';
sleep($timer);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$output= curl_exec ($ch);
	$json=json_decode($output,true);
	curl_close ($ch);
    
echo"<div class='success'><hr class='style5'>$output<hr class='style5'><br></div>";
echo '<meta http-equiv="refresh" content="0">';
	    }
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>
    <center> <select name='timer'>
<option value='0'>No Delay</option>
<option value='1'>Slow-1sec</option>
<option value='2'>Slow-2sec</option>
<option value='3'>Slow-3sec</option>
<option value='4'>Slow-4sec</option>
<option value='5'>Slow-5sec</option>
<option value='6'>Slow-6sec</option>
<option value='7'>Slow-7sec</option>
<option value='8'>Slow-8sec</option>
<option value='9'>Slow-9sec</option>
</select> </center>
<center> <select name='cd'>
<option value='follow'>FOLLOW Bypass</option>
<option value='like'>LIKE Bypass</option>
<option value='comment'>COMMENT Bypass</option>
</select> </center>
<input type='text' name='uid'  class='text' placeholder='Enter Your user-ID' required><br><br>
<input type='text' name='utok'  class='text' placeholder='Enter Your user-token' required><br><br>

";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>
 
