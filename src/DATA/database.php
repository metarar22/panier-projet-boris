<?php
namespace App\DATA\database;

use PDO;
use PDOException;

//Crétion de la base de donnée: Vente de Fruit et légumes 
//La DB panierEco a été créer à partir de MYSQL


//Création des tables product, client 
$Query1 = 'CREATE TABLE IF NOT EXISTS product(
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        product_name varchar(30) NOT NULL,
        product_type text NOT NULL,
        product_price INT NOT NULL,
        product_stock INT NOT NULL
        )';

$Query2 = 'CREATE TABLE IF NOT EXISTS client(
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    client_name Text NOT NULL
    )';

$Query3 = 'CREATE TABLE IF NOT EXISTS PanierClient(
    client_id INT(6) NOT NULL, 
    FOREIGN KEY (client_id) REFERENCES client (client_id),
    num_order INT AUTO_INCREMENT PRIMARY KEY,
    product_name varchar(30) NOT NULL,
    product_price INT NOT NULL
    )';

//$Query4 = 'INSERT INTO product(product_name, product_type, product_price, product_stock) VALUES(:product_name, :product_type, :product_price, :product_stock)';

//Insertion des valeurs dans notre base de données 
$dataProduct1 = [
    [
        'product_name' => 'Apple',
        'product_type' => 'Fruit',
        'product_price' => 5,
        'product_stock' => 200
    ],
    [
        'product_name' => 'Orange',
        'product_type' => 'Fruit',
        'product_price' => 9,
        'product_stock' => 250        
    ],
    [
    'product_name' => 'Pineapple',
    'product_type' => 'Fruit',
    'product_price' => 7,
    'product_stock' => 190   
    ],
    [
    'product_name' => 'Kiwi',
    'product_type' => 'Fruit',
    'product_price' => 10,
    'product_stock' => 30   
    ],    
];


$dataProduct2 = [
    [
        'product_name' => 'Tomate',
        'product_type' => 'Legume',
        'product_price' => 3,
        'product_stock' => 300
    ],
    [
        'product_name' => 'Patate',
        'product_type' => 'Legume',
        'product_price' => 5,
        'product_stock' => 150        
    ],
    [
    'product_name' => 'Poivron',
    'product_type' => 'Legume',
    'product_price' => 4,
    'product_stock' => 190   
    ],
    [
    'product_name' => 'Piment',
    'product_type' => 'Legume',
    'product_price' => 10,
    'product_stock' => 30   
    ],    
];


//Connection à la DB

try{
$connection = new PDO('mysql:host=localhost;dbname=panierEco', 'metarar22', 'root');
}
catch (PDOException $erreur){
    die('Erreur: ' . $erreur->getMessage());
}


//Preparation et execution pour insertion des tables client et products
$statement1 = $connection->prepare($Query1);
$statement1->execute();

$statement2 = $connection->prepare($Query2);
$statement2->execute();

$statement3 = $connection->prepare($Query3);
$statement3->execute();

/*Insertion des valeurs pour les fruits
$statement3 = $connection->prepare($Query4);

foreach($dataProduct1 as $data) {
    $statement3->execute($data);
}
*/

/*Insertion des valeurs pour les légumes
$statement4 = $connection->prepare($Query4);

foreach($dataProduct2 as $data) {
    $statement4->execute($data);
}
*/


?>

