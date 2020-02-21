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
      $id_user=$_SESSION['id_user'];  
      $req="select solde,id_bourse from tblbourse where id_uti='$id_user'";
      $q=@mysqli_query($con, $req);
      $result=@mysqli_fetch_row($q);
      $_SESSION['solde_user'] =$result[0];
      $_SESSION['id_bourse_user'] =$result[1];
      if ($result!==NULL) {
        if($result[0]>=10){ ?>
            <script>
                function closechildfen(){
                    window.location.href="../?pay=true"; 
                }
            </script>
            <?php 
            $message="Tout bagay ok, ou gen ase lajan pou peye";
        }else{?>
            <script>
                function closechildfen(){
                    window.opener.location.href="http://kwenpam.com/annonce/details.php";
                    window.close();
                }
            </script>
            <?php
            $message="Ou pa gen ase lajan nan bous ou peye pwodwi sila. <br/> Ou genyen s&egrave;lman ".$result[0]." goud"; 
        }
      }else {?>
        <script>
            function closechildfen(){
                window.opener.location.href="../../create";
                window.close();
            }
        </script>
        <?php
        $message="Ou poko kreye bous kwenpam ou. klike la pou fe sa kounya"; 
      }
?>
    <div style="margin:auto;margin-top:50px;text-align:center;"> 
        <img src="../../../images/6.png" height="150"> <br> <br>
        <?php echo $message;?> <br> <br>
        <button type="button" class="btn btn-secondary btn-small" onclick="closechildfen();" style="padding:10px;background-color:blue;color:white;border:1px solid blue;width:100px;">Kontinye</button>  <br> <br>
        <a href="http://business.kwenpam.com/privacy">Tem ak kondisyon</a> aplikab
    </div>
    
   
    <script src="../../../vendor/jquery-3.2.1.min.js"></script>