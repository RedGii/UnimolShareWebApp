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
    <title>UnimolShare - I tuoi documenti</title>
    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/c.css" rel="stylesheet">
</head>

<div class="content-wrapper" id="card_documenti_caricati" style="background: unset ;padding-left:2%; padding-right: 2%">
</div>
<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->

<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../../js/download.js"></script>
<script src="../../js/rimuovi_documento.js"></script>

<script src="../../js/visualizza_documenti_caricati.js"></script>
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>


</html>


