<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <!-- Inclure les liens vers les feuilles de style des frameworks que vous souhaitez utiliser -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Votre propre feuille de style personnalisée -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Ajoutez du style personnalisé ici */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background: url('entete.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 150px 0; /* Ajustez cette valeur pour augmenter la taille de l'en-tête */
        }

        header h1 {
            font-size: 3em; /* Ajustez cette valeur pour la taille du titre */
        }

        header p {
            font-size: 1.5em; /* Ajustez cette valeur pour la taille du paragraphe */
        }

        header a.btn {
            font-size: 1.2em; /* Ajustez cette valeur pour la taille du bouton */
        }

        /* Style des liens de navigation */
        .navbar {
            padding: 5px 0;
        }

        .navbar-brand img {
            width: 100px; /* Ajustez la largeur de l'image du logo */
            height: auto;
            margin-right: 10px; /* Marge à droite de l'image du logo */
            margin-left: 10px;
        }

        .navbar-nav {
            margin-top: 70px; /* Met les liens de navigation en bas */
        }

        .navbar-nav .nav-link {
            color: #fff;
            padding: 10px 20px;
            font-size: 1.2em; /* Ajustez cette valeur pour la taille des liens */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff; /* Couleur au survol */
        }

        /* Style de la barre de navigation déroulante */
        .navbar-nav .nav-item.dropdown:hover .nav-link {
            color: #007bff;
        }

        .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Ajoutez d'autres styles personnalisés au besoin */
    </style>
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" alt="Logo">
            Mon Site pour l'entreprise
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Plus
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Autre Option</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- En-tête avec image de fond -->
    <header class="header text-white">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="display-4">Titre de l'en-tête</h1>
            <p class="lead">Description de l'en-tête</p>
            <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
        </div>
    </header>

    <!-- Vos autres sections du site vont ici -->

    <!-- Inclure les scripts des frameworks que vous utilisez -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Votre propre script JavaScript -->
    <script src="script.js"></script>
</body>

</html>
