<?php

class CartController {
    private $cart;

    public function __construct() {
        $this->cart = new Cart(); 
    }

    public function addToCart($product, $quantity) {
        $this->cart->addItem($product, $quantity);
    }

    public function removeFromCart($product_id) {
    
    }

    public function getCartContents() {
        return $this->cart->getItems();
    }

    public function getTotalPrice() {
        return $this->cart->getTotalPrice();
    }
}
