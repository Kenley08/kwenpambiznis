<form class="row" id="midle-new-ads" action="" method="POST">
    <div class="col-9">
      <?php
        echo $sikse;
        echo $mesaj;
      ?>
        <p class="title-page">
            Pwodwi <a href="../detail/?id=1">23232323</a> /  Param&egrave;t
        </p>
        <div class="col col-md-12 bg-white padding-3" >
            Rantre lis enf&ograve;masyon ou panse ki neses&egrave; sou pwodwi sila. Si toutfwa ou dak&ograve; yo peye w ak moncash, klike sou aksepte peye ak
            moncash. Si ou akespte jere livrezon yo tou, klike sou aksepte, yon lis ap dewoule e ranpli enf&ograve;masyon ki kons&egrave;ne pwodwi sila. Ou ka voye je nan <a href="http://business.kwenpam.com/privacy">politik konfidansyalite</a> nou genyen pou asire ou.
        </div> <br>
        <div class="col col-md-12">
            <p>
                &Egrave;ske ou dak&ograve; pou kliyan yo peye ou sou sit lan pou pwodwi sila?
            </p>
            <div class="form-check">
                <div class="radio">
                    <label for="radio1" class="form-check-label">
                        <input type="radio" id="radio1" name="radio" value="option1" class="form-check-input" checked>Wi
                    </label>
                </div>
                <div class="radio">
                    <label for="radio2" class="form-check-label">
                        <input type="radio" id="radio2" name="radio" value="option2" class="form-check-input">Non
                    </label>
                </div>
            </div>  <br>
            <p>
                &Egrave;ske ou aksepte f&egrave; livrezon pou pwodwi sila?
            </p>
            <div class="form-check">
                <div class="radio">
                    <label for="radio4" class="form-check-label ">
                        <input type="radio" id="radio4" name="radios" value="option3" class="form-check-input" checked>Wi (map jere livrezon an)
                    </label>
                </div>
                <div class="radio">
                    <label for="radio3" class="form-check-label ">
                        <input type="radio" id="radio3" name="radios" value="option4" onclick="visible_button()" class="form-check-input" >Wi (kwenpam biznis ap jere sa)
                    </label>
                </div>
                <div class="radio">
                    <label for="radio5" class="form-check-label ">
                        <input type="radio" id="radio5" name="radios" value="option5" class="form-check-input">Non
                    </label>
                </div>
            </div>
        </div> <br>
        <div class="text-pub" id="step-1-new-ads">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtnblivre" class=" form-control-label">Kantite minimum pou ka livre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="number" name="txtnblivre"  placeholder="Ex: 2" class="form-control" min='1' required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtdescriptionliv" class=" form-control-label">Deskripsyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="text" rows="5" name="txtdescriptionliv" required placeholder="Ex: Nou pa responsab si tout fwa le pwodwi an fin livre, selon garanti li genyen, li vin kraze." class="form-control"></textarea>
                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                </div>
            </div>
        </div> <br>
        <a href="../"  class="btn btn-secondary btn-small">Anile </a>
        <input type="submit" class="btn btn-primary btn-small" value="Kontinye" name="btncontinuer"/>
        <input type="submit" class="btn btn-primary btn-small" value="Valide" id="btnvalid"  name="btnvalide"/>
    </div>
</form>
