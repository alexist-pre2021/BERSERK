<?php

/*$connection permet de relier le compte root admin vers le code*/
$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection,"youtubedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];
/*$query INSERT INTO permet de reconnaitre les datas à travers la base donnée choisie.*/ 
$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES('$user','$email','$message')";

mysqli_query($connection,$query);

echo "LE MESSAGE A ETE ENVOYE";
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="\berserk\user.css">
        <title>ENVOIE</title>
    </head>
    <body>
        <video src=""></video>
    </body>
</html>