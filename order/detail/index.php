<?php
    include ("../../smtptester/class.phpmailer.php"); 
    require_once '../../api/Modele/sendmail.class.php';  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <meta name="author" content="kwenpam"> 
    <title>Kwenpam | Tablo b&ograve; | Notifikasyon | Detay</title>
     <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all"> 
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> 
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/main.css?v=233" rel="stylesheet" media="all">
</head>
<body class="animsition">
        <?php
          if(isset($_POST['btnconfimer'])){
            //pour l'envoi de l'email
            //email acheteur
            $email="eustache455@gmail.com";
            //email livreur
            $email_livreur="eustache455@gmail.com";
            //sujet acheteur
            $subject="Konfimasyon komand";
            //sujet livreur
            $subject_livreur="Demand livrezon";

            $host="mail.kwenpam.com";
            //information server mail pour acheteur
            $from="notifications-noreply@kwenpam.com";
            $username="notifications-noreply@kwenpam.com";
            //information server mail pour livreur
            $from_livreur="livraison@kwenpam.com";
            $username_livreur="livraison@kwenpam.com";
            $fromname="Kwenpam biznis";
            $password="Jesuschrist@2014";
            //corps message pour acheteur
            $body="<h2><strong>Kwenpam biznis</strong></h2><br/><br/>
                    Hello Luckens, nou swete tout bagay anf&ograve;m pou ou. Ou resevwa imel sila se pou 
                    konfime ou ke James Talyor konfime ke li resevwa demand ou an, kote ou te di ou achte yon mayo
                    ou vle yo livre li pou ou. <br/> <br/>
                    N.B: Tout fwa si apre 3 jou, livrezon an pa f&egrave;t, rele nan +509 47239162 / 48349386, oubyen ekri nou 
                    sou info@kwenpam.com. <br/> <br/>
                    <strong>Enf&ograve;masyon kliyan</strong> <br/>
                    Eustache Luckens Yadley <br/>
                    47239162 <br/>
                    eustache455@gmail.com <br/>
                    Haiti, port-au-prince, carrefourfeuille # 117 <br/>
                    <a href='http://business.kwenpam.com/transaction/01209230091239' class='btn btn-primary'>Detay k&ograve;mand</a>
                    <br/> <hr/> 
                    Si tout fwa ou gen yon kesyon oubyen yon sigjesyon ekri nou sou <a href='mailto:info@kwenpam.com?Subject=demand ed'>info@kwenpam.com</a>
            "; 
            //corps message pour livreur
            $body_livreur=" <!DOCTYPE html>
                <html> 
                <head> <meta charset='UTF-8'>  <meta name='viewport' content='width=device-width, initial-scale=1.0'> <meta http-equiv='X-UA-Compatible' content='ie=edge'> <title>Imel livrezon</title><style>*{margin:0;padding:0}#corps-mail-livreur{border:1px solid rgb(214, 214, 214);}a{list-style: none;}  #tete-mail-livreur,#pied-mail-livreur,#milieu-mail-livreur{width: 90%;padding:5%;} #tete-mail-livreur{text-align:center;color:white; background-color: rgb(221, 123, 10);  } #pied-mail-livreur{ line-height: 20px;background-color: rgb(56, 56, 56);text-align: center} #pied-mail-livreur p{font-size: .8em;color:white;} #pied-mail-livreur li{display: inline; padding: 10px;} #pied-mail-livreur li a{color:white;}#corps-mail-livreur table{width: 100%;} #corps-mail-livreur table td{padding:2%;}</style></head>
                <body> 
                <div id='corps-mail-livreur' >
                    <div id='tete-mail-livreur' >
                        <h1>Kwenpam biznis & BrigeExpress</h1> <br>
                        S&egrave;vis livrezon
                    </div>
                    <div id='milieu-mail-livreur' >
                        <p>
                            Hi, nou gen yon nouvo livrezon pou ou. Se yon mayo 23df. 
                            <a href='http://business/kwenpam.com/transaction/203203923' class='btn btn-primary'>Detay sou pwodwi a</a>
                        </p> <br><hr> <br>
                        <table>
                            <tr>
                                <td>
                                    <h2><strong>Enf&ograve;masyon vand&egrave;</strong></h2> <br>
                                    Eustache Luckens Yadley <br/>
                                    47239162 <br/>
                                    eustache455@gmail.com <br/>
                                    Haiti, port-au-prince, carrefourfeuille # 117 <br/>
                                </td>
                                <td>
                                    <h2><strong>Enf&ograve;masyon vand&egrave;</strong></h2> <br>
                                    Eustache Luckens Yadley <br/>
                                    47239162 <br/>
                                    eustache455@gmail.com <br/>
                                    Haiti, port-au-prince, carrefourfeuille # 117 <br/>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id='pied-mail-livreur'> 
                        <ul>
                            <li><a href='http://business.kwenpam.com/privacy'> Politik konfidansyalite</a></li>
                            <li><a href='http://business.kwenpam.com/legal/terms'>T&egrave;m ak kondisyon</a></li>
                            <li><a href='http://business.kwenpam.com'> Sit</a></li>
                        </ul> <br>
                        <p>
                            Tout enf&ograve;masyon nan imel sila, konsene s&egrave;lman BrigeExpress. Si tout fwa ou panse pou yon rezon oubyen yon l&ograve;t
                            imel sa pa sipoze vin jwenn nou, f&egrave; nou konn sa pandan wap rele s&egrave;vis kliyant&egrave;l nou nan + 4834-9386
                        </p>
                    </div>
                </div>
                </body></html>
            "; 
            if(sendmail($host,$username,$password,$from,$fromname,$subject,$email,$body)==1){
                if(sendmail($host,$username_livreur,$password,$from_livreur,$fromname,$subject_livreur,$email_livreur,$body_livreur)==1){
                    $id=time();
                    $dossier = '../../transaction/'.$id.'/';
                     if(@mkdir($dossier, 0777, true)) {    
                        //id de la transaction 
                        copy("../../transaction/0/index.php","../../transaction/$id/index.php");
                        // header("location:../../transaction/$id");
                        $result=1;
                     }else{
                         $result=2;
                     }
                }else{
                    $result=0;
                } 
            }else{
                $result=0;
            }  
        }
    ?>
    <div class="page-wrapper">
        <div class="page-container2">
            <?php
                include '../../file/header.inc.php';
                // include '../../file/info.inc.php';
            ?> 
            <div class="section__content section__content--p30 midle-midle"> 
                <p class="title-page">
                    K&ograve;mand / Detay
                </p>
                <?php include '../../file/detail_order.inc.php'; include '../../file/footer.inc.php'; ?> 
            </div> 
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
</body>
</html>