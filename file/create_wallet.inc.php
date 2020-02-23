<div class="row" id="midle-new-ads">
    <div class="col-12">
        <p class="title-page">
            Kreye bous kwenpam
        </p>
        <div class="text-pub" id="step-1-new-wallet">
            Bous kwenpam p&egrave;m&egrave;t ou <strong>resevwa lajan, f&egrave; tranzaksyon, peye yon pwodwi/s&egrave;vis</strong> . Av&egrave;k bous sila, wap kapab w&egrave; tout tranzaksyon ki f&egrave;t yo depi l&egrave;
            ou kreye bous lan jiskaske li bloke oubyen dezaktive. Pou kreye bous lan, f&ograve;k ou asire ke ou gen yon nimewo telef&ograve;n valid sou kont ou, yon adr&egrave;s ak non konpl&egrave; ou. Sinon, nou pap ka aktive bous lan
            pou ou, menm ke ou fin kreye li. <br> Siw bezwen konn tout sa ki gen pou w&egrave; ak tranzaksyon, k&ograve;man pou f&egrave; retr&egrave; lajan, k&ograve;man kwenpam biznis jere bous ou pou ou, k&ograve;man pwosesis p&egrave;man yo
            f&egrave;t, silvoupl&egrave;, li <a href="http://business.kwenpam.com/privacy">t&egrave;m ak kondisyon</a> ki la pou sa.
            Si tout fwa ou bezwen &egrave;d <a href="#ed" data-toggle="modal" data-target="#scrollmodal" class="btnhelp" id="help_wallet">klike la</a>. <br> <br>
            <button type="button" class="btn btn-secondary btn-small" onclick="window.history.back();">Anile</button>
            <button type="button" class="btn btn-primary btn-small" id="continuewallet">Kontinye</button>
        </div>
        <div class="text-pub padding-3" id="step-2-new-wallet">
            <div>
                Gen <strong> twa (3) tip bous</strong> kwenpam. Chak gen limit yo ak avantaj yo. Tout tip yo, wap kapab f&egrave; tout tranzaksyon ou vle, peye, f&egrave; retr&egrave;, etc. <br>
                Premye an ki se <strong>bwonz</strong>, ka f&egrave; tout sa nou sot site yo la, men pi plis k&ograve;b ou ka resevwa sou li se vensenk mil (25.000) goud. Sa vle di depi total lajan ou resevwa sou li rive nan nivo sa, okenn moun pap ka
                ni transfere lajan ba ou, ni peye okenn pwodwi/s&egrave;vis wap vann sou kwenpam biznis. Dezy&egrave;m lan se <strong>ajan</strong>, ki se menm ak bwonz lan, men nivo lajan li ka rive se sanvennsenk mil (125.000) goud, ou pap kapab rive pi plis av&egrave;k li. D&egrave;nye an ki se <strong>l&ograve;</strong> a,
                diferans ak l&ograve;t yo, wap ka rive jiska senksan mil (500.000) goud sou bous ou. <br> <br>
                <strong>T&egrave;m ak kondisyon</strong> <br> <br>
                Pou chak tip bous sa yo, gen yon ansanm <a href="http://business.kwenpam.com/privacy">kondisyon</a> pou w reyini e aksepte. Men yon lis bagay ou dwe konnen.
                Toudab&ograve;, depi ou vle retire k&ograve;b sou bous kwenpam biznis ou an, premyeman f&ograve;k ou gen pou pi piti mil (1000) goud sou li. Anplis, f&ograve;k ou di pa ki mwayen ou vle resevwa lajan sila,
                &egrave;ske se sou yon nimewo <strong>Moncash</strong>, kat debi/kredi, kont yon bank, etc. Sou chak retr&egrave; wap f&egrave;, sa pral depann de tip bous ou te chwazi an, nap pran yon % sou manman lajan an. <br>
                <ul class="padding-3">
                    <li> <strong>Bwonz</strong> : 1%   </li>
                    <li> <strong>Ajan</strong> : 3%   </li>
                    <li> <strong>L&ograve;</strong> : 5%   </li>
                </ul>
                <strong>Chwazi tip bous</strong>
            </div>
            <div class="col col-md-9 padding-3">
                <div class="radio ">
                    <label for="radio1" class="form-check-label ">
                        <input type="radio" id="radio1" name="radios" value="1" class="form-check-input rd-wallet" checked>Bwonz
                    </label>
                </div>
                <div class="radio">
                    <label for="radio2" class="form-check-label ">
                        <input type="radio" id="radio2" name="radios" value="2" class="form-check-input rd-wallet">Ajan
                    </label>
                </div>
                <div class="radio">
                    <label for="radio3" class="form-check-label ">
                        <input type="radio" id="radio3" name="radios" value="3" class="form-check-input rd-wallet">L&ograve;
                    </label>
                 </div>
                 <input type="hidden" id="val-wallet-option" value="1">
            </div>
             <label for="chkverifterm" class="form-check-label padding-3">
                <input type="checkbox" id="chkverifterm" name="checkbox1"  class="form-check-input">
                Mwen byen li e konprann tout sa mwen sot f&egrave; la yo. Si tout fwa ou ta renmen anile sa ou sot f&egrave; a.
            </label> <br>
            <button type="button" class="btn btn-secondary btn-small" id="backwallet" >Back</button>
            <button type="button" class="btn btn-primary btn-small" id="btncreatewallet" data-toggle="modal">Kreye bous</button>
        </div>
        <?php
            //aide wallet
            include 'help_all.inc.php';
        ?>
    </div>
</div>
