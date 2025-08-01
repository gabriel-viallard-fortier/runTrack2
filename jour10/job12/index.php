<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$mysqli = mysqli_connect("", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01';");
$fields = $result->fetch_fields();
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <table>
    <thead>
      <tr>
        <?php foreach ($fields as $field):?>
            <th><?=$field->name?></th>
        <?php endforeach?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row):?>
        <tr>
          <?php foreach ($row as $data):?>
            <td><?=$data?></td>
            <?php endforeach;
      endforeach;?>
      </tr>
      </tbody>
</table>

</body>

</html>