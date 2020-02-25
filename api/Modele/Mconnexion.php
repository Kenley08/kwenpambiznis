<?php
  class connexion{
      private $username;
      private $password;
      private $server;
      private $db;
      private $connexion;

      public function __construct (){

        $this->connexion=new mysqli("localhost","root","","db_kwenpam_biznis");
      }

     public function executerequete($sql){
       $contenu=$this->connexion->query($sql);
       return $contenu->fetch_all();
     }

     public function executeactualisation($sql){
       $this->connexion->query($sql);
     }

      public function closeconnexion(){
        $this->connexion->close();
      }




  }

?>
