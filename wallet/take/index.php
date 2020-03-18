<?php
session_start();
require_once"../../api/Dao/transactionDao.php";
require_once"../../api/Dao/MmoyentransactionDao.php";
require_once"../../api/Dao/transactionDao.php";
  ini_set('display_errors', 'Off');
//  $_SESSION['id_uti']=1;
    //on teste si l 'id de lutilisateur existe'
    if(isset($_SESSION['id_uti'])){
          $iduti=$_SESSION['id_uti'];
          $row=transactionDao::afficherkobous($iduti);
        //  $_SESSION['id_bourse']=$row[1];
          $tran=new transactionDao();
          $idt=time()."".rand(1,100);

          if($row){
            //on va tester si le boutton submit existe
            if(isset($_POST['submit'])){
              //on va tester les champs si ils sont vides
                $idtransaction=time().''.rand(1,1000);
                $idorder=time().''.rand(1,1000);
                $tran->idtran=$idt;
                $tran->idbourse=$row[1];
                $tran->montant=trim($_POST['kantitekobretre']);
                $tran->idetattran=1;
                $tran->idtypetran=3;
                $tran->idmoyentran=$_POST['moyentranzaksyon'];
                $tran->orderid=$idorder;
                $tran->transactionid=$idtransaction;
                $tran->description="Demand retre ".trim($_POST['kantitekobretre'])." goud pa mwayen ".$_POST['moyentranzaksyon'];
                $tran->dateajout="";
                $tran->dateupdate="";
                $kantitekobretre=$_POST['kantitekobretre'];
                $nimewotranzaksyon=$_POST['nimewotranzaksyon'];
                $kr=preg_match('/^[0-9]*$/', $kantitekobretre);
                //$kr =preg_match('/[^0-9]+$/', '', $kantitekobretre);
                $nt =preg_match('/^[0-9]*$/',$nimewotranzaksyon);
                if(empty($_POST['kantitekobretre']) || empty($_POST['nimewotranzaksyon']) ){
                  $mesaj="Ou dwe ranpli tout chan yo";
                }else{
                  if (!$kr){
                        $mesaj="Ou dwe antre selman chif nan kob retre a ";
                    }else{
                if(!$nt){
                    $mesaj="Ou dwe antre selman chif nan nimewo trazaksyon a";
                }else{//ou teste si kantite kob iti a antre a siperye a kob sou bous li a
                        if($kantitekobretre>$row[0]){
                            $mesaj="Ou pa gen kantite kob sa sou bous ou a!";
                        }else{
                              //on tester si il y a un transaction en cours


                          if((isset($tran->idtran)) && (isset($tran->idbourse)) && (isset($tran->montant)) && (isset($tran->idetattran)) && (isset($tran->idtypetran)) && (isset($tran->idmoyentran)) && (isset($tran->orderid))
                        && (isset($tran->transactionid)) &&  (isset($tran->description)) && (isset($tran->dateajout)) && (isset($tran->dateupdate))){
                          //mwen rekipere idbous la
                          $idbous=$tran->idbourse;
                          $liy=transactionDao::getlastrow($idbous);

                         if($liy){
                            //mwen teste si uti sa pa gen tranzaksyon ki an kou sou bous li a
                            if($liy[3]==2){
                              $nim=strval($nimewotranzaksyon);
                                if(strlen($nim)==8){
                                  //ajoute tranzakzyon
                                    transactionDao::ajoutertransaction($tran);
                                    $sikse="Tranzaksyon an ale men li an atant toujou, tann yon ti moman pou nou valide l";
                                }else{
                                  $mesaj=" Nimewo telefon la dwe gen 8 chif";
                                }

                            }else{
                              $mesaj="Ou gen yon trazaksyon ki an atant deja,tanpri tann nou valide li pou ou";
                            }

                         }else{
                           //ajoute tranzakzyon
                             transactionDao::ajoutertransaction($tran);
                               $sikse="Tranzaksyon an ale men li an atant toujou, tann yon ti moman pou nou valide l";
                         }

                          // if($liy[3]==2){
                          //
                          // }else{
                          //   $mesaj="ou ge yon tranzaksyon ki an kou deja";
                          // }
                        //  echo $liy[3];

                          // transactionDao::ajoutertransaction($tran);
                          //  $_POST['kantitekobretre']="";
                          //  $_POST['moyentranzaksyon']="";
                          //  $_POST['nimewotranzaksyon']="";
                          // $sikse="Tranzaksyon an ale men li an atant toujou, tann yon ti moman pou nou valide l";





                         }else{
                           $mesaj="Nou pa arive fe demande ou a.";
                         }

                      }
                }
              }

                }
            }

          }
    }else {
      $mesaj="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Bous | Retire lajan</title>
     <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/main.css?v=33w2" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2 index-page-container2">
            <?php
                //insertion de l'entete de la page
              //  include '../../file/header.inc.php';
                //insertion du menu gauche de la page
              //  include '../../file/menu_left.inc.php';
                include '../../file/take_money.inc.php';
                include '../../file/help_all.inc.php';
            ?>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="../../js/main.js"></script>

    <script src="../../js/index.js?v=142321"></script>
</body>
</html>
