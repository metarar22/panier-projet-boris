<?php

require_once __DIR__ . '/vendor/autoload.php';




$Client = new App\Entity\client();
//$Client->Indentify('Laura');


$Product_manager = new App\Entity\ProductManager();
//$Product_manager->setUser_name('Paul'); 


//Utilisaton des commandes
// A ) PRODUCT MANAGER
//Le product manager ajoute un produit à la DB
//$Product_manager->addProductDB('Patate', 'Legume', '6', 200);

//Le product manager retire un produit de la DB
//$Product_manager->remProductDB(10);




//B ) Gestion du Panier client
//ajouter un produit dans panier
$addProduct = new App\Controller\cartController();
//$addProduct->addProductCart(2);


//afficher le panier du client
$panier = new App\Controller\cartController();
//$panier->listProductCart();


//afficher le total du panier du client
$checkout = new App\Controller\cartController();
$checkout->Chekout();


//vider le panier du client
$ViderPanier = new App\Controller\cartController();
//$ViderPanier->emptyYourCart();


//retirer un produit du panier
$remProduct = new App\Controller\cartController();
//$remProduct->remProductCart("Pineapple");

