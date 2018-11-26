<?php

//  verbinding maken en gegevens opslaan

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week3';
        
    $conn= new mysqli($host,$user,$pass,$dbase);

    $titel=$_POST['titel'];
    $auteur=$_POST['auteur'];
    $email=$_POST['email'];
    $blog=$_POST['blog'];
    $categorie=$_POST['categorie'];
      
    $sql = "INSERT INTO blog (titel,auteur,email,blog) VALUES (?,?,?,?)";  
    $sql = "INSERT INTO categorie (categorie) VALUES (?)";

    if ($stmt=$conn->prepare($sql)) {
        $stmt->bind_param("sssss", $mytitel, $myauteur, $myemail, $myblog, $mycategorie);
        $mytitel=$titel;
        $myauteur=$auteur;
        $myemail=$email;
        $myblog=$blog;
        $mycategorie=$categorie;
        
        $stmt->execute();
    }
    
//  Na het plaatsen van de blogs ga je naar de blogpagina        
    header("location: blogs.php")
        
//    $conn->close();

?>
