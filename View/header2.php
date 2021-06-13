<!-- BARRA DE NAVEGACION -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="far fa-circle"></i>RDEN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="View/control2.php"><i class="fas fa-chart-pie"></i> Control</a>
        </li>
        <!-- cantidad de registros -->
        <!-- <li class="nav-item active">
          <a class="nav-link " href="#"><i class="fas fa-database"></i><?php echo " ".$n; ?></a>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0" method="post" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="txt-buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" name="btn-buscar"></i> Buscar</button>
      </form>
    </div>
  </nav>