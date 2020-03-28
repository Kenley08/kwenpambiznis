<?php
  session_start();
// require_once"../api/Dao/ProduitsKwenPamDao.php";
// //require_once'../api/Modele/Memploye.php';
// require_once'../api/Modele/Mconnexion_2.php';
 
  //$ligne=produitDao::GetProduit();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Bous | Peye | Pwodwi</title>
     <!-- Fontfaces CSS-->
    <link href="../../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../../css/main.css?v=23322" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
         <?php
            include '../../../file/payment_product.inc.php';
         ?>
    </div>
    <!-- Jquery JS-->
    <script src="../../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../../vendor/animsition/animsition.min.js"></script>
    <script src="../../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>
