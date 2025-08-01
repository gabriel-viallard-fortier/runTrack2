<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$mysqli = mysqli_connect("", "root", "", "jour09");
$result = mysqli_query($mysqli, "SELECT superficie FROM etage");
$fields = $result->fetch_fields();
$rows = $result->fetch_all(MYSQLI_ASSOC);
$superficieTotale = 0;
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
        <th>Superficie totale</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row):
        foreach ($row as $data):
          $superficieTotale = $superficieTotale + $data;
        endforeach;
      endforeach;?>
        <td><?=$superficieTotale?></td>
      </tbody>
</table>

</body>

</html>