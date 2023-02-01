<?php

namespace App\Entity;

use PDO;
use PDOException;
use App\Entity\AbstractEntity\AbstractUser;
use App\Entity\Interface\productManagerInterface;
//use App\DATA\Connection;

final class ProductManager extends AbstractUser implements productManagerInterface {
    private $connection;
    
    
    public function __construct()
    {
        $this->user_role = ['Product_Manager'];
        //$this->connection = Connection::getConnection();
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=panierEco', 'metarar22', 'root');
            }
            catch (PDOException $erreur){
                die('Erreur: ' . $erreur->getMessage());
            }
            
        parent::__construct();
    }



    //INTERFACE DEF
    public function addProductDB(string $product_name, string $product_type, int $product_price, int $product_stock){ 
        $Query = 'INSERT INTO product(product_name, product_type, product_price, product_stock) VALUES(:product_name, :product_type, :product_price, :product_stock)';
        $statement = $this->connection->prepare($Query);
        $statement->execute([
            'product_name' => $product_name,
            'product_type' => $product_type,
            'product_price' => $product_price,
            'product_stock' => $product_stock
        ]);
        return "Produit ajouté à la DB" . PHP_EOL;
    }

    public function remProductDB($product_id) {
        $Query = 'DELETE FROM product WHERE product_id = :product_id';
        $statement = $this->connection->prepare($Query);
        $statement->execute([
            'product_id' => $product_id
        ]);
        return "Produit a été delete de la DB" . PHP_EOL;
    }
}

