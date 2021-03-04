<?php 
    
    require_once "../../../../api/Modele/Mconnexion_2.php";
    require_once "../../../../api/Modele/maillist.php";
    require_once "../../../../api/Dao/maillistDao.php";
    require_once "../../../../api/Dao/ProduitsKwenpamDao.php";
    

    // ini_set('display_errors', 'Off');
    //creer instance de maillist
    $maillist=new maillistDao();
    $produit=new produitDao();
    $mail='fleurinekenley@gmail.com';
  
    //rechech pou jwenn email ki abone ak yon kategorie
    $row=maillistDao::getByEmail($mail);
    if($row)
    {
                foreach(produitDao::getOneAbonneesProducts($row[1],$row[0]) as $row1){ 
                    echo $row1[1].' Pou '.$row[0].'</br>';
            }
    }
   
            
          
     



 
  
?>