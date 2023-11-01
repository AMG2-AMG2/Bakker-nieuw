<?php
// ProductController.php

class ProductController {
    private $productModel;

    public function __construct($productModel) {
        $this->productModel = $productModel;
    }

    public function getProductDetails($productId) {
        $product = $this->productModel->getProductById($productId);

        include('product.php');
    }
}
