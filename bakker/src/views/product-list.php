<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Producten</title>
</head>
<body>
    <h1>Onze Producten</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <h2><?= $product->getNaam(); ?></h2>
                <p><?= $product->getIntro(); ?></p>
                <img src="images/<?= $product->getAfbeelding(); ?>" alt="<?= $product->getNaam(); ?>">
                <a href="product.php?id=<?= $product->getId(); ?>">Details</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
