<?php
header( 'Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: authorization');
header('Access-Control-Allow-Credentials: true');

//SELECT title, post.idUser,pseudo FROM post INNER JOIN user ON post.idUser=user.idUser;

//$token = str_replace('Bearer', '', getallheaders()['authorization']);
echo json_encode([
    'username' => $_SERVER['PHP_AUTH_USER'],
    'password' => $_SERVER['PHP_AUTH_PW']
]);