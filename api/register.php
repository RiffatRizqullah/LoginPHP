<?php

require "../vendor/autoload.php";
require "../config.php";

use GuzzleHttp\Client;

$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

$client = new Client();

try{

$response = $client->post(
SUPABASE_URL."/auth/v1/signup",
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

if(isset($data["access_token"])){

    $_SESSION["access_token"]=$data["access_token"];
    $_SESSION["user"]=$data["user"];

    header("Location: ../dashboard.php");
    exit;
}

echo "Silakan verifikasi email terlebih dahulu.";

}catch(Exception $e){

echo "Registrasi gagal.";

}