<?php
  class Mlivreur{
      public $idlivreur;
      public $nonkonpayi;
      public $logo;
      public $tel1;
      public $tel2;
      public $email;
      public $idville;
      public $pin;
      public $adrescomp;
      public $desc;
      public $etat;
      public $dateaj;
      public $dateup;

      public function __construct(){
        $this->idlivreur="";
        $this->nonkonpayi="";
        $this->logo="";
        $this->tel1="";
        $this->tel2="";
        $this->email="";
        $this->idville="";
        $this->pin="";
        $this->adrescomp="";
        $this->desc="";
        $this->etat="";  
        $this->dateaj="";
        $this->dateup="";
      }
  }
?>
