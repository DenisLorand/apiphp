<?php

require('vendor/autoload.php');

// $_SERVER['REQUEST_URI']

// Si mon url != "

if($_SERVER['HTTP_HOST'] != "api-slack-token-dl.herokuapp.com"){
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}

// sinon je ne le fais pas
$ary = array("token" => $_ENV['TOKEN']);
$data = json_encode($ary);


// [{data: "Hello world !"}]

echo ($data);

?>