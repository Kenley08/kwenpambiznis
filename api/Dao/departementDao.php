<?php

class departementDao{
    public static function getInfo(){
        $con2=new connexion2();
        $cont2=$con2->executerequete2("select * from tbldepartement");
        $con2->closeconnexion2();
        return $cont2;
    }
}

?>