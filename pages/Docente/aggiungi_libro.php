<?php
if (($_SESSION['utente']['tipo'])!= "docente") {

    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UnimolShare - Aggiungi documento</title>
    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/c.css" rel="stylesheet">
</head>


<div class="content-wrapper bg-dark" style="padding-left:2%; padding-right: 2%">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Aggiungi un nuovo libro da consigliare</div>
        <div class="card-body">
            <form>
                <div class="form-group" style="display: none">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="InputMatricola"  style="word-break: break-word; white-space:  normal;" >Matricola</label>
                            <input class="form-control" id="InputMatricola" type="text" value="<?php echo $_SESSION['utente']['matr']?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <label for="Titolo"  style="word-break: break-word; white-space:  normal;" >Titolo*</label>
                            <input class="form-control" id="InputTitolo" type="text" aria-describedby="TitoloHelp" placeholder="Inserisci il titolo">
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <label for="CasaEditrice"  style="word-break: break-word; white-space:  normal;" >Casa Editrice*</label>
                            <input class="form-control" id="InputCasaEditrice" type="text" aria-describedby="CasaEditriceHelp" placeholder="Inserisci la casa editrice">
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="form-row">
                        <div class="col-md-6 mt-3">
                            <label for="Autore" style="word-break: break-word; white-space:  normal;" >Autore*</label>
                            <input class="form-control" id="InputAutore" type="text" aria-describedby="AutoreHelp" placeholder="Inserisci l'autore del libro">
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="form-row">
                        <div class="col-md-6 mt-3">
                            <label for="Edizione" style="word-break: break-word; white-space:  normal;" >Edizione*</label>
                            <input class="form-control" id="InputEdizione" type="text" aria-describedby="EdizioneHelp" placeholder="Inserisci l'edizione">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6 mt-3">
                            <label style="padding-top: 15px;word-break: break-word; white-space:  normal; padding-bottom: 15px;padding-right: 2%" for="lista_materie">Materia</label>
                            <select name="Materia" id="btnmaterie" style="height: 27px; border-top-width: 1px; margin-top: 14px;">
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class = "form-group">
            <div class = "form-row" style="margin-right: 25px; margin-left: 25px;">
                <a id="aggiungi_libro" style="word-break: break-word; white-space:  normal; color: white" class="btn btn-primary btn-block"">Aggiungi</a>
            </div>
        </div>
        <div class = "form-group">
            <div class = "for-row" style="margin-right: 25px; margin-left: 25px; color: #bd2130">
                <a style="word-break: break-word; white-space:  normal;">* campi obbligatori</a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../../js/Docente/carica_libro.js"></script>
<script src="../../js/Docente/materie_docente.js"></script>

</html>