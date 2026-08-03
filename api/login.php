<?php

session_start();

require "../vendor/autoload.php";
require "../config.php";

use GuzzleHttp\Client;

$email=$_POST['email'];
$password=$_POST['password'];

$client=new Client();

try{

$response=$client->post(
SUPABASE_URL."/auth/v1/token?grant_type=password",
[
"headers"=>[
"apikey"=>SUPABASE_ANON_KEY,
"Content-Type"=>"application/json"
],
"json"=>[
"email"=>$email,
"password"=>$password
]
]);

$data=json_decode($response->getBody(),true);

$_SESSION['access_token']=$data['access_token'];
$_SESSION['user']=$data['user'];

header("Location: ../dashboard.php");

}catch(Exception $e){

echo "Login gagal.";

}