<?php

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week3';
        
    $conn= new mysqli($host,$user,$pass,$dbase);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        if(!empty($_POST['password']) and !empty($_POST['password']) and !empty($_POST['passwordcheck']) and !emtpy($_POST['mail']))
        {
            if(($_POST['password'])==($_POST['passwordcheck']))
            {

    $gebruikersnaam =mysql_real_escape_string($_POST['username']);
    $wachtword =sha1(salt($_POST['password']));
    $mail = mysql_real_escape_string($_POST['mail']);
    $sql= ('SELECT username FROM registreren WHERE username='.$username.'');
    $uitvoer =mysql_query($sql);
                
    $controle = mysql_num_rows ($uitvoer);
    
    if($controle == 0)
    {
        mysql_query('INSERT INTO registreren (id,usernamme,password,email) VALEUS (",".$username.",".$password.",".$mail.",".now().")');
        exit;
    }
    else    
    {
        header('refresh: 2; url=registreren.php');
        exit;    
        }    
    }
    else
    {
        error(registreren.php);
        extit;
        }
    }
 //   else
   // {
//        error(registreren.php);
//        extit;
      //  }
    }
   
?>
