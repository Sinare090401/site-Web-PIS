<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylle.css">
    <!-- Ajouter la bibliothèque Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Page d'Accueil</title>
</head>
<body>
    <div class="container">
        <header>
            <button class="connexion">Connexion</button>
        </header>
        <main>
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="web1.jpg" alt="Image 1"></div>
                <div class="item"><img src="web2.jpeg" alt="Image 2"></div>
                <div class="item"><img src="web3.jpg" alt="Image 3"></div>
            </div>
        </main>
    </div>

    <!-- Ajouter la bibliothèque Owl Carousel et jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Script pour initialiser le carrousel -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
            });
        });
    </script>
</body>
</html>
