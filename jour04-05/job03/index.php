<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand New Fan Site</title>
    <link href="brandnew.css" rel="stylesheet">
</head>
<body>


            <div class="box">
                <form action="index.php" method="post">
                    <fieldset>
                        <legend>Civilité</legend>
                            <select name="civilite" size="1">
                                <option>Mr.</option>
                                <option>Mme</option>
                                <option>Mx.</option>
                            </select>
                            <input name="prenom" type="text" placeholder="Prénom">
                            <input name="nom" type="text" placeholder="Nom">
                    </fieldset>
                    <fieldset>
                        <legend>Coordonnées</legend>
                        <input name="email" type="email" placeholder="Email">
                        <input name="tel" type="tel" placeholder="Telephone">
                    </fieldset>
                    <fieldset>
                        <legend>Addresse</legend>
                        <input name="pays" type="text" placeholder="Pays">
                        <input name="code-postal" type="number" placeholder="Code postal">
                        <input name="addresse" type="text" placeholder="Addresse">
                        <input name="numero-rue" type="number" placeholder="numéro de rue">
                    </fieldset>
                    <fieldset>
                        <legend>Message</legend>
                        <select name="objet">
                            <option>Demande de réservation</option>
                        </select>
                        <input name="date" type="date">
                        <textarea name="message" placeholder="Message"></textarea>
                    </fieldset>
                    <button type="submit">Ok</button>
                </form>
            </div>



<?php


$nombreArguments = 0;
// on déclare les elements a compter
$infos = ['civilite', 'prenom', 'nom', 'email', 'tel', 'pays', 'code-postal', 'addresse', 'numero-rue', 'objet', 'date', 'message'];

//on lance le test
foreach ($infos as $info)  {
    if (isset($_POST[$info])) {
        $nombreArguments ++;
    }
}

echo "Le nombre d'arguments POST envoyé est: " . $nombreArguments;


?>
</body>

</html>