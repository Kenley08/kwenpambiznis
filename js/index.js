$(document).ready(function () {
    /*
        ensemble de script lie dirirectement a l'ajout d'une publicite, soit pour booster une annonce
        ou creer une nouvelle piblicite
    */
    $(".callads").click(function (e) { 
       e.preventDefault();
       id_choice_ads=this.id;
       $(".text-pub").hide();
       if(id_choice_ads==="btncallboost"){
           $("#step-2-new-ads").show();
           $("#page-new-ads").text(" / chwazi yon anons");
       }else if(id==="btncallcreateads"){
           $("#step-3-new-ads").show();
       } 
   });
   

   $("#back-opacity").click(function (e) { 
       e.preventDefault();  
       $(this).hide(); 
       uploadWin.close();
   });

    //quand on clique sur une annonce choisie
    $(".choiceads").click(function(e){
        e.preventDefault();
        id_choice_a=this.id;
        $("#page-new-ads").text(" / ajoute bidje");
        $(".text-pub").hide();
        $("#step-3-new-ads").show();
    });

    //quand on fait un back dans l'ajout des pub
    $(".back-ads").click(function (e) { 
        e.preventDefault();
        id_back=this.id;
        $(".text-pub").hide();
        if(id_back==="back02"){
            $("#step-2-new-ads").show();
            $("#page-new-ads").text(" / chwazi yon anons");
        }else if(id_back==="back01"){
            $("#step-1-new-ads").show();
            $("#page-new-ads").text("");
        }else if(id_back==="cancel-ads"){
            window.location.href="../";
        }
    });

     //quand on fait un back dans la creation d'une bourse
     $("#backwallet").click(function (e) { 
        e.preventDefault();
        $("#step-1-new-wallet").show();
        $("#step-2-new-wallet").hide();
    }); 

    //quand on clique sur une aide
    $(".btnhelp").click(function (e) { 
        e.preventDefault();
        id=this.id; alert(id);
        if(id==="help_wallet"){ 
            $("#title-help").text("bous");
            $("#text-help").load("../../file/"+id+".inc.php");
        }
    });

    //quand on continue le processus de creation d'une bourse
    $("#continuewallet").click(function (e) { 
        e.preventDefault();
        $("#step-1-new-wallet").hide();
        $("#step-2-new-wallet").show();
    });

    //quand on valide une publicite
    $("#btnvalideads").click(function (e) { 
        e.preventDefault();
        //on passe au processus de paiement
        // mapopup = window.open("about:blank", "mapop", "height=500,width=500,resizable=1"); 
        window.open("http://localhost/kwenpam/cpanel/payments?val="+100+"&type=business","Peman ak Moncash","height=500,width=500,resizable=0,menubar=0,location=0,alwaysRaised=0,modal=1");
    });

    $(".rd-wallet").click(function () {  
        $("#val-wallet-option").val($(this).val());  
    });

    //quand on cree une bourse 
    $("#btncreatewallet").click(function (e) { 
        e.preventDefault();
        $("#back-opacity").show();
        //liste des parametre a prendre en compte
        //verication sur quelle type de bourse l'utilisateur a choisi 
        tip_bous= $("#val-wallet-option").val();  
        if($("#chkverifterm").prop("checked") == true){  
            url=""+"http://localhost/kwenpambiznis/wallet/create/activation?tip_bous="+tip_bous;
            openWindow(url);
        }else{
            $("#btncancelmodal").hide();
            $("#staticModal").removeClass('fade');
            $("#staticModal").show();
            $("#staticModal p").text("Atansyon, fok ou koche kaz ki di ou li e konprann tem ak kondisyon nou yo pou ou ka kontinye.");
        } 
        // mapopup = window.open("about:blank", "mapop", "height=500,width=500,resizable=1");  
    });

    //cancel modal
    $("#btncancelmodal,#btnokmodal").click(function (e) { 
        e.preventDefault();
        $("#staticModal").fadeOut(100);
        $("#back-opacity").hide();
    });

    //fonction pour ouvrir une fenetre enfant
    function openWindow(url){
        var top = window.screen.height - 500;
        top = top > 0 ? top/2 : 0; 
        var left = window.screen.width - 500;
            left = left > 0 ? left/2 : 0;
            var uploadWin= window.open(url,"Kreyasyon bous kwenpam biznis","height=500,width=500,resizable=0,menubar=0,location=0,alwaysRaised=0,modal=1" + ",top=" + top + ",left=" + left); 
            uploadWin.moveTo(left, top);
            uploadWin.focus();
    }
});