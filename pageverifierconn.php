<?php
session_start();

// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "votre_utilisateur";
$motDePasse = "votre_mot_de_passe";
$nomDeLaBase = "votre_base_de_donnees";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomDeLaBase);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Fonction pour vérifier l'authentification de l'utilisateur
function verifierAuthentification($nomUtilisateur, $motDePasse) {
    global $connexion;

    // Échapper les données pour éviter les injections SQL
    $nomUtilisateur = $connexion->real_escape_string($nomUtilisateur);
    $motDePasse = $connexion->real_escape_string($motDePasse);

    // Requête pour vérifier l'existence de l'utilisateur
    $requete = "SELECT * FROM utilisateurs WHERE nom_utilisateur='$nomUtilisateur' AND mot_de_passe='$motDePasse'";
    $resultat = $connexion->query($requete);

    // Vérifier s'il y a des résultats
    if ($resultat->num_rows > 0) {
        return true; // L'utilisateur est authentifié
    } else {
        return false; // L'authentification a échoué
    }
}

// Vérifier si l'utilisateur est en train de se déconnecter
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    // Déconnexion de l'utilisateur
    session_unset();
    session_destroy();
    header("Location: page_accueil.php"); // Rediriger vers la page d'accueil
    exit();
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomUtilisateur = $_POST["nom_utilisateur"];
    $motDePasse = $_POST["mot_de_passe"];

    // Vérifier l'authentification
    if (verifierAuthentification($nomUtilisateur, $motDePasse)) {
        // Authentification réussie
        $_SESSION['utilisateur_connecte'] = true;

        // Redirection vers la page précédente ou la page d'accueil
        if (isset($_SESSION['page_precedente'])) {
            header("Location: " . $_SESSION['page_precedente']);
        } else {
            header("Location: page_accueil.php");
        }

        exit();
    } else {
        // Authentification échouée
        echo "L'authentification a échoué. Veuillez vérifier vos informations.";
    }
}

// Stocker l'URL de la page précédente dans la variable de session
if (isset($_SERVER['HTTP_REFERER'])) {
    $_SESSION['page_precedente'] = $_SERVER['HTTP_REFERER'];
}

// Fermer la connexion à la base de données
$connexion->close();
?>
