<?php
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hier zou je code kunnen toevoegen om gebruikersinvoer te valideren en te registreren.

    // Voor deze vereenvoudigde versie wordt registratie gesimuleerd.
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Voer validatie uit (bijv. controleer of de gebruikersnaam uniek is)

    // Simuleer registratie
    $registration_success = true;
}

?>

<h1>Registratie</h1>
<?php if (isset($registration_success)): ?>
    <p>Registratie succesvol. U kunt nu <a href="login.php">inloggen</a>.</p>
<?php else: ?>
    <form method="post">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Registreren</button>
    </form>
<?php endif; ?>

<?php include('includes/footer.php'); ?>
