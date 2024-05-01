<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        input{
            margin-bottom:10px
        }
    </style>
</head>
<body>
    <form  method="POST" action="traitement.php">
        <label for="nom">Votre Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre Nom ...">
        <br>
        <label for="prenom">Votre prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prenom ...">
        <br>
        <label for="prenom">Votre pseudo</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prenom ...">
        <br>
        <label for="prenom">Votre Pass</label>
        <input type="pass" id="pass" name="pass" placeholder="Entrer votre mot de passe ...">
        <br>
        <label for="email">Votre Email</label>
        <input type="email" id="pseudo" name="pseudo" placeholder="Entrer votre mot de passe ...">
    <input type="submit" value="inscrire" name="ok"  >
    
    </form>
</body>
</html>
