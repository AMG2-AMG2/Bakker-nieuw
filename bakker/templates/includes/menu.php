<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uw Bakkerij</title>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>
        <div class="logo">
            <img src="bakery-logo.png" alt="Uw Bakkerij Logo">
        </div>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/overzicht.php">Producten</a></li>
                <li><a href="/about.php">Over Ons</a></li>
                <li><a href="/contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="login">
            <?php
            if (isset($_SESSION['user'])) {
                echo 'Welkom, ' . $_SESSION['user'] . ' | <a href="/logout.php">Uitloggen</a>';
            } else {
                echo '<a href="/login.php">Inloggen</a>';
            }
            ?>
        </div>
    </header>
</body>
</html>
