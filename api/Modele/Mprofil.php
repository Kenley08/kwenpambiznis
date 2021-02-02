<?php
  class Mprofil{

      public $idprofil;
      public $nom;
      public $prenom;
      public $iduti;
      public $idadr;
      public $secteuract;
      public $dateaj;
      public $dateup;

      public function __construct(){
        $this->idprofil="";
        $this->nom="";
        $this->prenom="";
        $this->iduti="";
        $this->idadr="";
        $this->secteuract="";
        $this->dateaj="";
        $this->dateup="";
      }
  }
?>
