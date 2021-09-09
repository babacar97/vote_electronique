<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Flag_of_Senegal.svg/langfr-225px-Flag_of_Senegal.svg.png" height="30" alt="" loading="lazy" style="margin-top: -1px;" />
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <h2>SGV</h2>
          </a>
        </li>
      </ul>
      <!-- Left links -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/SGV/view/admin/listeVote.php">Vote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/SGV/view/candidat/ajoutCandidat.php">Candidat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Localité</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/SGV/view/electeur/ListeElecteur.php">Electeur</a>
          </li>

        </ul>
      </div>
      <div class="d-flex align-items-center">
        <!-- <button type="button" class="btn btn-link px-3 me-2">
          Login
        </button> -->
        <form method="post" action="../../controler/admin/controlConexionAdmin.php">
          <button type="submit" class="btn btn-danger me-3" name="deconect">
            DECONNECTION
          </button>
        </form>

      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->