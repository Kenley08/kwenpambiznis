<?php
    
    class typeboutiqueDao{
      public static function getType(){
        $con2=new connexion2();
        $cont2=$con2->executerequete2("SELECT * from tbltypeboutique");
        $con2->closeconnexion2();
        return $cont2;
      }
  
  
    }

  

    
?>