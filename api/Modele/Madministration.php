<?php
  class Madministration{
      public $idadmin;
      public $iduti;
      public $pin;
      public $etat;
      public $dateaj;
      public $dateup;

      public function __construct(){
        $this->idadmin="";
        $this->iduti="";
        $this->pin="";
        $this->etat="";
        $this->dateaj="";
        $this->dateup="";
      }
  }
?>
