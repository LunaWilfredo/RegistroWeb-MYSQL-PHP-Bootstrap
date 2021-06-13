<?php 
  error_reporting(0);
  // conexion a BD para busqueda
   require_once '../conexion/conexion.php';
  //$cn = mysqli_connect('localhost','root','','registroweb');
  require '../consultas/control_cantidad.php';

  $resultados = mysqli_query($cn,$sql);
  $n = mysqli_num_rows($resultados);
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- icono de pagina -->
    <link rel="icon" type="image/png" sizes="32x32" href="/Imagenes/cover.jpg">
    <!-- pagina de iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- css libre -->
    <link rel="stylesheet" href="../CSS/estilos2.css">
    <title>Orden</title>
  </head>
  <body>
    <header>
      <?php
      // <!-- barra de navegacion -->
      include_once '../View/header2.php';
      ?>
    </header>

    <div class="titulo">..</div>

    <!-- FORMULARIO DE REGISTRO  -->
<form action="" method="POST">
    <div class="container">
        <div class="cabezal">ESTADO</div>
        <!-- Pendiente -->
        <label for="">Pendiente</label>
        <div class="progress">
           <div class="progress-bar bg-danger" role="progressbar" style="<?php echo "width:$conteo_est_pen%";?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo "$conteo_est_pen%";?></div>
        </div>  
        <!-- Habilitado -->
        <label for="">Habilitado</label>
          <div class="progress">
             <div class="progress-bar bg-success" role="progressbar" style="<?php echo "width:$conteo_est_hab%";?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo "$conteo_est_hab%";?></div>
        </div> 
    </div>
    
    <div class="titulo">...</div>

    <div class="container">
        <div class="cabezal">Turno</div>
        <!-- Pendiente -->
        <label for="">Tarde</label>
        <div class="progress">
           <div class="progress-bar bg-danger" role="progressbar" style="<?php echo "width:$conteo_turno_t%";?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo "$conteo_turno_t%";?></div>
        </div>  
        <!-- Habilitado -->
        <label for="">Mañana</label>
          <div class="progress">
             <div class="progress-bar bg-warning" role="progressbar" style="<?php echo "width:$conteo_turno_m%";?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo "$conteo_turno_m%";?></div>
        </div> 
    </div>

    <div class="titulo">...</div>

    <div class="container">
        <div class="row">
            <!-- cuadro 1 -->
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Total de Supervisores </h5>
                  <p class="card-text">Se tiene un total de <?php echo $conteo_sup;?> de supervisores registrados</p>
                </div>
              </div>
            </div>
            <!-- cuadro 2 -->
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Total de Grupos</h5>
                  <p class="card-text">Se tiene un total de <?php echo $conteo_grup;?> grupos registrados</p>
                </div>
              </div>
            </div>
            <!-- cuadro 3 -->
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Total de Asesores</h5>
                    <p class="card-text">Se tiene un total de <?php echo $conteo_g;?> de asesores registrados</p>
                  </div>
                </div>
              </div>
            <!-- cuadro 4 -->
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Total de IP's</h5>
                    <p class="card-text">Se tiene un total de <?php echo $conteo_ip;?> IP's registradas</p>
                  </div>
                </div>
              </div>
          </div>
    </div>

    <div class="titulo">...</div>

    <div class="container">
        <table class="table table-sm text-center">
            <thead>
              <tr>
                <th scope="col">IP</th>
                <th scope="col">CANTIDAD REGISTROS</th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td>10.201.0.0</td>
                <td class="table-success"><?php echo $conteo_ip_1 ;?></td>
              </tr>
              <tr>
                <td>10.201.0.1</td>
                <td class="table-success"><?php echo $conteo_ip_2 ;?></td>
              </tr>
              <tr>
                <td>10.201.0.2</td>
                <td class="table-success"><?php echo $conteo_ip_3 ;?></td>
              </tr>
            </tbody>
          </table>
    </div>
  
</form>

<!-- PIE DE PAGINA -->
<?php include_once '../View/footer2.html'; ?>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  </body>
</html>