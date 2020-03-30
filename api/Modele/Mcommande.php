<?php
  class Mcommande{
      public $idcom;
      public $idann;
      public $idtran;
      public $nomcomplet;
      public $telephone;
      public $email;
      public $ville;
      public $adresse;
      public $idtypecom;
      public $etat;
      public $dateaj;
      public $dateup;

      public function __construct(){
        $this->idcom="";
        $this->idann="";
        $this->idtran="";
        $this->nomcomplet="";
        $this->telephone="";
        $this->email="";
        $this->ville="";
        $this->adresse="";
        $this->idtypecom="";
        $this->etat="";
        $this->dateaj="";
        $this->dateup="";
      }
  }


?>
