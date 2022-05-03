<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css"/>
        <link rel="shortcut icon" href="\berserk\img\Berserk_Sacrifice_Emblem.png" type="image/x-icon">
        <title>BERSERK</title>
    </head>
    <body>
        <div class="container">
            <section class="main">
                <nav>
                    <a href="./index.php" class="logo">
                    <img src="img\logo1 (2).png"/>
                    </a> 
                    <!-- mise en place de la navbar  -->
                    <ul class="menu">
                        <li><a href="#" class="active">Accueil</a></li>
                        <li><a href="#">Personnages</a></li>
                        <li><a href="#">Monde</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="main-heading">
                    <h1 class="intro1">TOUT SUR L'UNIVERS DE MIURA</h1>
                    <p></p>
                </div>
            </section>
            <section class="features">
                <div class="feature-container">
                    <div class="feature-box">
                        <div class="f-img">
                            <img src="\berserk\img\GutsIntro (1).jpg">
                        </div>
                        <div class="f-text">
                            <h4>GUTS</h4>
                            <p>Le guerrier noir</p>
                            <a href="\berserk\guts.php" class="main-btn">Cliquer</a>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="f-img">
                            <div class="col-6 col-md-12 img"><img src="\berserk\img\GriffithIntro (1).jpg"></div>
                        </div>
                        <div class="f-text">
                            <h4>GRIFFITH</h4>
                            <p>le chevalier faucon</p>
                            <a href="#" class="main-btn">Cliquer</a>
                        </div>
                    </div>
                    <!-- <div class="feature-box">
                        <div class="f-img">
                            <img src="\htdocs\img\SkullKnightIntro (1).jpg">
                        </div>
                        <div class="f-text">
                            <h4>SKULL KNIGHT</h4>
                            <p>Le roi déchu</p>
                            <a href="#" class="main-btn">Cliquer</a>
                        </div>
                    </div> -->
                </div>
            </section>
            <section class="Miura">
                <img src="\berserk\img\miura.jpg" alt="#">
            </section>
            <section class="about">
                <div class="about-img">
                    <img src="\berserk\img\berserkMap.jpg">
                </div>
                <div class="about-text">
                    <h2>LA CARTE DU MONDE</h2>
                    <p>L'histoire se passe dans une Europe médiévale fictive, précisement dans le midland <br>
                        où l'on retrouve les deux protagoniste Guts et Griffith deux frères d'armes de la bande du Faucon mené par le chevalier faucon.<br>
                    </p>
                    <button class="main-btn" href="https://apprentiotaku.wordpress.com/2020/04/28/berserk-avant-pendant-et-apres-leclipse/">En savoir plus</button>
                </div>
            </section>
            <section class="contact">
                <div class="contact-heading">
                    <h1>Contactez-nous</h1>
                    <p>Vous voulez faire part de votre avis ?, complétez le formulaire juste en dessous afin que nous puissions prendre en compte votre message.</p>
                </div>
                <form action="userinformation.php" method="post">
                    <input type="text" name="user" placeholder="Pseudonyme"/>
                    <input type="email" name="email" placeholder="Votre Mail"/>
                    <textarea name="message" id="contactpage" placeholder="Ecrivez votre message ici.........."></textarea>
                    <button class="main-btn contact-btn" Type="submit">Envoyer</button>
                </form>
            </section>
        </div>
        <footer>
            <div class="text-center p-3">
                © Copyright 2022. All Rights Reserved.
            </div>
        </footer>
    </body>
</html>