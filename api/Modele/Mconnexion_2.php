<?php
  class connexion2{
      private $username2;
      private $password2;
      private $server2;
      private $db2;
      private $connexion2;

      public function __construct (){

        $this->connexion2=new mysqli("localhost","root","","db_a38e91_kwen");
      }

     public function executerequete2($sql2){
       $contenu2=$this->connexion2->query($sql2);
       return $contenu2->fetch_all();
     }

     public function executeactualisation2($sql2){
      $this->connexion2->query($sql2);
     }

      public function closeconnexion2(){
        $this->connexion2->close();
      }




  }

?>
