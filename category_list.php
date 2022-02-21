<?php

require_once('connexion.php');
$request = $db->query('select * from category');
echo "<pre>";
$categories = $request->fetchAll(PDO::FETCH_ASSOC);

print_r($categories);

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
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach($categories as $category): ?>
            <tr>
                <td><?=$category['id'] ?></td>
                <td><?=$category['name'] ?></td>
                <td>Supprimer</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>