<?php
  class employe{

      public $idemp;
      public $nomcomplet;
      public $email;
      public $tel;
      public $sexe;
      public $idtpcond;
      public $idgs;
      public $idtpniv;
      public $idville;
      public $adresse;
      public $idpostact;
      public $idpostanc;
      public $salaire;
      public $etat;
      public $dateaj;
      public $dateup;


      public function __construct(){
        $this->idemp="";
        $this->nomcomplet="";
        $this->email="";
        $this->tel="";
        $this->sexe="";
        $this->idtpcond="";
        $this->idgs="";
        $this->idtpniv="";

        $this->idville="";
        $this->adresse="";
        $this->idpostact="";
        $this->idpostanc="";
        $this->salaire="";
        $this->etat="";
        $this->dateaj="";
        $this->dateup="";

      }
  }
?>
