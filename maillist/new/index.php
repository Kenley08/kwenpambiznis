<?php 
    
    require_once "../../api/Modele/Mconnexion_2.php";
    require_once "../../api/Modele/maillist.php";
    require_once "../../api/Dao/maillistDao.php";

    //creer instance de maillist
    $maillist=new maillistDao();
    //assigner des valeurs aux proprietes
    $maillist->id="12333232533";
    $maillist->mail_list="fleurinekenley@gmail";
    $maillist->id_cat_an=5;

    
    $m=maillistDao::add($maillist);
    if($m>0){
        echo "tt bgy byn pase ";
    }else{
        echo "tt bgy pa byn pase ";
    }

    
     
  

 
  
?>