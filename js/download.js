
function Download(id) {

    $.ajax({
        url: "http://www.unimolshare.altervista.org/logic/UnimolShare/public/index.php/downloadDocumento",

        type: 'POST',

        data: {id:id},

        dataType: "json",

        success: function (data) {

            if(JSON.stringify(data.error)==='false') {
                var card = id;

  if(document.getElementById(card.toString()+"dw")){
     alert("link già caricato");
  }
  else{
      $('#' + card.toString() + '').append('<div id="'+ card.toString()+"dw"+'" >Clicca qui: ' +
          '<a href="' + data.link[0].id + '" target="_blank">' + ' ' + data.link[0].id + '</a></div>');

  }


            }

            if(data.error=="true"){
                alert("Errore rimozione");
            }


        }
    })

}