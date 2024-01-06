<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web - Formation Informatique</title>
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

        header,
        footer {
            background: url('ente.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 150px 0; /* Ajustez cette valeur pour augmenter la taille de l'en-tête et du pied de page */
        }

        header h1,
        footer h1 {
            font-size: 3em; /* Ajustez cette valeur pour la taille du titre */
        }

        header p,
        footer p {
            font-size: 1.5em; /* Ajustez cette valeur pour la taille du paragraphe */
        }

        header a.btn,
        footer a.btn {
            font-size: 1.2em; /* Ajustez cette valeur pour la taille du bouton */
        }

        /* Style des liens de navigation */
        .navbar {
            padding: 20px 0;
        }

        .navbar-brand img {
            width: 30px; /* Ajustez la largeur de l'image du logo */
            height: auto;
            margin-right: 10px; /* Marge à droite de l'image du logo */
        }

        .navbar-nav {
            margin-top: auto; /* Met les liens de navigation en bas */
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

        /* Style du pied de page */
        footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            margin-right: 20px;
        }

        .footer-section h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-social {
            flex: 1;
            text-align: right;
        }

        .footer-social i {
            font-size: 2em;
            margin-left: 15px;
        }

        /* Ajoutez d'autres styles personnalisés au besoin */
    </style>
</head>

<body>

    <!-- Pied de page -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h2>À propos de nous</h2>
                    <p>Informations sur notre entreprise de formation en informatique.</p>
                </div>
                <div class="footer-section">
                    <h2>Liens rapides</h2>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h2>Contactez-nous</h2>
                    <p>Adresse, numéro de téléphone, e-mail, etc.</p>
                </div>
                <div class="footer-social">
                    <h2>Suivez-nous</h2>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Inclure les scripts des frameworks que vous utilisez -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Votre propre script JavaScript -->
    <script src="script.js"></script>
</body>

</html>
