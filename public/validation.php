<?php
var_dump($_POST);
$nom = $_POST['firstname'];
$lastName = $_POST['lastname'];
$courriel = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-light border rounded p-5">
        <h1>Merci <span class="fw-bold"><?= $nom . " " . $lastName ?></span> de nous avoir contacté à propos de “<span class="fw-bold"><?= $subject ?></span>”.
</h1>
        <div>Un de nos conseillers vous contactera soit à l’adresse <span class="fw-bold"><?= $courriel ?></span> ou par téléphone au <span class="fw-bold"><?= $phone ?></span> dans les plus brefs délais pour traiter votre demande : </div>

        <h2 class="text-center mt-5"><? $message ?></h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>