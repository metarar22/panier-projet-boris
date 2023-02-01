<?php

namespace App\Entity\Interface;

interface productManagerInterface {
    public function addProductDB(string $product_name, string $product_type, int $product_price, int $product_stock);
    public function remProductDB($product_id);
}