<!DOCTYPE html>
<html lang="fr">
    <head>
           <meta charset="utf-8">
	       <title>LES FORMULAIRES</title>
          <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 1px;
}
h3, h4 {
    color: #0e0e0e;
    text-align: center;
}

fieldset {
    width: 30%;
    margin: 3px auto;
    padding: 2px;
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
}

table {
    width: 100%;
}

td {
    padding: 2px;
}
input[type="text"],
input[type="tel"],
input[type="email"],
input[type="password"] {
    width: 80%;
    padding: 3px;
    margin: 2px 0;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #428bca;
    color: #0b0b0b;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3071a9;
}
</style>
	</head>

    <body>
         <h3>BIENVENUE A VOTRE BOITE A IDEE .</h3>
            <fieldset>
                <form action="traitementconection.php" method="post">

                    <h4>Formulaire d'inscription</h4>
                    <hr>
                    <table>
                        <tr>
                            <td>Nom: </td><td><input type="text" name="nom" value=""><br><br></td>
                        </tr>
                        <tr>
                            <td>Prénom: </td><td><input type="text" name="prenom" value=""><br><br></td>
                        </tr>
                        <tr>
                            <td>Adresse: </td><td><input type="text" name="adresse" value=""><br><br></td> 
                        </tr>
                        <tr>
                            <td>N° téléphone : </td><td><input type="tel" name="tel" value=""><br><br></td> 
                        </tr>
                        <tr>
                            <td>Email</td><td><input type="email" name="email" value=""><br><br></td> 
                        </tr>
                        <tr>
                            <td>Mot de passe </td><td><input type="password" name="pwd1" value=""><br><br></td> 
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" id="submit" name="inscrire" value="S'inscrire"></td> 
                        </tr>
                    </table>
                </form>
            </fieldset>
    </body>
</html>
        