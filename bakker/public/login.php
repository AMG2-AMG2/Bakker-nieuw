<?php
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hier zou je code kunnen toevoegen om gebruikersinvoer te valideren en in te loggen.

    // Voor deze vereenvoudigde versie wordt inloggen gesimuleerd.
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'gebruiker' && $password === 'wachtwoord') {
        // Inloggen is geslaagd, sla de gebruikerssessie op
        $_SESSION['user_id'] = 1;
        header('Location: index.php');
    } else {
        $login_error = "Inloggen mislukt. Controleer je gebruikersnaam en wachtwoord.";
    }
}

?>

<h1>Inloggen</h1>
<?php if (isset($login_error)): ?>
    <p class="error"><?= $login_error; ?></p>
<?php endif; ?>

<form method="post">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Inloggen</button>
</form>

<?php include('includes/footer.php'); ?>
