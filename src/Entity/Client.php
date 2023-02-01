<?php

namespace App\Entity;

use PDO;
use PDOException;
use App\Entity\Interface\ClientInterface;
use App\Entity\AbstractEntity\AbstractUser;

class client extends AbstractUser implements ClientInterface{
    private $connection;

    public function __construct()
    {
        $this->user_role = ['Client'];
        parent::__construct();

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=panierEco', 'metarar22', 'root');
            }
            catch (PDOException $erreur){
                die('Erreur: ' . $erreur->getMessage());
            }
    }

    public function Indentify(string $client_name){
        $Query = 'INSERT INTO client(client_name) VALUES(:client_name)';
        $statement = $this->connection->prepare($Query);
        $statement->execute([
            'client_name' => $client_name,

        ]);
        return "Bienvenue !" . PHP_EOL;
    
    }
}

