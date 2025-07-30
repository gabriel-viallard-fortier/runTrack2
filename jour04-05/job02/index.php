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
                <form action="index.php" method="get">
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
                        <input name="telephon
                        " type="tel" placeholder="Telephone">
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
            <div class="box">
                <table>
                    <thead>
                    <tr>
                        <th>argument</th>
                        <th>valeur</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($_GET as $info => $valeur) {
                                if (isset($_GET[$info]) && $_GET[$info] !== "") {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($info) . "</td>";
                                    echo "<td>" . htmlspecialchars($valeur) . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </body>

</html>