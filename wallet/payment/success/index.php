<?php
session_start();
require_once'../../../api/Modele/Mconnexion.php';
require_once'../../../api/Modele/Mtransaction.php';
require_once'../../../api/Dao/transactionDao.php';

//nap teste si transaction ID moncash voye a bon
if(isset($_GET['transactionId'])){
  $transactionid=$_GET['transactionId'];
  $tran=new transaction();
  if(isset($_SESSION['id_transaction'])){
    $tran->idtran=$_SESSION['id_transaction'];
    $tran->transactionid=$transactionid;
    if(isset($tran->idtran) && isset($tran->transactionid)){
    transactionDao::UpdateTransactionId($tran);
      //nap teste si gen yon komand dejan
      if(isset($_SESSION['id_commande_client'])){
          //nap voye
      } 
      //nap delete tout id tranzaksyon ak komand yo
      $_SESSION['id_commande_client']=NULL;
      $_SESSION['id_transaction']=NULL;
      $_SESSION['id_an_pay']=NULL;
    }else {
        $mesaj="Nou pa arive anrejistre enf&ograve;masyon yo pou ou.";
    }
  }else{
    $mesaj="Pa gen okenn tranzaksyon ki te k&ograve;manse deja.";
  }
}else{
  $mesaj="Nou pa arive rekipere tranzaksyon an";
} 
echo "Mesi tout bagay byen pase avek sikse, nap voye yon imel oubyen yon sms pou ou otomatikman vande a konfime li resevwa demand ou .";
?>
