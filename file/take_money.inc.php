 <div class="row" id="midle-new-ads">
    <div class="col-9">
        <p class="title-page">
            Retire lajan sou bous kwenpam <?php// echo transactionDao::ajoutertransaction($tran)?>
        </p>
        <?php
        if(isset($mesaj)){?>
            <div class="alert alert-danger  " role="alert">
                <?php echo $mesaj;?>
            </div>
        <?php  }
     ?>
       <?php
        if(isset($sikse)){?>
            <div class="alert alert-success  " role="alert">
                <?php echo $sikse;?>
            </div>
        <?php  }
     ?>
        <div class="text-pub" id="step-1-new-ads">
            Pou s&egrave;vi ak pati sila, f&ograve;k ou gen minimum 500 goud nan bous kwnepam ou. Pou tout sa ki gen rap&ograve; ak fason pou itilize espas sila, ou ka voye
            je nan <a href="http://business.kwenpam.com/privacy">t&egrave;m ak kondisyon nou yo</a>. Oubyen siw bezwen konnen k&ograve;man li fonksyone
            jis <a href="#ed" data-toggle="modal" data-target="#scrollmodal">klike la</a>. <br>

        </div>
        <div class="col col-md-12 bg-white">
            <div class="row form-group">
                <div class="col col-md-3">
                  <form action="" method="post">
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="<?=$row[0]?>" placeholder="5055" disabled="" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtkantitekobretre" name="txtkantitekobretre"  class=" form-control-label">Kantite retr&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobretre"  value="<?php if (isset($_POST['kantitekobretre'])){echo $_POST['kantitekobretre'];} ?>" name="kantitekobretre" placeholder="Ex: 100" class="form-control">
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtmoyentransaction" class=" form-control-label">Mwayen tranzaksyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtmoyentransaction" name="moyentranzaksyon" class="form-control">
                        <?php foreach(MmoyentransactionDao::affichermoyen() as $r):
                          echo "<option value='$r[0]' >$r[1]</option>"; endforeach;?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtnimewotranzaksyon" class=" form-control-label">Nimwo tranzaksyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtnimewotranzaksyon" maxlength="8" value="<?php if (isset($_POST['nimewotranzaksyon'])){echo $_POST['nimewotranzaksyon'];} ?>" name="nimewotranzaksyon" placeholder="Ex: 47734239" class="form-control">
                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                </div>
            </div>
            <!-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtpasswordemp" class=" form-control-label">Pin</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" name="password" value="<?php if (isset($_POST['password'])){echo $_POST['password'];} ?>" id="txtpasswordemp"  placeholder="Ex: Xsd_$23sd" class="form-control">
                    <small class="help-block form-text">Please enter your email</small>
                </div>
            </div> -->
            <a href="../"> <button type="button" class="btn btn-secondary btn-small" >Anile</button>  </a>
            <!-- <button type="button" name="submit" class="btn btn-primary btn-small" id="btnvaliderdemandetransaction">Valide</button> -->
            <input type="submit" name="submit" value ="Ajouter" class="btn btn-primary btn-small" id="btnvaliderdemandetransaction"/>
            </form>
            <br><br>
        </div>

    </div>
</div>
