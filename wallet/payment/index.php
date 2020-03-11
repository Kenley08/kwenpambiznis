<?php session_start();
      //creation du bourse
      $serveur="localhost";
      //$user="a38e91_kwen";
      $user="root";
      //$serveur="mysql5022.site4now.net";
      $pass="";
      $bd="db_9b4f31_kwenpam";
      //$bd="db_a38e91_kwen";
      $con=  mysqli_connect($serveur, $user, $pass, $bd) or die ("Connexion a la base impossible");

      $id=time().''.rand(0,1000);
      $mon= $_SESSION['detail'][1];
      $id_bourse=$_SESSION['id_bourse_user'];
      $req="insert into tbltransaction values('$id','$id_bourse','$mon',1,1,'liv revey vesyon pdf',NOW(),NOW())";
      $q=@mysqli_query($con, $req);
      if ($q>0) {
        $solde=$_SESSION['solde_user']-$mon;
        $req="update tblbourse set solde='$solde', date_update=NOW() where id_bourse='$id_bourse'";
        $q=@mysqli_query($con, $req);
        if ($q>0) {
            $message= "Telechaje liv lan kounya";
            $url=$_SESSION['url_download'];
            $m="Telechaje";
        }else {
            $message="Gen yon ere ki komet, kontakte yon administrate sit lan pou plis enfomasyon";
            $url="#";
            $m="F&egrave;men";
            ?>
         <script>
            function closechildfen(){
                window.opener.location.href="http://kwenpam.com/annonce/details.php";
                window.close();
            }
        </script>
    <?php
        }
      }else {
          $message="Gen yon ere ki komet, kontakte yon administrate sit lan pou plis enfomasyon";
         $url="#";
         $m="F&egrave;men";
        ?>
        <script>
           function closechildfen(){
               window.opener.location.href="http://kwenpam.com/annonce/details.php";
               window.close();
           }
       </script>
   <?php

      }
?>
    <div style="margin:auto;margin-top:70px;text-align:center;">
        <img src="../../images/6.png" height="150"> <br> <br>
        <?php echo $message;?> <br> <br>
        <a href="#" download="<?php echo $url;?>"><button type="button" class="btn btn-secondary btn-small" onclick="closechildfen();" style="padding:10px;background-color:blue;color:white;border:1px solid blue;width:100px;"><?php echo $m;?></button>  <br> <br></a>
        <a href="http://business.kwenpam.com/privacy">Tem ak kondisyon</a> aplikab
    </div>
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
