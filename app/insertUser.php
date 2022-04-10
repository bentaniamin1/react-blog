<?php
require 'connexion.php';
require 'generatorToken.php';
header( 'Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: authorization');
header('Access-Control-Allow-Credentials: true');

var_dump($_SERVER);
    echo json_encode([
        'username' => $_SERVER['PHP_AUTH_USER'],
        'password' => $_SERVER['PHP_AUTH_PW']
    ]);
    $pseudo = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];
    $tkn = (string) $token;
    $sql = "INSERT INTO user (pseudo, password, tokenUser) VALUES ('$pseudo','$password','$token')";
    
    if(($pseudo !== null ) && ($password !== null ) ) {
        mysqli_query($db,$sql);
    }
    else{
         http_response_code(422); 
    }
        
?> 