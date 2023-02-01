<?php
if (isset($_POST['nom']) and isset($_POST['prenom']) and (!empty($_POST['nom']) or !empty($_POST['prenom']))) {
    $nom = filter_input(INPUT_POST, "nom");
    $prenom = filter_input(INPUT_POST, "prenom");
    $auteur = $nom . " " . $prenom;
} else {
    $auteur = "Nom inconnu";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Saisie</title>
</head>

<body>
    <main>
        <form action="saisie.php" method="POST">
            <label for="nom" id="label_nom">Nom :</label>
            <input type="text" name="nom" id="nom" maxlength="40" />
            <label for="prenom" id="label_prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" />
            <input type="reset" name="reset" value="RESET" id="reset_btn" />
            <input type="submit" name="ok" value="OK" id="submit_btn" />
        </form>
        <p>
            <?php if (isset($auteur)) {
                echo $auteur;
            } ?>
        </p>
    </main>
</body>

</html