<?php
    require_once '../../api/Modele/Mconnexion.php';
    require_once '../../api/Modele/Madministration.php';
    session_start(); 
    if(isset($_SESSION['id_delivery_company'])){
      header("Location:../../delivery");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Koneksyon | delivery</title>
     <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/main.css?v=223e33" rel="stylesheet" media="all">
</head>
<body class="animsition">
        <?php
          // echo $mesaj;
           //echo $sikse;
            include '../../file/login_delivery.inc.php';
            // include '../../file/footer.inc.php';
        ?>
    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../endor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
