<?php
session_start();
require_once'../../../api/Modele/Mconnexion.php';
require_once'../../../api/Modele/Mtransaction.php';
require_once'../../../api/Dao/transactionDao.php';

$transactionid=time().''.rand(1,1000);
$tran=new transaction();
if($_GET['id_tran']){
  $tran->idtran=$_GET['id_tran'];
  $tran->transactionid=$transactionid;
  if(isset($tran->idtran) && isset($tran->transactionid)){
  transactionDao::UpdateTransactionId($tran);
    echo "Li update";
  }else {
      echo "Li pa update";
  }
}

?>
