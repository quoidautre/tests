<?php
     class Voiture
     {
          /**
          * Déclaration des attributs
          */

          private $niveau_carburant;
          private $nombre_portes;
          private $nombre_roues;

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

          public function modifier_carburant(int $niveau)
          {
               $this->niveau_carburant = $niveau;
          }

          /**
          * Seconde méthode accessible à tous et modifiant le nombre de portes
          */

          public function modifier_nb_portes(int $nb_portes)
          {
               $this->nombre_portes = $nb_portes;
          }
     }
?>
