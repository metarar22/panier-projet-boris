<?php


use App\Entity\ProductManager;
require 'vendor/autoload.php';

class ProductManagerTest extends PHPUnit_Framework_TestCase {


    public function testAddProductDB(){
        $PM = new ProductManager();
        $PM->addProductDB('Patate', 'Legume', '6', 200);
        $this->assertEquals("Produit ajouté à la DB", $PM, "Actual value is not equals to expected");
    }


    public function testremProductDB(){
        $PM = new ProductManager();
        $PM->remProductDB(2);
        $this->assertEquals("Produit a été delete de la DB", $PM, "Actual value is not equals to expected");
    }

}