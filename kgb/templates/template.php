<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Description of the website -->
    <meta name="description" content="Site du KGB permettant d'afficher de gérer les missions et de les gérer par les administrateurs.">
    <!-- Fonts Montserrat - Fira Sans Condensed - Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@700&family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>KGB</title>
</head>


<body>

        <!------------- Header --------------->
        <header id="top">

            <!-- Navigation bar -->
            <nav id="menu" class="navbar navbar-expand-lg navbar-light px-5">
                <!-- Logo -->
                <div class="logo mx-4">
                    <a class="navbar-brand" href="#">
                        <img src="./img/logo-kgb.png" style="height: 120px"/>
                    </a>
                </div>
                <!-- Button for burger menu-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Target of the button -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto mx-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Missions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!------------- Main --------------->
        <main class="container-fluid bg-img">
            <h1><?= $title; ?></h1>
            <?= $content; ?>
        </main>


        <!------------- Footer --------------->
        <footer class="container-fluid">
            <div class="row py-3"> 
                <!-- Mentions politics and conditions -->
                <div class="col-12 d-flex justify-content-center align-items-center my-3"> 
                    <a href="#" class="footer-link pr-4">Mentions légales</a>
                    <a href="#" class="footer-link">Politique de confidentialité</a>
                </div>
                <!-- Copyright -->
                <div class="col-12 d-flex justify-content-center">
                    <p>Tous droits réservés &copy;
                        <span id="year">2022 KGB</span>
                    </p>
                </div>
            </div>
        </footer>


    <!-- JQuery Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- JS Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- JS Ekko Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="app.js"></script>
</body>
</html>