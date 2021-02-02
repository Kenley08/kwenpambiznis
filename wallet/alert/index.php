<?php
    session_start();
    //nap verifye si gen yon GET transactionId ki egziste
    if(isset($_GET['transactionId'])){
        $id=$_GET['transactionId'];
        echo $id.''.$_GET['transactionId'];
        //header("Location:http://localhost/kwenpambiznis/wallet/payment/success/?transactionId=$id");
    }else{
        header("Location:https://kwenpam.com/error");
    }
?>