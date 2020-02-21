<?php

$id=$_GET['id'];

$con = mysqli_connect("localhost", "root", "", "db_kwenpam_biznis");
//if ($ligne){
  if(isset($_POST['submit'])){
    if(isset($_POST['nomcomplet'])){
      $nc=$_POST['nomcomplet'];
      $email=$_POST['email'];
      $tel=$_POST['telephone'];
      $adres=$_POST['adresse'];
      $postanc=$_POST['postancien'];
      $postac=$_POST['postactuel'];
      $salaire=$_POST['salaire'];
      $requete="update tblemploye set nom_complet='$nc',email='$email',telephone='$tel',adresse='$adres',salaire='$salaire',date_update=NOW() where id_emp='$id'";
      $resultat=mysqli_query($con, $requete);
                        if($resultat>0){
        header("location: ../index.php");
    }
}

}

?>


<div class="row" id="midle-new-employee">
    <div class="col-9">
        <p class="title-page">
            Ajoute yon nouvo anplwaye
        </p>
        <div class="text-pub" id="step-1-new-employee">
           Asire ke moun ou pral anrejistre a, li genyen yon maximum enf&ograve;masyon disponib sou li. Apre chak anrejistre ou kapab modifye li l&egrave; ou vle e jan ou vle.
           Sinon, ou kapab gade <a href="../">lis tout anplwaye yo </a> oubyen siw bezwen plis &egrave;d ou ka <a href="#edemp" data-toggle="modal" data-target="#scrollmodal">klike</a> sou lyen sila.<br> <br>
                 <!-- <button type="button" class="btn btn-primary btn-small callads" id="btncallboost">Bouste anons</button>
                <button type="button" class="btn btn-secondary btn-small callads" id="btncallcreateads">Kreye piblisite</button>  -->
        </div> <br>
        <div class="col col-md-12 bg-white no-padding">
            <div class="card-header">

                <strong>Ranpli tout chan yo</strong>

            </div>
            <div class="card-body card-block">
                <form action="" method="post"  class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtcodeemp" class=" form-control-label">K&ograve;d anplwaye</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <?php
                            // partie php ou on va recuperer les donnees de l'employe venat de la base de donnees
                                 $req="select * from tblemploye where id_emp='$id'";
                                  $result=mysqli_query($con, $req);
                                  $ligne=mysqli_fetch_row($result);
                            ?>

                            <input type="text" id="txtcodeemp"  value="<?=$ligne[0];?>" name="txtid" disabled="" class="form-control">

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">

                            <label for="txtnomcompletemp" class=" form-control-label">Non konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtnomcompletemp" value="<?=$ligne[1];?>"   placeholder="Ex: Junior Jean Laurent" name="nomcomplet" class="form-control">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtemailemp" class=" form-control-label">Imel</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="txtemailemp" name="email" value="<?=$ligne[2];?>" placeholder="Ex: juni@gamil.com" class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtphoneemp" class=" form-control-label">Telef&ograve;n</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtphoneemp" value="<?=$ligne[3];?>" name="telephone" placeholder="Ex: 47293493" class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtsexeemp" class=" form-control-label">S&egrave;ks</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtsexeemp" name="sexe" class="form-control">
                                <option value="0">Mal</option>
                                <option value="1">Fem&egrave;l</option>
                                <option value="2">L&ograve;t</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtconditionmatrimonialeemp" class=" form-control-label">Kontidisyon M.</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtconditionmatrimonialeemp" name="condition" class="form-control">
                                <option value="0">Selibat&egrave;</option>
                                <option value="1">Marye</option>
                                <option value="2">V&egrave;f</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtgroupesanguinemp" class=" form-control-label">Gwoup sangen</label>
                        </div>

                        <div class="col-12 col-md-9">
                            <select id="txtgroupesanguinemp" name="groupesanguin" class="form-control">
                                <option value="0">A+</option>
                                <option value="1">B+</option>
                                <option value="2">AB</option>
                                <option value="1">O+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtgroupesanguinemp" class=" form-control-label">Nivo etid</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtgroupesanguinemp" name="nivo" class="form-control">
                                <option value="0">Dipl&ograve;m</option>
                                <option value="1">Lisans</option>
                                <option value="2">Metriz</option>
                                <option value="1">Doktora</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtvilleemp" class="form-control-label">Kote rete</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtvilleemp" name="ville" class="form-control">
                                <option value="0">Delma</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtadresseemp" class=" form-control-label">Adr&egrave;s</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtadresseemp" name="adresse" value="<?=$ligne[9];?>"  placeholder="Ex: 117, route de dalles" class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtdernierposteemp" class=" form-control-label">D&egrave;nye dj&ograve;b</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtdernierposteemp" name="postancien" value="<?=$ligne[10]?>"  placeholder="Ex: kontab, Le bon berger" class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtposteemp" class=" form-control-label">P&ograve;s</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtposteemp" name="postactuel" class="form-control">
                                <option value="0">Administrat&egrave;</option>
                                <option value="1">Sip&egrave;viz&egrave;</option>
                                <option value="2">Kesye</option>
                                <option value="3">Sekret&egrave;</option>
                                <option value="4">Kontab</option>
                                <option value="5">Sekirite</option>
                                <option value="6">Jesyno&egrave;</option>
                                <option value="7">Enf&ograve;matisyen</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtsalireemp" class=" form-control-label">Sal&egrave; (an goud)</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtsalireemp" name="salaire" value="<?=$ligne[12];?>"  placeholder="Ex: 5000" class="form-control">
                            <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                        </div>
                    </div>  <br>
                    <a href="../"><button type="button" class="btn btn-secondary btn-small" >Anile anrejitreman</button> </a>
                    <!-- <button type="button" name="submit" class="btn btn-primary btn-small" id="btnajouteremploye">Ajoute</button> -->
                      <input type="submit" name="submit" class="btn btn-primary btn-small" id="btnupdateemploye" value="Modifye"/>
    </div>
