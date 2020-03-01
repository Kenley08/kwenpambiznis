<?php
    session_start();

    // if(!isset($_GET['id_uti'])){
    //   $_SESSION['id_uti']=_GET['id_uti'];
    //
    //
    //  }

  //on teste on teste si le bouton existe
    if(isset($_POST['submit'])){
  //on teste si le session existe
        if(!isset($_SESSION['id_uti'])){
          //on teste si l'id est bien obtenu
             $mesaj="Pou konekte sou kwenpambiznis fok ou konekte sou kwenpam, kisa w ap fe? <a href='http://kwenpam.com/login?referer=$_SERVER[HTTP_REFERER]'> konekte</a> oubyen <a href='http://kwenpam.com/register?referer=$_SERVER[HTTP_REFERER]'>kreye yon kont</a>?";
        }

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Koneksyon</title>
     <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <link href="../css/main.css?v=22333" rel="stylesheet" media="all">
</head>
<body class="animsition">
        <?php
            include '../file/login.inc.php';
            include '../file/footer.inc.php';
        ?>
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
