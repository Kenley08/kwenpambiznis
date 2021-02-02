
<?php
require_once '../../../api/Dao/utilisateurDao.php';
require_once '../../../api/Modele/Mconnexion_2.php';
ini_set('display_errors', 'Off');
    //nou pral rekipere mpt de passe l an
    if(isset($_POST['btnrekipere'])){
        $username=$_POST['txtusername'];
       //nou pral fe rechech la nan baz de donne a
       $ligne=utilisateurDao::getByUsername($username);
      // echo $ligne[1];
      if($ligne){
        //n ap jener yon nouvo password pou update la ka fet
        $newpass=rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9);
        //nou pral  yon update password la
        utilisateurDao::updatePassword($newpass,$ligne[0]);

        //nou teste si li jwenn ni imel la ak tel la
        if(($ligne[1]) && ($ligne[2])){
        //voye l pa imel si le jwenn gen imel ak tel
             $sikse="nouvo mo de pas ".$newpass." voye pa imel";

         }else{

             if($ligne[1]){
                 //voye l pa imel si nou jwenn gen imel
                $sikse="nouvo mo de pas ".$newpass." voye pa imel";
             }else{
                  //voye l pa tel si nou jwenn gen tel
                $sikse="nouvo mo de pas ".$newpass." voye pa Tel";
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
    <title>Rekipere modpas</title>
  

    <!-- Bootstrap CSS-->
    <link href="../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2 index-page-container2">
            <?php 
                //insertion de l'entete de la page
                include '../../../file/kwenpam/recuperer_password.inc.php'; 
               
            ?>
        </div>  
    </div>
 
    <script src="../../../vendor/bootstrap-4.1/bootstrap.min.js"></script>  
    </script> 
 
</body>
</html>