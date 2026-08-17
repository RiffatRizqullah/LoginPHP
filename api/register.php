<?php

session_start();

require "../vendor/autoload.php";
require "../config.php";

use GuzzleHttp\Client;

$client = new Client();

try {

    $response = $client->post(
        SUPABASE_URL . "/auth/v1/signup",
        [
            "headers" => [
                "apikey" => SUPABASE_ANON_KEY,
                "Content-Type" => "application/json"
            ],
            "json" => [
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ]
        ]
    );

    $data = json_decode($response->getBody(), true);

    if (isset($data["access_token"])) {

        $_SESSION["access_token"] = $data["access_token"];
        $_SESSION["user"] = $data["user"];

        header("Location: ../dashboard.php");
        exit;
    }

    echo "Registrasi berhasil.";

} catch (Exception $e) {

    echo $e->getMessage();

}