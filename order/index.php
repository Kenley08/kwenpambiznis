<?php
session_start();
  require_once "../api/Dao/commandeDao.php";
  require_once "../api/modele/Mconnexion.php";
  require_once "../api/Dao/ProduitsKwenPamDao.php";
  require_once "../api/modele/Mconnexion_2.php";
  require_once "../api/modele/Mconnexion.php";
//  if(isset($_SESSION['id_uti'])){
//   $iduti=$_SESSION['id_uti'];
//   //$_SESSION['id_uti']=null;
//   }

$iduti='1507584121';
if(isset($_GET['id_com_an'])){
    $idcom=$_GET['id_com_an'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kwenpam | Tablo b&ograve; | pwodwi</title>

     <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <link href="../css/main.css?v=23" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2">
            <?php
                include '../file/header.inc.php';
                // include '../file/info.inc.php';
            ?>
            <div class="section__content section__content--p30 midle-midle">
                <p class="title-page">
                    Lis tout k&ograve;mand yo

                <?php include '../file/order.inc.php'; include '../file/footer.inc.php';?>

            </div>
        </div>
        <?php
            //insertion du menu gauche de la page
          include '../file/menu_left.inc.php';
        ?>
    </div>
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>
    <script src="../js/main.js"></script>
</body>
</html>
