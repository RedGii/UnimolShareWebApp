document.getElementById("btnsegnalaprofilo").onclick= function () {


    var Nome = $("#InputNome").val();

    var Cognome =$("#InputCognome").val();

    var Motivo =$("#InputMotivo").val();



    var data = {

        Nome: Nome,

        Cognome: Cognome,

        Motivo: Motivo,
    };


    $.ajax({

        url: "http://www.unimolshare.altervista.org/logic/UnimolShare/public/index.php/segnalazione",

        type: 'POST',

        data: data,

        dataType:"json",

        success: function (data) {

            if(data.error==false){
                window.location.assign('index.php')
            }


            console.log(data);

        },


    });
}