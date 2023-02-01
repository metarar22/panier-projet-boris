<?php

use TestCase;


class CartControllerTest extends TestCase {


    public function testaddProduct(){
        $Pr = new App\Controller\cartController();
        $Pr->addProductCart(2);
        $this->assertEquals("Product added to cart", $Pr, "Actual value is not equals to expected");
        
    }

    public function testlistProduct(){
        $Pr = new App\Controller\cartController();
        $Pr->listProductCart();
        $this->assertEquals("Voici le recap de votre panier", $Pr, "Actual value is not equals to expected");
        
    }

    public function testremProduct(){
        $Pr = new App\Controller\cartController();
        $Pr->remProductCart("Pineapple");
        $this->assertEquals("Product removed from cart", $Pr, "Actual value is not equals to expected");
        
    }

    public function testEmptyCart(){
        $Pr = new App\Controller\cartController();
        $Pr->emptyYourCart();
        $this->assertEquals("Your Cart is now empty", $Pr, "Actual value is not equals to expected");
        
    }
}