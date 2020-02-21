<div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">Tip</option>
                    <option value="0">Depo</option>
                    <option value="1">Acha</option>
                    <option value="2">Retr&egrave;</option> 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Jodia</option>
                    <option value="">3 Jou</option>
                    <option value="">1 Jou</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <button class="au-btn-filter">
                <i class="zmdi zmdi-filter-list"></i>Filtre</button>
        </div>
        <div class="table-data__tool-right"> 
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Rap&ograve;</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
<div class="row m-t-30">  
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <!-- <th>Eta</th>  -->
                        <th>Tip</th>
                        <th>Telef&ograve;n</th>
                        <!-- <th>Non</th> -->
                        <th>Description</th>
                        <th>Adr&egrave;s</th> 
                        <th>Lajan</th>
                        <th>Dat tran.</th>
                        <!-- <th> </th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $id=$_SESSION['id_user'];
                         $req="select t.montant,t.description,u.username,a.telephone,concat(a.departement,', ',a.commune,', ',a.adresse),t.date_ajout from tbltransaction t inner join tbladresse a, tblprofil p,tblbourse b,tblutilisateur u where (u.id_uti=p.id_uti and p.id_adr=a.id_adr and b.id_uti=u.id_uti and b.id_bourse=t.id_bourse and b.id_uti='$id')";
                         $q=@mysqli_query($con, $req); 
                         while ($ligne=@mysqli_fetch_array($q)){
                             echo " <tr><td>Acha</td>
                             <td>$ligne[3]</td>
                             <td>$ligne[1]</td>
                             <td>$ligne[4]</td>
                             <td>$ligne[0]</td>
                             <td>$ligne[5]</td></tr>";
                         }
                    ?>
                    <!-- <tr>
                        <td>Atann</td>  
                        <td>Depo</td>
                        <td>+509 47349282</td>
                        <td>Liv pdf</td>
                        <td>Delmas 48, an fas djoumbala</td>
                        <td>90000</td>
                        <td>12/02/2020</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticModal">Konfime</button> 
                        </td>
                    </tr>  -->
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>