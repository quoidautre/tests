<?php
/**
 * Created by PhpStorm.
 * User: fabrice
 * Date: 06/11/14
 * Time: 11:30
 */

class VoitureTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once "voiture.php";
    }

    public function  testReservoirVide() {
        $myVoiture = new Voiture();
        $myVoiture->niveau_carburant = 0;

        $reservoir      = $myVoiture->isReservoirVide();

        $this->assertTrue($reservoir);
    }



    public function testModifierCarburant() {
        $myVoiture = new Voiture();
        $myVoiture->niveau_carburant = 0;

        $myVoiture->modifierNbPortes(0);

        $this->assertGreaterThan(0,$myVoiture->nombre_portes);
    }
}
 