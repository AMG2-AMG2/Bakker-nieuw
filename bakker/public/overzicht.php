<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productoverzicht</title>
</head>
<body>
    <h1>Producten</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="/product.php?id=<?= $product->getId(); ?>"><?= $product->getNaam(); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
