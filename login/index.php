<?php
    require_once '../api/Modele/Mconnexion.php';
    require_once '../api/Modele/Madministration.php';
    session_start();
    //mwen mete fonksyon sa se just pou afiche ere nan paj la kote ke li pa ka
    //le l n vini a id_uti a men li poko tonbe nan base la avn nou jenere yon Pin pou li
    ini_set('display_errors', 'Off');
    require_once '../api/Dao/administrationDao.php';  
    // $_SESSION['id_uti']=null;
    //nap verifye eske se yon konpayi livrezon kap konekte
    if(isset($_POST['btnconnectdelivery'])){
      //si tout bagay byen pase
      $_SESSION['id_delivery_company']=1;
      header("Location:../delivery");
    }
        if(isset($_GET['id_uti'])){
          $_SESSION['id_uti']=$_GET['id_uti'];
          header("location:?X_");
        }

        //nap teste si deconnect
        if(isset($_GET['deconnect'])){
          $_SESSION['id_uti']=null; 
        }
        if(isset($_SESSION['id_uti'])){
          $iduti=$_SESSION['id_uti'];
          //session_destroy();
          //mwen recheche done uti a pa rapo a id li genyen sou kwenpam
        $row=administrationDao::capteriduti($iduti);
        $admin=new administrationDao();
        //mwen teste si donne li te deja kreye yon kont sou kwenpambiznis
        //si li te genyen deja mwen pral just update tbladministration a nan db kwenpambiznis
        if($row){
                //mwen teste si bouton a egziste
              if(isset($_POST['btnconnect'])){
                //mwen adapte attributs yo ak objet mwen te kreye anle a
                $admin->idemp=$row[0];
                $admin->iduti=$row[1];
                $admin->pin=$_POST['pin'];
                $admin->etat=1;
                $admin->dateajout=$row[4];
                $admin->dateupdate=$row[5];
                //mwen teste si attribut pin la egziste paske se avel mwen pral fe tes poum konnen si uti a mete
                //Bon PIN li a
                  if(isset($admin->pin) && isset($admin->idemp) && isset($admin->etat)){
                    if(($admin->pin)==$row[2]){
                      administrationDao::updateetat($admin);
                      header("location:../");
                    }else {
                      $mesaj= "Pin sila pa koresponn ak kont sa";
                    }
                  }//sinon sa se pou si la pa jwenn yon attribut ki lye ak obje a,n apaffiche yon mesaj
                  else{
                    $mesaj= "Nou pa arive jwenn enf&ograve;masyon sou kont sa";
                  }

              }


        }else{
          //sinon sa se pou le moun la fek konekte sou kwenpam epi li vin premye fwa ap konnete
          //sou kwenpambiznis mwen jenere yon kod yon PIN pou li pou li ka konekte sou kwenpambiznis
            $idadmin=time()."".rand(1,100);
            $e=rand(1,9).rand(1,9).rand(1,9).rand(1,9);
          //ON va inserer dans la base
          if(isset($_POST['btnconnect'])){
            $admin->idadmin=$idadmin;
            $admin->iduti=$iduti;
            $admin->pin=$e;
            $admin->etat=1;
            $admin->dateaj="";
            $admin->dateup="";
              if(isset($admin->etat) && isset($admin->iduti) && isset($admin->idadmin) && isset($admin->etat) && isset($admin->dateaj) && isset($admin->dateup) && isset($admin->pin)){
                //on ajoute l'administrateur
                administrationDao::createadmin($admin);
              //  echo "admin nan kreye";
                  header("location:../index.php");
              }else{
                $mesaj= "Nou pa arive kreye kont lan pou ou";
              }

          }
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
          // echo $mesaj;
           //echo $sikse;
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
