<form class="row" id="midle-new-ads" action="" method="POST">

    <div class="col-9">
      <?php
          echo $sikse;
          echo $mesaj;
      ?>
        <p class="title-page">
             Pwodwi <a href="../detail/?id=1">23232323</a> / Detay
        </p>
        <div class="col col-md-12 bg-white padding-3" >
            Pa neglije founi bon jan enf&ograve;masyon sou modifikasyon ou vle pote sou pwodwi sila.
        </div> <br>
        <div class="col col-md-12 bg-white padding-3" >
            <table id="tab_pwodwi">
                <tr>
                    <td>
                        <img src="../../images/bg-title-01.jpg" class="img_pwodwi">
                    </td>
                    <td>
                        <img src="../../images/bg-title-01.jpg" class="img_pwodwi">
                    </td>
                    <td>
                        <img src="../../images/bg-title-01.jpg" class="img_pwodwi">
                    </td>
                </tr>
                <tr>
                    <td >
                         <a href="photo"  class="btn btn-primary btn-small">W&egrave; plis </a>
                    </td>
                </tr>
            </table>
        </div> <br>

                <?php
                if(isset($_GET['productid'])){
                  $id=$_GET['productid'];
                    $ligne=produitDao::GetProduit($id);
                }


                ?>

        <div class="text-pub" id="step-1-new-ads">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtkategori" class=" form-control-label">Kategori</label>
                </div>

                <div class="col-12 col-md-9">
                    <select id="txtkategori" name="txtkategori" class="form-control">

                      <?php

                      foreach(categorieDao::GetAllCategorie() as $r):
                        if($r[0]==$ligne[2]){
                          echo "<option selected='selected' value='$r[0]'>$r[1]</option>";
                         }
                         else{
                             echo "<option value='$r[0]'>$r[1]</option>";
                         }
                          endforeach;?>

                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtpresizyon" class=" form-control-label">Presizyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtpresizyon" id="txtpresizyon" value="<?php if($mesaj){echo $_POST['txtpresizyon'];}else{ echo $ligne[7];}?>" placeholder="Ex: iphone 7S" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtpri" class=" form-control-label">pri pwodwi a</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtpri" id="txtpri" value="<?php if($mesaj){echo $_POST['txtpri'];}else{ echo $ligne[5];}?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtlajan" class=" form-control-label">Lajan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtlajan" name="txtlajan" class="form-control">
                      <?php
                            if($ligne[3]==1){
                              echo "<option selected='selected' value='1'>Goud</option>";
                              echo "<option value='2'>Dola ameriken</option>";
                             }
                             else{
                                echo "<option  value='1'>Goud</option>";
                                 echo "<option selected='selected' value='2'>Dola ameriken</option>";
                             }

                              ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtkalite" class=" form-control-label">Kalite</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtkalite" name="txtkalite" class="form-control">
                      <?php
                            if($ligne[9]==0){
                              echo "<option selected='selected' value='0'>N&egrave;f</option>";
                              echo "<option value='1'>Ize</option>";
                             }
                             else{
                                echo "<option value='0'>N&egrave;f</option>";
                                 echo "<option  selected='selected' value='1'>Ize</option>";
                             }

                              ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtnegosyab" class=" form-control-label">Negosyab</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtnegosyab" name="txtnegosyab" class="form-control">
                      <?php
                      if($ligne[10]==0){
                        echo "<option selected='selected' value='0'>Wi</option>";
                        echo "<option value='1'>Non</option>";
                       }
                       else{
                          echo "<option value='0'>Wi</option>";
                           echo "<option  selected='selected' value='1'>Non</option>";
                       }

                      ?>

                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtdeskripsyon" class=" form-control-label">Deskripsyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea  rows="5" id="txtdeskripsyon"  name="txtdeskripsyon"  required placeholder="Ex: Bel valize, bel manch" class="form-control"> <?php if($mesaj){echo $_POST['txtdeskripsyon'];}else{ echo $ligne[8];}?></textarea>
                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtestok" class=" form-control-label">Kantite disponib</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtestok" id="txtestok" value="<?php if($mesaj){echo $_POST['txtestok'];}else{ echo $ligne[6];}?>" placeholder="Ex: 4" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
        </div>  <br>
        <a href="../"  class="btn btn-secondary btn-small">Tounen </a>
        <input type="submit" class="btn btn-primary btn-small" value="Modifye" name="btnmodifye"/>
        <a href="../setting?productid=<?php echo $_SESSION['productid'];?>" class="btn btn-primary">Param&egrave;t</a>
    </div>
</form>
