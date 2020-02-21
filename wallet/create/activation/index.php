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
      $id_user=$_SESSION['id_user'];
      $tip_bou=$_GET['tip_bous'];
      $req="insert into tblbourse values('$id',1,'$id_user',0,1,NOW(),NOW())";
      $q=@mysqli_query($con, $req);
      if ($q>0) {
        $message= "Bous kwenpan ou an kreye avek sikse";
      }else {
        $message="Gen yon ere ki komet, kontakte yon administrate sit lan pou plis enfomasyon";
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
            window.opener.location.href="http://localhost/kwenpam/cpanel/wallet/?activation=true";
            window.close();
        }
    </script>
    <script src="../../vendor/jquery-3.2.1.min.js"></script>