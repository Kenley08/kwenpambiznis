<div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">Tout pwopriyete</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
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
            <a href='http://kwenpam.com/annonce/deposer' class="au-btn au-btn-icon au-btn--blue au-btn--small">
                <i class="zmdi zmdi-plus"></i>Ajoute nouvo pwodwi</a>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Export</option>
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
                        <th>Non</th>
                        <th>Kategori</th>
                        <th>Deskripsyon</th>
                        <th>Pri</th>
                        <th>Kantite</th>
                        <th></th>
                     
                    </tr>
                </thead>
                <tbody>
                  <?php foreach(produitDao::getProduitsBoutique($iduti,$idbou) as $row):
                        if($row[6]==1){$mon="HTG";}else{$mon="$ US";}
                    ?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td><?php  echo $row[2] ?></td>
                        <td ><?php echo substr($row[3],0,25).'...'; ?></td>
                        <td><?php echo $row[4].' '.$mon; ?></td>
                        <td ><?php echo $row[7] ?></td>
                       
                        <td> <a href="../../product/detail/?productid=<?=$row[0]?>&etat=<?=$row[5]?>" class="btn btn-secondary">Modifye</a>  </td>
                    
                    </tr>
                      <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
