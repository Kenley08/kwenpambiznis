<?php
     require_once"../../api/Modele/Mhistoricite.php";
     require_once"../../api/Modele/Mconnexion.php";
     require_once"../../api/Dao/historiciteDao.php";

     $historicite=new historiciteDao();
     $alea=time()."".rand(1,100);
     $historicite->idhis=$alea;
     $historicite->iduti="5345";
     $historicite->tabutilise="commande";
     $historicite->action="commande sur produit";
     historiciteDao::ajouterhistoricite($historicite);
?>
