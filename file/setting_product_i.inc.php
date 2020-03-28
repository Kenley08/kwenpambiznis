<form class="row" id="midle-new-ads" action="?" method="POST">
    <div class="col-9">
      <?php
        echo $sikse;
        echo $mesaj;
      ?>
        <p class="title-page">
            Param&egrave;t pwodwi <a href="../../detail/?id=1">23232323</a> / livrezon
        </p>
        <div class="col col-md-12 bg-white padding-3" >
            Ajoute lis non vil ou aksepte f&egrave; livrezon yo. Epi nan chak vil, tou di konbyen k&ograve;b ou livre yo.
        </div> <br>
        <div class="text-pub" id="step-1-new-ads">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtville" class=" form-control-label">Non vil</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="txtville" name="txtville" class="form-control">
                        <?php foreach(VilleDao::GetVille() as $li):
                          echo "<option value='$li[0]'>$li[2]</option>"; endforeach;?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtprixviile" class=" form-control-label">Kantite lajan (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="number"  id="txtprixviile" name="txtprixville"  placeholder="Ex: 200" class="form-control" min='0' required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
        </div> <br>
        <div class="col col-md-12 " >
            <label for="checkbox1" class="form-check-label ">
                <input type="checkbox" id="checkbox1" name="checkbox1" onclick="enable_button()" value="option1"  class="form-check-input">
                Mwen byen li e konprann tout sa mwen sot f&egrave; la yo. Si tout fwa ou ta renmen anile sa ou sot f&egrave; a
                menm ke ou gentan valide li, depi okenn klik poko f&egrave; wap kapab.
            </label>
        </div>  <br>
        <a href="../"  class="btn btn-secondary btn-small">Tounen</a>
        <input type="submit" class="btn btn-primary btn-small" id="btnvalidate" value="Anrejistre"  disabled name="btnvalide"/>
    </div>
</form>
