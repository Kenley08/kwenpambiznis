<?php
session_start();
require_once "../../api/Modele/Mconnexion.php";
require_once "../../api/Dao/livraisonDao.php";
require_once "../../api/Modele/Mlivraison.php";
require_once "../../api/Modele/Mconnexion.php";
require_once "../../api/Dao/detaillivraisonDao.php";
  ini_set('display_errors', 'Off');
  if(isset($_GET['productid']) && isset($_GET['etat'])){
    $_SESSION['productid']=$_GET['productid'];
    $_SESSION['etat']=$_GET['etat'];
    $idpro=$_GET['productid'];
    $iduti=$_SESSION['id_uti'];
    $etat=$_GET['etat'];
  }
    if(isset($_POST['btncontinuer'])){
      //on testesi le radio bouton existe
        if(isset($_POST['radios'])){
          $radios=$_POST['radios'];
          if($radios=="option3"){
            //on va teste si le le champ description et nb_accepte_livre existe
            if(isset($_POST['txtdescriptionliv']) && isset($_POST['txtnblivre'])){
              $_SESSION['descriptionliv']=$_POST['txtdescriptionliv'];
              $_SESSION['nblivre']=$_POST['txtnblivre'];
              header("Location:i/");
            }
          }

        }
}

if(isset($_POST['btnvalide'])){
  //si l'utilisateur a choisi que c'est Kwenpam qui va gerer la livraison
    $alea=time()."".rand(1,100);
   $livraison=new livraisonDao();
    $livraison->idliv=$alea;
    $livraison->idann=$idpro;
    $livraison->idlivreur='1';
   $livraison->etat=$etat;
    $livraison->desc=$_POST['txtdescriptionliv'];
    $livraison->nbacc=$_POST['txtnblivre'];
    $livraison->dateup="";

    if(isset($livraison->idliv) && isset($livraison->idann) &&  isset($livraison->idlivreur) && isset($livraison->etat) && isset($livraison->desc)
        && isset($livraison->nbacc) && isset($livraison->dateup)){
          //on recherche l'id de l annoce dans la base avant d ajouter ce parametre
        //  livraisonDao::getAlllivraison();
          foreach(livraisonDao::getAlllivraison() as $row):
            if($row[1]==$idpro){
                $mesaj="Pwodwi sila te parametre deja";
                // $sikse="";
            }
          endforeach;
          if(!isset($mesaj)){
            //on va inserer dans la table livraison
              livraisonDao::ajouterlivraison($livraison);
            //  $alea=time()."".rand(1,100);
              $detaillivraison=new detaillivraisonDao(); 
              for($i=0;$i<6;$i++){
            $ale=time()."".rand(1,100);
            if($i==0){
             $detaillivraison->iddetailliv=$ale;
             $detaillivraison->idliv=$livraison->idliv;
            $detaillivraison->idville=70;
             $detaillivraison->prix=250;
             $detaillivraison->dateup="";
             detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
          }
          else if($i==1){
            $detaillivraison->iddetailliv=$ale;
            $detaillivraison->idliv=$livraison->idliv;
           $detaillivraison->idville=53;
            $detaillivraison->prix=250;
            $detaillivraison->dateup="";
            detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
          }
          else if($i==2){
            $detaillivraison->iddetailliv=$ale;
            $detaillivraison->idliv=$livraison->idliv;
           $detaillivraison->idville=65;
            $detaillivraison->prix=250;
            $detaillivraison->dateup="";
            detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
          }
          else if($i==3){
            $detaillivraison->iddetailliv=$ale;
            $detaillivraison->idliv=$livraison->idliv;
           $detaillivraison->idville=66;
            $detaillivraison->prix=250;
            $detaillivraison->dateup="";
            detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
          }else if($i==4){
            $detaillivraison->iddetailliv=$ale;
            $detaillivraison->idliv=$livraison->idliv;
           $detaillivraison->idville=144;
            $detaillivraison->prix=250;
            $detaillivraison->dateup="";
            detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
          }else{
            $detaillivraison->iddetailliv=$ale;
            $detaillivraison->idliv=$livraison->idliv;
           $detaillivraison->idville=145;
            $detaillivraison->prix=250;
            $detaillivraison->dateup="";
            detaillivraisonDao::ajouterdetaillivraison($detaillivraison);

          }
          $sikse="Paramet la ajoute avek sikse.";
          //  $mesaj="";
              } 

          }

      }

} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | pwodwi</title>
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
    <link href="../../css/main.css?v=23" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2">
            <?php
                include '../../file/header.inc.php';
                // include '../../file/info.inc.php'; 
           include '../../file/setting_product.inc.php'; include '../../file/footer.inc.php';?>
    
        </div>
        <?php
            //insertion du menu gauche de la page
            include '../../file/menu_left.inc.php';
        ?>
    </div>
    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>
    <script src="../../js/main.js"></script>
    <script>
        $(document).ready(function(){
             $(".radio input").click(function(){
                id=this.id;
                $(".x-a-1,#btncontinuer,#btnvalid,.livrezon-check").show(); 
                if(id==="radio3"){
                    $(".x-a-1,#btncontinuer").hide(); 
                }else if(id==="radio2"){
                  $(".x-a-1,#btncontinuer,#btnvalid,.livrezon-check").hide();  
                }else if(id==="radio4"){
                    $(".x-a-1,#btncontinuer").show(); 
                }else if(id==="radio5"){
                    $("#btncontinuer,#btnvalid,.x-a-1").hide();
                }
             });
        });
    </script>
</body>
</html>
