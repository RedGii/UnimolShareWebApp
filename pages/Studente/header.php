<html lang ="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UnimolShare</title>
    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/c.css" rel="stylesheet">
</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
    <a class="navbar-brand" href="index.php">UnimolShare</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                <a class="nav-link" href="index.php?action=home">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profilo">
          <a class="nav-link" href="index.php?action=profilo">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Profilo</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Libri consigliati">
          <a class="nav-link"  href="index.php?action=libri_consigliati">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Libri Consigliati</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Documenti">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Documenti</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
                <?php echo (isset($action) && $action == 'documentoStudente') ? "<li class=\"active\">" : "<li class=\"\">"; ?>
              <a href="index.php?action=documentoStudente">Aggiungi documento</a>
            </li>
            <li>
              <a href="documenti_caricati.php">Documenti caricati</a>
            </li>
            <li>
              <a href="../forgot-password.php">Lista documenti</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Annunci">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-paper-plane"></i>
            <span class="nav-link-text">Annunci</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
                <?php echo (isset($action) && $action == 'aggiungiAnnuncio') ? "<li class=\"active\">" : "<li class=\"\">"; ?>

                <a href="index.php?action=aggiungiAnnuncio">Aggiungi annuncio</a>
            </li>
            <li>
                <?php echo (isset($action) && $action == 'annunciiCaricati') ? "<li class=\"active\">" : "<li class=\"\">"; ?>

                <a href="index.php?action=annunciCaricati" id="btnAnnunciCaricati">Annunci caricati</a>
            </li>
            <li>
              <a href="#">Lista annunci</a>
            </li>
            </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Ricerca">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </li>
      </ul>
    </div>
  </nav>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->

  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="../js/login.js"></script>


  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('' +
          'fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>

</body>

</html>
