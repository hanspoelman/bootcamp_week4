<?php

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week3';
        
    $conn= new mysqli($host,$user,$pass,$dbase);

    $query = "SELECT username, password FROM registreren";
    $result = $conn->query($query);
         while ($row = $result->fetch_assoc()) {
           if ($row ["username"] == $_POST["username"]) {
               if ($row ["password"] == $_POST["password"]) {
                   echo "<script type='text/javascript'>alert('u bent ingelogd!')</script>";
                   header("location: home.php");
               }
           }
               else {
                    echo "<script type='text/javascript'>alert('Gerbuikersnaam en of wachtwoord zijn onjuist!)</script>";
                   header("location: inlog.php");
               }
       }

   $conn->close();
?>

