<?php

namespace App\Entity\AbstractEntity;

Abstract class AbstractProduct {
    protected int $product_id;
    protected string $product_name;
    protected string $product_type;
    protected int $product_price;
    protected int $product_stock;

    public function __construct()
    {
        $this->product_id = rand(100, 115);

    }

    public function getProduct_id()
    {
        return $this->product_id;
    }


    public function getProduct_stock()
    {
        return $this->product_stock;
    }

 
    public function getProduct_name()
    {
        return $this->product_name;
    }


    public function setProduct_name(string $product_name)
    {
        $this->product_name = $product_name;

        return $this;
    }


    public function getProduct_type()
    {
        return $this->product_type;
    }


    public function setProduct_type(string $product_type)
    {
        $this->product_type = $product_type;

        return $this;
    }


    public function getProduct_price()
    {
        return $this->product_price;
    }


    public function setProduct_price($product_price)
    {
        $this->product_price = $product_price;

        return $this;
    }
}