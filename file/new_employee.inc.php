
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
              <?php echo $mesaj;
                  echo $sikse;
              ?>
            <div class="card-header">
                <strong>Ranpli tout chan yo</strong>
            </div>
            <div class="card-body card-block">

                <form action="?" enctype="multipart/form-data" method="post" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtcodeemp" class=" form-control-label">K&ograve;d anplwaye</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtcodeemp" placeholder="emp-02-323"  disabled="" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nomcompletemp" class=" form-control-label">Non konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtnomcompletemp" required value="<?php if(($mesaj)){ echo $_POST['nomcompletemp'];}?>" name="nomcompletemp" placeholder="Ex: Junior Jean Laurent" class="form-control">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtemailemp" class=" form-control-label">Imel</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="txtemailemp" name="emailemp" value="<?php if(($mesaj)){ echo $_POST['emailemp'];}?>"  required placeholder="Ex: juni@gmail.com" class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtphoneemp" class=" form-control-label">Telef&ograve;n</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtphoneemp" name="telephoneemp"  value="<?php if(($mesaj)){ echo $_POST['telephoneemp'];}?>" placeholder="Ex: 47293493" required class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtsexeemp" class=" form-control-label">S&egrave;ks</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtsexeemp" name="sexe" class="form-control">
                                <option value="Masculin">Mal</option>
                                <option value="Feminin">Fem&egrave;l</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtconditionmatrimonialeemp" class=" form-control-label">Kontidisyon M.</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtconditionmatrimonialeemp" name="conditionmat" class="form-control">
                              <?php foreach(conditionmatDao::getconditionmat() as $r):
                                echo "<option value='$r[0]'>$r[1]</option>"; endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtgroupesanguinemp" class=" form-control-label">Gwoup sangen</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtgroupesanguinemp" name="groupesanguin" class="form-control">
                              <?php foreach(groupesanguinDao::GetGroupsanguins() as $l):
                                echo "<option value='$l[0]'>$l[1]</option>"; endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtgroupesanguinemp" class=" form-control-label">Nivo etid</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtnivo" name="nivo" class="form-control">
                              <?php foreach(typeNiveauDao::GetNiveau() as $liy):
                                echo "<option value='$liy[0]'>$liy[1]</option>"; endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtvilleemp" class=" form-control-label">Kote rete</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtvilleemp" name="ville" class="form-control">
                              <?php foreach(VilleDao::GetVille() as $li):
                                echo "<option value='$li[0]'>$li[2]</option>"; endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtadresseemp" class=" form-control-label">adre&egrave;s</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtadresseemp"  name="adresse"  value="<?php if(($mesaj)){ echo $_POST['adresse'];}?>" placeholder="Ex: 117, route de dalles" required class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtdernierposteemp" class=" form-control-label">D&egrave;nye dj&ograve;b</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtdernierposteemp"  name="postancien"  value="<?php if(($mesaj)){ echo $_POST['postancien'];}?>" placeholder="Ex: kontab, Le bon berger" required class="form-control">
                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtposteemp" class=" form-control-label">P&ograve;s</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select id="txtposteemp" name="postactuel" class="form-control">
                              <?php foreach(posteDao::GetPoste() as $ro):
                                echo "<option value='$ro[0]'>$ro[1]</option>"; endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtsalireemp" class=" form-control-label">Sal&egrave; (an goud)</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="txtsalireemp" name="salaire"  value="<?php if(($mesaj)){ echo $_POST['salaire'];}?>" placeholder="Ex: 5000" required class="form-control">
                            <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                        </div>
                    </div>  <br>
                    <a href="../"><button type="button" class="btn btn-secondary btn-small" >Anile anrejitreman</button> </a>
                    <!-- <button type="button" class="btn btn-primary btn-small" id="btnajouteremploye">Ajoute</button> -->
                    <input type="submit"  name="btnadd" class="btn btn-primary btn-small" id="btnajouteremploye" value="Ajoute" />


    </div>
</div>
