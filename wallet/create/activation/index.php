<?php session_start();
require_once"../../../api/Dao/BourseDao.php";
require_once'../../../api/Modele/Mconnexion.php';
require_once'../../../api/Modele/Mbourse.php';

if(isset($_GET['idtpbourse'])){
    $idtypebourse=$_GET['idtpbourse'];
    if(($idtypebourse)!=="1" || ($idtypebourse)!=="2" || ($idtypebourse)!=="3"){
      $message="Gen yon ere ki komet";
    } else{
      $message=" insertion reussi";
      $iduti=2;
      $bourse=new BourseDao();

      //on passe l'objet des atrributs
      $b=time()."".rand(1,100);
      $bourse->idbourse=$b;
      $bourse->idtypebourse=$idtypebourse;
      $bourse->iduti=1;
      $bourse->solde=0;
      $bourse->etat=1;
      $bourse->dateaj="";
      $bourse->dateup="";
    //printf(BourseDao::ajouterbourse($bourse));
      //on teste avant d'ajouter une bourse
      $row=BourseDao::testeridut($iduti);
      //var_dump($row);
       if(!$row){
         //  $message="etat egale a 0";
         if(BourseDao::ajouterbourse($bourse))
        {
          $message=" insertion reussi";
        }

      }else{
        if($row[0]==0){
        $message="bous ou kreye deja,li mande aktive";

        }else{
          $message="bous ou kreye deja!";
        }
      }
    }



}
?>
    <div style="margin:auto;margin-top:70px;text-align:center;">
        <img src="../../../images/6.png" height="150"> <br> <br>
        <?php echo $message;?> <br> <br>
        <button type="button" class="btn btn-secondary btn-small" onclick="closechildfen();" style="padding:10px;background-color:blue;color:white;border:1px solid blue;width:100px;">F&egrave;men</button>  <br> <br>
        <a href="http://business.kwenpam.com/privacy">Tem ak kondisyon</a> aplikab
    </div>

    <script>
        function closechildfen(){
            window.opener.location.href="http://localhost/cpanel/wallet/?activation=true";
            window.close();
        }
    </script>
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
