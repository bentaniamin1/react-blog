<?php
require 'connexion.php';
header( 'Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: authorization');
header('Access-Control-Allow-Credentials: true');

//  getallheaders();
// // var_dump($token);
// // var_dump($_SERVER['argv'][0]);
// // $variables =  explode("?", $_SERVER['argv'][0]);
// // echo $variables[0];

// // $content = explode("=", $variables[0]);
// // $title = explode("=", $variables[1]);
// // $id = explode("=", $variables[2]);
// // var_dump($_POST);

var_dump($_SERVER);
$var = json_encode([
    'title' => $_POST['title'],
    'content' => $_POST['content'],
    'id' => $_POST['id'],
    
]);

var_dump($var);

     
     
    $title = $_POST['title'];
    $contenu = $_POST['content'];
    $idUser =  $_POST['id'] ;
    $sql = "INSERT INTO post ( title, content, idUser ) VALUES ('$title', '$contenu', $idUser )";

    if(($title !== null ) && ($contenu !== null ) ) {
        mysqli_query($db,$sql);
    }
    else{
         http_response_code(422); 
    }
         

?> 