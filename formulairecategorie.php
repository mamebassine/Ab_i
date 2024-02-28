<?php   

$idUtilisateur = $connexion->insert_id;

    $requeteCategorie = "INSERT INTO categorie (NomCategorie, Description_categorie, Couleur_categorie)
                         VALUES (?,?,?)";

    if ($connexion->query($requeteCategorie) === TRUE) {
        echo "Catégorie créée avec succès.";
    } else {
        echo "Erreur lors de la création de la catégorie : " . $connexion->error;
    }
   
   
   
    $idCategorie = $connexion->insert_id;

    $requeteBoiteIdee = "INSERT INTO boite_a_idee (Titre_idee, Commentaires_idee, Categorie_idee, DateSoumission_idee, Etat_idee, ID_utilisateur, ID_categorie)
                        VALUES (?, ?, ?, NOW(), ?, ?, ?)";

    $stmt = $connexion->prepare($requeteBoiteIdee);
    $stmt->bind_param("sii", $idCategorie, $idUtilisateur, $idCategorie);

    if ($stmt->execute()) {
        echo "Idée soumise avec succès.";
    } else {
        echo "Erreur lors de la soumission de l'idée : " . $stmt->error;
    }$stmt->close();


$connexion->close();
?>