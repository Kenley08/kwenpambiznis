 <form class="row" method="POST" >
        <?php
            if(isset($mesaj)){?>
                <div class="alert alert-danger col-lg-9 col-md-12" role="alert">
                    <?php echo $mesaj;?>
                </div>
            <?php }else if(isset($sikse)){?>
                <div class="alert alert-primary col-lg-9 col-md-12" role="alert">
                    <?php echo $sikse;?>
                </div>
            <?php }
        ?>
    <div class="col-lg-9 col-md-12 bg-white">
            <br> <h4>Enf&ograve;masyon pwodwi</h4> <br>
            <div class="row form-group">
                <div class="col col-md-3">
                  <?php
                  $ligne=categorieDao::GetCategorie($idan);
                  $liy=produitDao::GetProduit($idan);
                  $l=commandeDao::getCommandeById($idancom);
                  $li=villeDao::GetVilleById($l[6]);

                  ?>
                    <label   class=" form-control-label">Kategori</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" value="<?=$ligne[0];?>"  placeholder="Sandal" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Presizyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" value="<?=$liy[7]?>"  placeholder="Sandal kawouthcou" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Kantite</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="1" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Kalite</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   value="<?php if($liy[10]==0){
                      echo "Nef";
                    }else if ($liy[10]==1){
                      echo "dezyem men";
                    }
                    ?>"placeholder="Nef" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">deskripsyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea rows="5" placeholder="Sandal" disabled  class="form-control"><?php echo $liy[8];?> </textarea>
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Pri total</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" value="<?php echo $liy[5]?>"  placeholder="5000 goud" disabled  class="form-control">
                </div>
             </div>
            <br> <h4>Enf&ograve;masyon acht&egrave;</h4> <br>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Non konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"  value="<?=$l[3]?>" placeholder="Eustache Y." disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">Telef&ograve;n</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"  value="<?=$l[4]?>" placeholder="47239162" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">imel</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" value="<?=$l[5]?>"  placeholder="eus@gmail.com" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">vil</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" value="<?=$li[0];?>"  placeholder="delmas" disabled  class="form-control">
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label   class=" form-control-label">adr&egrave;s konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"  value="<?=$l[7]?>" placeholder="Kafoufey, jerel batay" disabled  class="form-control">
                </div>
             </div>
             <!--Enfomasyon sou moun kap vann pwodwi an, si se yon konpayi livrezon kap verifye enfomasyon yo lap wel, si se moun kap vann lan li pap afiche-->
             <?php
                if(isset($_GET['delivery'])){?>
                     <br> <h4>Enf&ograve;masyon vand&egrave; a</h4> <br>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label   class=" form-control-label">Non konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="Eustache Y." disabled  class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label   class=" form-control-label">Telef&ograve;n</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="47239162" disabled  class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label   class=" form-control-label">imel</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="eus@gmail.com" disabled  class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label   class=" form-control-label">vil</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="delmas" disabled  class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label   class=" form-control-label">adr&egrave;s konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="Kafoufey, jerel batay" disabled  class="form-control">
                        </div>
                    </div>
                <?php }
             ?>
             <a href="../"> <button type="button" class="btn btn-secondary btn-small" >Tounen</button>  </a>
        <?php
            if(!isset($_GET['delivery'])){?>
                <input type="submit" name="btnconfimer" value ="Konfime" class="btn btn-primary btn-small" />
            <?php }
        ?> <br> <br>

</form>
