<?php 
    
    require_once "../../../api/Modele/Mconnexion_2.php";
    require_once "../../../api/Modele/maillist.php";
    require_once "../../../api/Dao/maillistDao.php";
    require_once "../../../api/Dao/ProduitsKwenpamDao.php";
    

    ini_set('display_errors', 'Off');
    //creer instance de maillist
    $maillist=new maillistDao();
    $produit=new produitDao();

  
    //rechech pou jwenn email ki abone ak yon kategorie
    foreach(maillistDao::get() as $row){
        // echo $row[0]." ";
        // echo $row[1]."</br>";
        //recheche ki fet pou  pran produit pou chak grenn kategorie produit nou jwenn
        foreach(produitDao::getAbonneesProducts($row[1]) as $ligne){      
            //la nou konte anndan bouk la
            //se la si w ap pran data produit si w ap afiche yo

                // echo $ligne[0]." ";
                // echo $ligne[1]."</br>"; 
                
                 
        }
        //la nou teste eske dezyem boucle la fet pou chak lis kategori produit pou yon email abone
        //depi l fet n ap voye mesaj bay chak grenn email nou jwenn 
        if($ligne ++){
            //nou fe yon test kote ke selon recherche sou produi abone ki add ou 7 denye jou a,nou gade si nak chak iteration ki fet pou 2 boucle yo si nou we gen categorie produit ki nan tab maillist la ak produit a sou 7 denye jou sila pou nou ka send produt a,sinon si pa gen produit pou chak grenn moun sa pou ki gen email pou 7 denye jou yo mesaj la prale kanmen se pou pou sa ke test la fet 
            if($row[1]==$ligne[8]){ 

                  ///////////////////////////////////////////////////////////////////////////////////////////
                // m jis fe boucle sa si w bezwen chak moun yo we list produits ki lye ak kategori yo abone a
                foreach(produitDao::getOneAbonneesProducts($row[1],$row[0]) as $row1){ 
                    echo $row1[1].' Pou '.$row[0].'</br>';
                  }
               


                 //m ap voye mesaj sou chak email  
                  echo ' mesaj la ale bay '.$row[0].'</br>'.'</br>';

                

              
              
            }
           
         }

      
    }

    

        
        
    // }else{
    //     echo "Mwen pa Jwenn li ";
    // }

    
     
  

 
  
?>