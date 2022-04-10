<?php

	
    $servername = "db";
    $username = "root";
    $password = "password";
    $database= "data";

    //SELECT user.idUser,name, post.idUser, title, content FROM post INNER JOIN user ON post.idUser=user.idUser;
    // Création de la connexion
    $db = mysqli_connect($servername, $username, $password, $database);
      if ($db->connect_error) {
        die("Connexion pas réussi: " . $db->connect_error);
      }
?>