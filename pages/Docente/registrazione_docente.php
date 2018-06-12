<?php
session_start();
if(!empty($_SESSION['utente']['tipo'])){
if (($_SESSION['utente']['tipo'])== "studente") {

header("location: ../login.php");
}
if (($_SESSION['utente']['tipo'])== "docente") {

header("location: index_doc.php");
}
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UnimolShare - Registrazione Docente</title>
    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/c.css" rel="stylesheet">
</head>

<body class="bg-dark" style="padding-top: unset">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registra docente</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="InputNome">Nome*</label>
                            <input class="form-control" id="InputNome" type="text" aria-describedby="nameHelp" placeholder="Inserisci nome">
                        </div>
                        <div class="col-md-6">
                            <label for="InputCognome">Cognome*</label>
                            <input class="form-control" id="InputCognome" type="text" aria-describedby="nameHelp" placeholder="Inserisci cognome">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="InputEmail">Indirizzo email*</label>
                            <input class="form-control" id="InputEmail" type="email" aria-describedby="emailHelp" placeholder="Inserisci email">
                        </div>
                        <div class="col-md-6">
                            <label for="InputMatricola">Matricola*</label>
                            <input class="form-control" id="InputMatricola" type="text" aria-describedby="matricolaHelp" placeholder="Inserisci matricola">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="InputPassword">Password*</label>
                            <input class="form-control" id="InputPassword" type="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="ConfirmPassword">Conferma password*</label>
                            <input class="form-control" id="ConfirmPassword" type="password" placeholder="Conferma password">
                        </div>
                    </div>
                </div>
            </form>
            <form method="POST" id="form">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6" id="cdls">
                            <label id="corsi_di_laurea"> cdl*</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label style="color: red">Campi obbligatori*</label>

                        </div>

                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-block" id="btnregisterdoc">Registrati come docente</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="../login.php">Login</a>
                <a class="d-block small" href="../password_dimenticata.php">Password dimenticata?</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../js/Docente/cdl_docente.js"></script>
<script src="../../js/Docente/registrazione_docente.js"></script>
<!--script src="../../js/Docente/testreg.js"></script-->
</body>

</html>
