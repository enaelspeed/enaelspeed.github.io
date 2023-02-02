
<?php
include_once('header.php');
?>
<head> 
    <title>Connexion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/page/css/style.css">

   
</head>
<style>
    .contenaire{
    display: flex;
    flex-direction:flex;
    justify-content:center;
    
}
    .envoyer{
    display: block;
    position: relative;
    top: 100px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    border-radius: 50px;
    border: 0px;
    background-color: #7d82e2f4;
    padding: 15px;
}
    </style>
    <?php
include_once('variable.php');
?>
<?php

// Validation du formulaire
$data = $_POST;
if (isset($data['email']) &&  isset($data['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $data['email'] &&
            $user['password'] === $data['password']
        ) {
            $loggedUser = [
                'full_name' => $user['full_name'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s)',
                $_POST['email']

            );
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site de Recettes - Demande de contact reçue</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>
        <div class="container">
    
       <!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->


<?php if(!isset($loggedUser)): ?>

<form action="home.php" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['full_name']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>   
                </div>
            </div>
        </div>
    </body>
</html>
 
