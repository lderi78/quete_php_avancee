<?php

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php title</title>
</head>
<body>
    <div class="container bg-light border rounded p-5">
        <h1>Merci <?= $prenom ?> <?= $nom ?> de nous avoir contacté à propos de “<?= $sujet ?>”.</h1>
        <h1>Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone 
            au <?= $telephone ?> dans les plus brefs délais pour traiter votre demande : </h1>
        <br/>
        <?= $message ?>

    </div>

</body>
</html>