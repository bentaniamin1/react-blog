<?php
include('connexion.php');
include_once('core.php');
//All Users
    $query = "SELECT pseudo,password,tokenUser, idUser FROM user";
    $response = array();
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result))
    {
      $response[] = $row;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);

?>