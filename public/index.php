<?php

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||!isset($_POST['email']) || trim($_POST['email']) === '') 
            $errors[] = "Le mail est obligatoire";
        if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
            $errors[] = "Le numéro de téléphone est obligatoire";
        if(!isset($_POST['subject']) || trim($_POST['subject']) === '') 
            $errors[] = "Le sujet est obligatoir est obligatoire";
        if(!isset($_POST['message']) || trim($_POST['message']) === '') 
            $errors[] = "Le message est obligatoire";

        if(empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: succes.php');
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) : ?>
                <div class="border border-danger rounded p-3 m-5 bg-danger">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>

<form class="border rounded p-3 m-5 bg-light"  method="post">
    <div>
      <label  for="firstname" class="form-label">Prenom :</label>
      <input  type="text"  id="firstname"  name="firstname" class="form-control" required>
    </div>
    <div>
      <label  for="lastname" class="form-label">Nom :</label>
      <input  type="text"  id="lastname"  name="lastname" class="form-control" required>
    </div>
    <div>
      <label  for="email" class="form-label">Courriel :</label>
        <input  type="email"  id="email"  name="email" class="form-control" required>
    </div>
    <div>
      <label  for="phone" class="form-label">Phone :</label>
        <input  type="text"  id="phone"  name="phone" class="form-control" required>
    </div>
    <div>
      <label  for="subject" class="form-label">Subject :</label>
        <select  id="subject"  name="subject" class="form-control" required>
          <option value="test1">test 1</option>
          <option value="test2">test 2</option>
          <option value="test3">test 3</option>
        </select>
    </div>
    <div>
      <label  for="message" class="form-label">Message :</label>
      <textarea  id="message"  name="message" class="form-control" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>