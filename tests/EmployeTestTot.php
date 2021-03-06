<?php
/* Charger impérativement avec 'require_once', ne fonctionne dans certains cas avec 'require' */
require_once "./employes/Employe.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class EmployeTest2 extends TestCase
{
// Teste l'instanciation d'un objet
public function testPersonnageBase() {
    $JackD = new Employe();
    $this->assertNotNull($JackD);
}

// Teste la valeur du champ nom à l'instanciation
public function testPersonnageChampNomDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_Nom);
}

// Teste la valeur du champ prenom à l'instanciation
public function testPersonnageChampPrenomDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_Prenom);
}

// Teste la valeur du champ dateEmbauche à l'instanciation
public function testPersonnageChampDateEmbaucheDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_DateEmbauche);
}

// Teste la valeur du champ poste à l'instanciation
public function testPersonnageChampPosteDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_Poste);
}

// Teste la valeur du champ salaire à l'instanciation
public function testPersonnageChampSalaireDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_SalaireAn);
}

// Teste la valeur du champ service à l'instanciation
public function testPersonnageChampServiceDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_Service);
}

// Teste la valeur du champ agence à l'instanciation
public function testPersonnageChampAgenceDefault() {
$JackD = new Employe();
$this->assertNull($JackD->_Agence);
}

// Teste l'instanciation d'un objet Agence
public function testAgenceBase() {
    $AgenceIDF = new Agence();
    $this->assertNotNull($AgenceIDF);
}

// Teste la valeur du champ nom à l'instanciation de la classe Agence
public function testAgenceNom() {
    $AgenceIDF = new Agence();
    $this->assertNull($AgenceIDF->_Nom);
}


// Teste la valeur du champ adresse à l'instanciation de la classe Agence
public function testPersonnageChampAdresseDefault() {
    $AgenceIDF = new Agence();
    $this->assertNull($AgenceIDF->_Adresse);
}

// Teste la valeur du champ codePostal à l'instanciation de la classe Agence
public function testPersonnageChampCodePostalDefault() {
    $AgenceIDF = new Agence();
    $this->assertNull($AgenceIDF->_CodePostal);
}

// Teste la valeur du champ ville à l'instanciation de la classe Agence
public function testPersonnageChampVilleDefault() {
    $AgenceIDF = new Agence();
    $this->assertNull($AgenceIDF->_Ville);
}

// Teste la valeur du champ agence à l'instanciation de la classe Agence
public function testAgence() {
    $JackD = new Employe();
    $this->assertNull($JackD->_Agence);
}

    //Préparere tests visibilité
    public function isPropertyPublic($instance, $propertyName){
        $reflector = new \ReflectionProperty($instance, $propertyName);
        $reflector_instance = $reflector->isPublic();
        return $reflector_instance;
    }
    
    public $proprietePublic = true;

    // Teste la visibilité du champ nom
    public function testPersonnageChampNom(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_Nom');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ prénom
      public function testPersonnageChampPrenom(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_Prenom');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ DateEmbauche
      public function testPersonnageChampDateEmbauche(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_DateEmbauche');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ Poste
      public function testPersonnageChampPoste(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_Poste');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ SalaireAn
      public function testPersonnageChampSalaireAn(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_SalaireAn');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ Service
      public function testPersonnageChampService(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_Service');
        $this->assertEquals($this->proprietePublic,$public);
    }

      // Teste la visibilité du champ Agence
      public function testPersonnageChampAgence(){
        $JackD = new Employe();
        $public = $this->isPropertyPublic($JackD,'_Agence');
        $this->assertEquals($this->proprietePublic,$public);
    }


















// Teste la fonction Anciennete de la classe Employe
public function testAncienneteEmploye(){
    $JackD = new Employe();
    $anciennete = 20;
    // $dateTemoin = DateTime::createFromFormat("d/m/Y",$this->dateTemoin);
    //$JackD->setDateEmbauche($this->dateTemoin);
    $this->assertEquals($anciennete,$JackD->Anciennete());
    }
    
    
    // Teste la fonction Prime() de la classe Employe
    public function testPrimeEmploye1(){
    $JackD = new Employe();
    $dateTemoin = "12/07/2015";
    $montantPrime = 4500;
    
    //$JackD->setSalaire($this->salaireTemoin);
    //$JackD->setDateEmbauche($dateTemoin);
    $this->assertEquals($montantPrime,$JackD->Prime());
    }
    
    public function testIsChequeVacance3(){
        $JackD = new Employe();
        //$dateTemoin = "01/04/2018";
        //$employeATester->setDateEmbauche($dateTemoin);
        
        $this->assertTrue($JackD->ChequesVacances());
    }
}