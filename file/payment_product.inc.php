
<form class="row " id="midle-new-ads" action="" method="POST" > 
    <div class="col-lg-7 col-xs-7 col-md-12">  
        <h2>T&egrave;m ak kondisyon</h2> <br>
        <div class="col col-md-12 bg-white padding-3">
            Kwenpam pran tout mezi sekirite pou jere done ou yo. Ou lib pou ou verifye tout fason nou jere sa pandan wap aprann plis
            <a href="https://kwenpam.com/business/privacy/">politik konfidansyalite</a> nou yo. <br> 
        </div> <br>
        <?php
            if(isset($mesaj)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mesaj;?>
                </div>
            <?php }else if(isset($sikse)){?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $sikse;?>
                </div>
            <?php }
        ?>
        <p class="title-page  bg-white padding-3">
            <strong> ID k&ograve;mand:</strong> <a href="#"><?php echo $id_commande;?></a>  <br>
            <strong>Kategori :</strong> <?php echo $ligne[16];?> <br>
            <strong>presizyon :</strong> <?php echo $ligne[7];?> <br>
            <strong>Deskripsyon :</strong> <?php echo $ligne[8] ?> <br>
            <strong>Pri :</strong> <?php echo $ligne[5].' '.$mon; ?><br>
            <strong>Kalite :</strong> <?php if($ligne[10]==0){echo "N&egrave;f";}else{echo "Ize";} ?>
        </p>
        <div class="col col-md-12 bg-white"> <br>
            <p>
                <h4>Pa ki mwayen ou konte peye?</h4>
            </p>
            <div class="form-check">
                <div class="radio">
                    <label for="radio1" class="form-check-label">
                        <input type="radio" id="radio1" name="radios1" value="option1" class="form-check-input" checked>Moncash
                    </label>
                </div>
                <div class="radio">
                    <label for="radio2" class="form-check-label">
                        <input type="radio" id="radio2" name="radios1" value="option2" class="form-check-input" disabled>Bous kwenpam (<a href="https://kwenpam.com/business/legal/wallet">Aprann plis</a>)
                    </label>
                </div>
            </div>  <br>
            <p>
                <h4>&Egrave;ske ou vle yo livre ou li?</h4>
            </p>
            <div class="form-check">
                <div class="radio">
                    <label for="radio4" class="form-check-label ">
                        <input type="radio" id="radio4" name="radios" value="1" class="form-check-input" checked>Wi
                    </label>
                </div>
                <div class="radio">
                    <label for="radio3" class="form-check-label ">
                        <input type="radio" id="radio3" name="radios" value="2" class="form-check-input" >Non (Map pase pran l)
                    </label>
                </div>
            </div>   <br>
            <p> 
                <h4>Enf&ograve;masyon itil</h4>
            </p>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtnom" class=" form-control-label">Non konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtnom"  name="txtnomcomplet"  value="<?php if(($mesaj)){ echo $_POST['txtnomcomplet'];}?>" placeholder="EX : Junior Wesley"  class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtemail" class=" form-control-label">Imel</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="txtemail" name="txtemail"  value="<?php if(($mesaj)){ echo $_POST['txtemail'];}?>" placeholder="EX : nom@gmail.com"  class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txttelephone"  class=" form-control-label">Nimewo telef&ograve;n</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txttelephone" name="txttelephone"  value="<?php if(($mesaj)){ echo $_POST['txttelephone'];}?>" placeholder="EX: 47239232" maxlength="8" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtville" class=" form-control-label">Non vil</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtville" name="txtville" class="form-control" >
                      <?php foreach(VilleDao::GetVille() as $li):
                        echo "<option value='$li[0]'>$li[2]</option>"; endforeach;?>
                    </select>
                </div>
                <input type="hidden" id="nomvilleclient" name="nomvilleclient" value="Acul-du-Nord">
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtadresse" class=" form-control-label">Adr&egrave; konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtadresse" name="txtadresse"  value="<?php if(($mesaj)){ echo $_POST['txtadresse'];}?>" placeholder="117, Carrefour-feuille, route des dalles"   class="form-control" required>
                </div>
            </div> <br>
        </div>  <br>
        <div class="col col-md-12 bg-white"> <br>
            <h4>Kantite lajan ou gen pou peye</h4> <br>
            <?php
                 $fret=$chanje*0.05;
                 $frel=250;
                 $pritoal=$fret+$chanje+$frel; 
            ?>
            <strong>Pri pwodwi : </strong> <span id="pripwodwi"><?php echo $chanje;?></span> goud <br><br>
            <strong>Fr&egrave; tranzaksyon : </strong> <span id="fretranzak"><?php echo $fret;?></span> goud <br><br>
            <div id="divprilivrezon">
                 <strong>Fr&egrave; livrezon : </strong> <span id="prilivrezon"><?php echo $frel;?></span> goud <br> <br><br>
            </div>  
            <strong>Total : </strong> <span id="pritotal"><?php echo $pritoal;?></span> goud <br> <br>
            <input type="hidden" name="prixtotalachat" value="<?php echo $pritoal;?>" id="inputpritotal">
            <input type="hidden"  value="<?php echo $frel;?>" id="inputprilivrezon"> 
            <input type="hidden"  value="<?php echo $chanje+$fret;?>" id="inputpritotalsanlivrezon">  
            <input type="hidden"  value="<?php echo $pritoal;?>" id="inputpritotaaveklivrezon">  
        </div> <br>
        <div class="alert-danger padding-3">
            NB: Ou pa kakab tounen apr&egrave; ou fin peye. Si tout bagay byen pase wap resevwa yon imel ki diw k&ograve;mand ou an pase e li an atant. 
            Otomatikman vand&egrave; a konfime sa, nap notifye ou sa, swa pa yon sms oubyen yon imel.
         </div> 
      <div class="padding-3">
        <label for="checkbox1" class="form-check-label">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" onclick="enable_button()" class="form-check-input">
            Mwen byen li e konprann tout sa mwen sot f&egrave; la yo. Byen verifye enf&ograve;masyon yo avan menm ou peye, <a href="https://kwenpam.com/business/legal/terms">t&egrave;m ak kondisyon</a> aplikab.
        </label> <br> <br>
        <a href="https://kwenpam.com/annonce/details.php"  class="btn btn-secondary btn-small">Anile </a>
        <input type="submit" class="btn btn-primary btn-small" value="Peye kounya" id="btnvalide" disabled name="btnvalide"/>
    </div>
</form>
