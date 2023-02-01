<?php

namespace App\Controller;


use PDO;
use PDOException;




class cartController {
    private $connection;

    public function __construct()
    {

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=panierEco', 'metarar22', 'root');
            }
            catch (PDOException $erreur){
                die('Erreur: ' . $erreur->getMessage());
            }
            

    }




    protected $products = [];
//Ajouter un produit au panier

public function addProductCart(int $selected_id){
    $Query = "INSERT INTO PanierClient (product_name, product_price)
    SELECT product_name, product_price FROM product WHERE product_id = $selected_id ";
    $statement = $this->connection->prepare($Query);
    $statement->execute();
    return "Product added to cart" . PHP_EOL;
}

//supprimer produit du panier
public function remProductCart(string $product_name){
    $Query = "DELETE FROM PanierClient WHERE product_name = '$product_name'";
    $statement = $this->connection->prepare($Query);
    $statement->execute();
    return "Product removed from cart" . PHP_EOL;
}

public function emptyYourCart(){
    $Query = "DELETE FROM PanierClient";
    $statement = $this->connection->prepare($Query);
    $statement->execute();
    return "Your Cart is now empty" . PHP_EOL;
}

//Afficher Panier
public function listProductCart(){
    $Query = "SELECT * FROM PanierClient";
    $statement = $this->connection->prepare($Query);
    $statement->execute();
    $result = $statement->fetchAll();
    print_r($result);
    return "Voici le recap de votre panier" . PHP_EOL;
}

//Checkout
public function Chekout(){
    $Query = "SELECT SUM(product_price) FROM PanierClient";
    $statement = $this->connection->prepare($Query);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    return "Régler votre total... MERCI ! " . PHP_EOL;
    $this->emptyYourCart();
}

}