<!doctype HTML>
    <html>
        <head>
            <title>Blog website week3</title>
            <link rel="stylesheet" a href="Stylesheetweek4.css">
        </head>
        <body>
            <div class="grid-container">
            <div class="item1">
                  <nav>
                    <ul>
                    <li> <a class="active" href=home.php>Home</a></li>
                    <li> <a href="blogplaatsen.php">Blog plaatsen</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                    </ul>
                 </nav>
            </div>
            <div class="item2"></div>
            <div class="item3">
                <br>
                <a href="registreren.php" class="button">registreren</a>
                <a href="inlog.php" class="button">inlog</a>
                </div>
            <div class="item4">
                <h1>Welkom op mijn blogsite!</h1>
             <p>Hieronder kun selecteren op onderwerp.</p>
            <?php
            ini_set('display_errors',1);
                error_reporting(E_ALL);

            $host='localhost';
            $user='root';
            $pass='mysql';
            $dbase='bootcamp_week3';

            $conn= new mysqli($host,$user,$pass,$dbase);

            $sql= "SELECT * FROM blog post ORDER BY id DESC";
            $result = mysqli_query($conn,$sql);
                    
            while ($row = mysqli_fetch_row($result)) 
            {
                echo '<p class="blog">';
                echo $row[2]. "<br>";
            }
                
            $sql= "SELECT * FROM categorie";
            $result = mysqli_query($conn,$sql);
                
            while ($row = mysqli_fetch_row($result))
            {
                echo '<p class="categorie>';
                echo $row[1]. "<br>";
            }    
            $sql= "SELECT categorie.categorie FROM blog join blog_categorie on blog_categorie.blog_id = blog.id join categorie on blog_categorie.categorie_id = categorie.id";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_row($result)) {
                echo $row[0];
            }   
            ?>                 
            <form action= "categoriesorteerscript.php" method="post">                 
            <select name="categorie">
            <option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>          
               </select> 
               </form>
            
                
            <?php
            $conn->close();
            ?> 
            </div>
            <div class="item5"></div>
            <div class="item6"></div>
            <div class="item7">
                 <footer>
                    <br>
                <p align="center"> ©Code Gorilla 2018</p>
            </footer>
            </div>
            </div>
            
        </body>
    
</html>
