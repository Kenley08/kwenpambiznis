
<?php
class maillist{

    public $id;
    public $mail_list;
    public $id_cat_ann;
    public $etat;
    public $date_ajout;
    public $date_update;


    public function __construct(){
      $this->id="";
      $this->mail_list="";
      $this->id_cat_ann="";
      $this->etat="";
      $this->date_ajout="";
      $this->date_update="";
    }
}

?>
