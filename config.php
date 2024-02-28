<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root"; // Remplacez par votre nom d'utilisateur MySQL
$mot_de_passe = ""; // Remplacez par votre mot de passe MySQL
$base_de_donnees = "application_boite_a_idee_collaborative";

// Création de la connexion
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

echo "Connexion réussie à la base de données.";

// Fermer la connexion à la fin de l'utilisation
$connexion->close();
?>
