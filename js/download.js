function Download(id) {

    $.ajax({
        url: "http://www.unimolshare.altervista.org/logic/UnimolShare/public/index.php/downloadDocumento",

        type: 'POST',

        data: {id: id},

        dataType: "json",

        success: function (data) {

            if (JSON.stringify(data.error) === 'false') {
                link = (data.link[0].id);

                    window.open(
                        link,
                        '_blank'
                    );

            
            } else {
                alert("Impossibile aprire il link");
            }
        },
        error: function (err) {

            alert("NO " + err.responseJSON.toString());

            console.log(err.responseJSON);


        }
    })
}