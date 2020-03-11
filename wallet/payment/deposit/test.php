<?php
//mwen kapte idbouse la nan tab trazaksyon a pase se ave l mwen gade si uti a gen yon trazaksyon an kou deja
  $_SESSION['id_bourse']=$_GET['id_bous'];
  $idb=$_SESSION['id_bourse'];
  $row1=transactionDao::getlastrow($idb);
      //mwen teste si uti a gen yon tranzaksyon an kou deja ki poko btnvalide
      if($row1[3]==2){
        //Action pour effectuer la transaction

  }else{
    //mesaj pou afiche si etat denye tranzaksyon uti a valide deja
      $mesaj="ou gen yon tranzaksyon ki an kou deja,fe yon ti tann pou nou ka valide l pou ou.";
  }




?>
