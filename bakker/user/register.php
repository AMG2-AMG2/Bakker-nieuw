// register.php
<?php
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $userModel = new User($db);
    $userModel->registerUser($username, $password);
    echo "Registratie succesvol.";
}

include('templates/register-form.php');
include('includes/footer.php');
