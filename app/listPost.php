<?php
include('connexion.php');
include_once('core.php');
//All Posts
    $query = "SELECT tokenUser,pseudo,post.idUser,title,content FROM post INNER JOIN user ON post.idUser = user.idUser";
    $response = array();
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result))
    {
      $response[] = $row;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);


    #SELECT tokenUser,pseudo,post.idUser,title,content 
#FROM post 
#INNER JOIN 
#ON user post.idUser = user.idUser



#ALTER TABLE post
#ADD FOREIGN KEY (idUser) REFERENCES user(idUser);
?>
