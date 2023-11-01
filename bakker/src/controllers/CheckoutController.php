<?php

class CheckoutController {
    private $cartController;

    public function __construct($cartController) {
        $this->cartController = $cartController;
    }

    public function processCheckout($userData) {

        $this->cartController->clearCart();

        header('Location: order-confirmation.php');
    }
}
