<?php
class Mlivraison{
    public $idliv;
    public $idann;
    public $idlivreur;
    public $etat;
    public $desc;
    public $nbacc;
    public $dateaj;
    public $dateup;

    public function __construct(){
      $this->idliv="";
      $this->idann="";
      $this->idlivreur="";
      $this->etat="";
      $this->desc="";
      $this->nbacc="";
      $this->dateaj="";
      $this->dateup="";
    }
}

?>
