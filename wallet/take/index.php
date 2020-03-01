<?php
 session_start();
    require_once"../../api/Dao/transactionDao.php";
    require_once"../../api/Dao/MmoyentransactionDao.php";
    require_once"../../api/Dao/transactionDao.php";
    //  session_start();
    // $iduti=$_GET['id_uti'];
    // $_SESSION['id_uti']=2;
    // require_once"../../Dao/transactionDao.php";
<<<<<<< HEAD
    //on teste si l 'id de lutilisateur existe'
    if(isset($_SESSION['id'])){
      $iduti=$_GET['iduti'];
      $mesaj="";
=======
    //on teste si l 'id de lutilisateur existe'  
    if(isset($_SESSION['id_uti'])){
      $iduti=$_SESSION['id_uti']; 
>>>>>>> 3550438d0833ac3bae6dc8f21bfd013a043a6d70
      $row=transactionDao::afficherkobous($iduti);
      $_SESSION['id_bourse']=$row[1];

      //$moyentran=$_POST['moyentranzaksyon'];
      $tran=new transactionDao();
      $idt=time()."".rand(1,100);
      if($row){
          //on va tester si le boutton submit existe
          if(isset($_POST['submit'])){
            //on va tester les champs si ils sont vides
            $idtransaction=time().''.rand(1,1000);
            $tran->idtran=$idt;
            $tran->idbourse=$row[1];
            $tran->montant=trim($_POST['kantitekobretre']);
            $tran->idetattran=1;
            $tran->idtypetran=3;
            $tran->idmoyentran=$_POST['moyentranzaksyon'];
            $tran->orderid="2";
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
<<<<<<< HEAD
                    $mesaj="ou dwe antre selman chif nan nimewo trazaksyon a";
                }else{
                      if($kantitekobretre>$row[0]){
                          $mesaj="ou pa gen kantite kob sa sou bous ou a!";
                      }else{
                         transactionDao::ajoutertransaction($tran);
                         if(transactionDao::ajoutertransaction($tran)){
                         $mesaj="tranzaksyon an ale men li an atant toujou,tann yon ti moman pou yo valide l";
                       }
                      }
                }
              }
          }
=======
                    $mesaj="Ou dwe antre selman chif nan nimewo trazaksyon a";
                }else{ 
                      if($kantitekobretre>$row[0]){
                          $mesaj="Ou pa gen kantite kob sa sou bous ou a!";  
                      }else{ 
                        //  transactionDao::ajoutertransaction($tran);
                        
                        if(transactionDao::ajoutertransaction($tran)){
                            $sikse="Tranzaksyon an ale men li an atant toujou, tann yon ti moman pou yo valide l";
                        }else{
                            $mesaj="Nou pa arive fe demand tranzaksyon an pou ou";  
                        } 
                      } 
                }  
              } 
          } 
>>>>>>> 3550438d0833ac3bae6dc8f21bfd013a043a6d70
            // si le bouton submit n est pas encore isset on en nettoie le variable mesaj
           }else{
             $mesaj="";
           }
        }
    }else{
      $mesaj="nou pa jwenn obje a";
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
                include '../../file/header.inc.php';
                //insertion du menu gauche de la page
                include '../../file/menu_left.inc.php';
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
