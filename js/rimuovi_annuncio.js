function RimuoviAnnuncio(id) {
    alert(id);
    $.ajax({
        url: "http://www.unimolshare.altervista.org/logic/UnimolShare/public/index.php/rimuoviAnnuncio/" + id,

        type: 'DELETE',

        data: '',

        dataType: "json",

        success: function (data) {

            if (data.error == "false") {
                alert("Rimozione avvenuta con successo");
            }
            if (data.error == "true") {
                alert("Errore rimozione");
            }

        }
    })

}