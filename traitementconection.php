<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "application_boite_a_idee_collaborative";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

if (isset($_POST['inscrire'])) {
    $nom = $connexion->real_escape_string($_POST['nom']);
    $prenom = $connexion->real_escape_string($_POST['prenom']);
    $adresse = $connexion->real_escape_string($_POST['adresse']);
    $tel = $connexion->real_escape_string($_POST['tel']);
    $email = $connexion->real_escape_string($_POST['email']);
    $mot_de_passe = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);

    $requeteUtilisateur = "INSERT INTO utilisateur (Nom_utilisateur, Prenom_utilisateur, MotdePasse_utilisateur)
                          VALUES (?, ?, ?)";

    $stmt = $connexion->prepare($requeteUtilisateur);
    $stmt->bind_param("sss", $nom, $prenom, $mot_de_passe);

    if ($stmt->execute()) {
        echo "Inscription utilisateur réussie.";
    } else {
        echo "Erreur lors de l'inscription dans la table 'utilisateur' : " . $stmt->error;
    }
$stmt->close();
}

$connexion->close();
?>
