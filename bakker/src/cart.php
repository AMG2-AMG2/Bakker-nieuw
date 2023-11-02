// cart.php
<?php
class Cart {
    private $items = [];

    public function addItem($product, $quantity) {
        $this->items[$product['id']] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getItems() {
        return $this->items;
    }

    public function getTotalPrice() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']['price'] * $item['quantity'];
        }
        return $total;
    }
}
