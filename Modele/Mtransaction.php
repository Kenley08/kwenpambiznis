<?php
  class transaction{

      public $idtran;
      public $idbourse;
      public $montant;
      public $idetattran;
      public $idtypetran;
      public $idmoyentran;
      public $orderid;
      public $transactionid;
      public $description;
      public $dateajout;
      public $dateupdate;

      public function __construct(){
        $this->idtran="";
        $this->idbourse="";
        $this->montant="";
        $this->idetattran="";
        $this->idtypetran="";
        $this->idmoyentran="";
        $this->orderid="";
        $this->transactionid="";
        $this->description="";
        $this->dateajout="";
        $this->dateupdate="";


      }
  }
?>
