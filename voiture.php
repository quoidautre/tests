<?php
     class Voiture
     {
          /**
          * Déclaration des attributs
          */

          public $niveau_carburant;
          public $nombre_portes;
          public $nombre_roues;

          /**
          * Cette méthode un peu spéciale est le constructeur, elle est exécutée lorsque vous "créez" votre objet. Elle doit initialiser les attributs de la classe.
          */

          public function __construct()
          {
               $this->niveau_carburant = 50;
               $this->nombre_portes = 3;
               $this->nombre_roues = 4;
          }

          /**
          * Première méthode accessible par tous et modifiant le niveau de carburant
          */

          public function modifierCarburant($niveau)
          {
               $this->niveau_carburant = $niveau;
          }

         public function isReservoirVide() {

                return $this->niveau_carburant == 0;
         }

          /**
          * Seconde méthode accessible à tous et modifiant le nombre de portes
          */

          public function modifierNbPortes($nb_portes)
          {
               $this->nombre_portes = $nb_portes;
          }
     }
?>
