<?php 
    
    require_once "../../api/Modele/Mconnexion_2.php";
    require_once "../../api/Modele/maillist.php";
    require_once "../../api/Dao/maillistDao.php";
    ini_set('display_errors', 'Off');
    //creer instance de maillist
    $maillist=new maillistDao();
    //assigner des valeurs aux proprietes
    $maillist->mail_list="fleurinekenley@gmail.com";
    $u=maillistDao::update($maillist);
    if(isset($maillist->mail_list)){
        echo "tt bgy byn pase ";
    }else{
        echo "tt bgy pa byn pase ";
    }

    
 
  
?>