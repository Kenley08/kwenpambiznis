<?php session_start();
  // unset($_SESSION['order_id']);
  require_once '../../../../../api/Modele/Mconnexion.php';
  require_once '../../../../../api/Modele/Mtransaction.php';
  require_once "../../../../../api/Dao/transactionDao.php";
  if(!isset($_SESSION['order_id'])){
    $_SESSION['order_id']=time().''.rand(1,1000);
  }
   // Leave only for debuging purposes
   ini_set('display_errors', 1);

   require_once '../vendor/autoload.php';
   use DGCGroup\MonCashPHPSDK\Credentials;
   use DGCGroup\MonCashPHPSDK\Configuration;
   use DGCGroup\MonCashPHPSDK\PaymentMaker;
   use DGCGroup\MonCashPHPSDK\Order;
   use DGCGroup\MonCashPHPSDK\TransactionCaller;
   use DGCGroup\MonCashPHPSDK\TransactionDetails;
   use DGCGroup\MonCashPHPSDK\TransactionPayment;

   // Instanciation of the payment class
   $client = "420a0c3df56ea66743a72d1b820c7fe3";
   $secret = "yBvHejbLSxrTz7NthHOh5pKkmwXwm0fKCkaxm_dxNVhOgoo9IL7vgGV4sZrNWFXr";
   $configArray = Configuration::getSandboxConfigs();
   if(isset($_POST['btnajoutelajan'])){
        $iduti=$_SESSION['id_uti'];
        // $mesaj="";
        $row=transactionDao::afficherkobous($iduti);
        $_SESSION['id_bourse']=$row[1];

        //$moyentran=$_POST['moyentranzaksyon'];
        $tran=new transactionDao();
        $idt=time()."".rand(1,100);
        $_SESSION['id_transaction']=$idt;
        //////////////////////////////////////////////////
        $amount = $_POST['txtlajan'];
        $orderId = $_POST['txtorderid'];
        // $idtransaction=time().''.rand(1,1000);
        $tran->idtran=$idt;
        $tran->idbourse=$row[1];
        $tran->montant=$amount;
        $tran->idetattran=1;
        $tran->idtypetran=4;
        $tran->idmoyentran=2;
        $tran->orderid=$orderId;
        $tran->transactionid="";
        $tran->description="Ajoute ".trim($_POST['txtlajan'])." goud sou bous kwenpam biznis pa mwayen Moncash";
        $tran->dateajout="";
        $tran->dateupdate="";
        if(isset($tran->idtran)){
            transactionDao::ajoutertransaction($tran);
            $test = new Credentials($client, $secret, $configArray);
            // Call to the payment request
            $theOrder = new Order( $orderId, $amount );

            $paymentObj = PaymentMaker::makePaymentRequest( $theOrder, $test, $configArray );
            $url=$paymentObj->getRedirect();
            header("Location: $url");
        //  $mesaj="Tranzaksyon an ajoute";
        }else{
          $mesaj="Nou pa arive kreye tranzaksyon an pou ou, verifye epi rek&ograve;manse pou nou.";
        }
   }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | mete lajan</title>
     <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../../../../css/main.css?v=23" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2">
            <?php
                include '../../../../../file/header.inc.php';
                // include '../../file/info.inc.php';
            ?>
                <?php include '../../../../../file/deposit_wallet.inc.php'; include '../../file/footer.inc.php';?>

        </div>
        <?php
            //insertion du menu gauche de la page
            include '../../../../../file/menu_left.inc.php';
            include '../../../../../file/confirmation.inc.php';
            include '../../../../../file/help_all.inc.php';
        ?>

        <?php
              if(isset($_GET["transactionId"])){
                $test = new Credentials($client, $secret, $configArray);
                $amount = 10;
                $orderId = 1583596665787;

                $theOrder = new Order( $orderId, $amount );

                $transactionDetails = TransactionCaller::getTransactionDetailsByOrderIdRequest( $theOrder, $test, $configArray );
                $transactionDetails->getPayment()->getMessage();
                $_SESSION['order_id']=null;
              }
          ?>
    </div>
    <!-- Jquery JS-->
    <script src="../../../../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../../../../vendor/animsition/animsition.min.js"></script>
    <script src="../../../../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../../../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../../../vendor/select2/select2.min.js">
    </script>
    <script src="../../../../../js/main.js"></script>
</body>


</html>
