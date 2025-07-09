<?php


$varBool = true;
$varInt = 10;
$varFloat = 2.14;
$varString = "Bonjour";


$fonctionArray = [
        [1,2],
        [3,4],
];


$variables = [
    'varBool' => $varBool,
    'varInt' => $varInt,
    'varFloat' => $varFloat,
    'varString' => $varString,

];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <thead>
        <tr>
            <th>Types de variables</th>
            <th>Nom des variables</th>
            <th>Valeurs</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($variables as $name => $value): ?>
        <tr>                    

            <td><?php echo gettype(value: $value); ?></td>
            <td><?php echo $name; ?></td>
            <td><?php if (is_bool( $value)) {
                    echo $value ? 'true':'false';
            }
            else {
                   echo htmlspecialchars((string) $value);
                }?></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>