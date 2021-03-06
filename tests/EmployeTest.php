<?php
/* Charger impérativement avec 'require_once', ne fonctionne dans certains cas avec 'require' */
require_once "./employes/Employe.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class EmployeTest extends TestCase
{
    public $dateTemoin = "21 March 2012";
    // Teste l'assignation du champ date d'embauche 
    public function testEmployeValeurDateEmbauche() {
        $JackD = new Employe();    
        $dateTemoin = "21 March 2012";
        //$dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
        //$JackD->setDateEmbauche($this->DateEmbauche);
       
        $this->assertEquals($dateTemoin,$JackD->_DateEmbauche);
    }
















    
}