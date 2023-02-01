<?php
require 'vendor/autoload.php';
use TestCase;
class ClientTest extends PHPUnit_Framework_TestCase {


    public function testIdentify(){
        $Client = new App\Entity\client();
        $Client->Indentify('Laura');
        $this->assertEquals("Bienvenue !", $Client, "Actual value is not equals to expected");
    }


}