<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$mysqli = mysqli_connect("", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT nom, capacite FROM salles;");
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
        <th><?= htmlspecialchars($field->name)?></th>
          <?php endforeach;?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row):?>
        <tr>
          <?php foreach ($row as $data):?>
          <td><?=$data?></td>
          <?php endforeach;?>
        </tr>
        <?php endforeach;?>
      </tbody>
</table>

</body>

</html>