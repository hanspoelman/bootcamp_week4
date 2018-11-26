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
                    <li> <a class="active" href="home.php">Blog plaatsen</a></li>
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
                <p>Leuk dat je een blog wilt plaatsen op mijn blogsite. Voordat je een blog gaat plaatsen wil ik wel graag weten wie je bent.<br>
                    Vul je gegevens. Succes met plaatsen en bedankt voor je medewerking.</p>
                <h2> Hieronder kun je een blogplaatsen!</h2>
            <header>
    
            </header>
                <div class="blogbericht">
                
                    <form action="blogscript.php" method="post"> 
                        <label for="titel"> Titel</label><br>
                        <input type="text" id="titel" name="titel" required><br>
                    
                        <label for="auteur"> Auteur</label><br>
                        <input type="text" id="auteur" name="auteur" required><br>
                        
                        <label for="email">e-mail</label><br>
                        <input type="email" id=email name="email" required><br>    
                    
                        <label for="categorie">Categorie</label><br>
                        <select> 
                            
                            <option value="sport">Sport</option>
                            <option value="geschiedenis">Geschiedenis</option>
                            <option value="natuur">Natuur</option>
                            <option value="nederlands">Nederlands</option>
                            <option value="engels">Engels</option>
                            <option value="wereldorientatie">Wereldorientatie</option> 
                            <option value="marketing">Marketing</option> 
                            <option value="economie">Economie</option>
                            <option value="comminicatie">Comminacatie</option>
                            <option value="kunst">Kunst</option>
                            <option value="media">Media</option><br>   
                        </select>
                        <br>
                        <label for="blog">Blog</label><br>
                        <textarea id="blog" name="blog" required></textarea> <br>
    
                        <label for="verzenden"></label><br>
                        <input type="submit" id="verzenden" name="verzenden"><br>
                        <br>
                    </form>  
                </div>
                
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