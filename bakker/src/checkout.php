// checkout.php
<?php
include('includes/header.php');

$cart = new Cart();
$products = [];

if (isset($_SESSION['cart'])) {
    $cart = unserialize($_SESSION['cart']);
    $products = $cart->getItems();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: order-confirmation.php');
}

include('templates/checkout-form.php');
include('includes/footer.php');
