// login.php
<?php
include('includes/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new User($db);
    $user = $userModel->loginUser($username, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
    } else {
        echo "Inloggen mislukt.";
    }
}

include('templates/login-form.php');
include('includes/footer.php');
