<!doctype html>
    <html>
        <head>
         <title>blogs</title>
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
                echo $row[1]. "<br>";
                echo "<br>";
                echo $row[4]. "<strong><br> ";
                echo "<br>";
                echo $row[2]. "</strong><br><i>";
                echo $row[5]. "<br>"; 
                }
                $conn->close();
                ?> 
                </div>
                <div class="item5"></div>
                <div class="item6"></div>
                <div class="item7"></div>
            </div>
             <footer>
                    <br>
                <p align="center"> ©Code Gorilla 2018</p>
            </footer>
        </body>
    </html>