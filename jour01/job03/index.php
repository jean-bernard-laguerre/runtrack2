<?php
    $prim1 = True;
    $prim2 = "Chaine";
    $prim3 = 12.4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($prim1); ?></td>
                <td><?php echo '$prim1'; ?></td>
                <td><?php echo $prim1; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($prim2); ?></td>
                <td><?php echo '$prim2'; ?></td>
                <td><?php echo $prim2; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($prim3); ?></td>
                <td><?php echo '$prim3'; ?></td>
                <td><?php echo $prim3; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
