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
    <link rel="stylesheet" href="CSS/estilos2.css">
    <title>Orden</title>
  </head>
  <body>
    <header>
      <?php
      error_reporting(0);
      $buscard=$_POST['txt-buscar'];
      // conexion a BD para busqueda
       require_once 'conexion/conexion.php';
      //$cn = mysqli_connect('localhost','root','','registroweb');

      // if(isset($_POST['btn-buscar'])){
        if($buscard !=''){
          $sql = "SELECT * FROM DATOS D INNER JOIN ESTADOS E ON D.FK_ID_ESTADO = E.ID_ESTADO INNER JOIN TURNOS T ON T.ID_TURNO = D.FK_ID_TURNO WHERE d.telefono_dato = '$buscard' or d.nombre_ip_dato = '$buscard' or d.nombre_usuario_dato = '$buscard'";
        } else{
            $sql = "SELECT * FROM DATOS D INNER JOIN ESTADOS E ON D.FK_ID_ESTADO = E.ID_ESTADO INNER JOIN TURNOS T ON T.ID_TURNO = D.FK_ID_TURNO ORDER BY D.id_dato ASC";
        }
      // }else{
        // $sql = "SELECT * FROM DATOS D INNER JOIN ESTADOS E ON D.FK_ID_ESTADO = E.ID_ESTADO INNER JOIN TURNOS T ON T.ID_TURNO = D.FK_ID_TURNO ORDER BY D.id_dato ASC";
      // }

      $resultados = mysqli_query($cn,$sql);
      $n = mysqli_num_rows($resultados);
      // <!-- barra de navegacion -->
      include_once '../View/header2.php';
      ?>
    </header>

    <div class="titulo">..</div>

    <!-- FORMULARIO DE REGISTRO  -->
  <form action="" method="POST">
    <div class="container">
      <!-- Bonton de registro -->
      <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo</a>
    </div>

    <div class="titulo">..</div>

  </form>
  <!-- TABLA DE MUESTRA DE DATOS -->
  <div class="container">
    <table class="table text-center ">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Supervisor</th>
          <th scope="col">IP</th>
          <th scope="col">DNI</th>
          <th scope="col">ASESOR</th>
          <th scope="col">TELEFONO</th>
          <th scope="col">VPN</th>
          <th scope="col">TECNICO</th>
          <th scope="col">FECHA REGISTRO</th>
          <th scope="col">GRUPO</th>
          <th scope="col">ESTADO</th>
          <th scope="col">TURNO</th>
          <th scope="col">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i=0;
        while($row=mysqli_fetch_array($resultados)):
        $i++;
        ?>
        <tr>
          <th scope="row" value=""><?php echo $i; ?></th>
          <td><?php echo $row['nombre_sup_dato']; ?></td>
          <td><?php echo $row['nombre_ip_dato']; ?></td>
          <td><?php echo $row['dni_dato']; ?></td>
          <td><?php echo $row['nombre_usuario_dato']; ?></td>
          <td><?php echo $row['telefono_dato']; ?></td>
          <td><?php echo $row['nombre_vpn_dato']; ?></td>
          <td><?php echo $row['nombre_tecnico_dato']; ?></td>
          <td><?php echo $row['fecha_dato']; ?></td>
          <td><?php echo $row['grupo_dato']; ?></td>
          <td><?php echo $row['nombre_estado']; ?></td>
          <td><?php echo $row['nombre_turno']; ?></td>
          <td>
            <a href="View/editar2.php?id=<?php echo $row['id_dato']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
            <a href="consultas/delete.php?id=<?php echo $row['id_dato']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <!-- MODAL DE REGISTRO -->
  <form action="consultas/insertar.php" method="POST">
<div class="container">

  <div class="modal fade" tabindex="-1" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Nuevo Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <!--Nombre de supervisor  -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Supervisor</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar Supervisor" name="txt-super">
          </div>
            <!-- ip -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">IP</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar IP" name="txt-ip">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">DNI</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar DNI" name="txt-dni">
          </div>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Asesor</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar Asesor" name="txt-as">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Telefono</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar telefono" name="txt-tel">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">VPN</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar vpn" name="txt-vpn">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tecnico</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar Tecnico" name="txt-tec">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Grupo</span>
            </div>
            <input type="text" class="form-control" placeholder="Ingresar grupo" name="txt-grupo">
          </div>

          <!-- Estado y Turno -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Estado</label>
            </div>
            <select class="custom-select" id="" name="txt-estado" required>
              <option selected>Seleccionar</option>
              <option value="1">Habilitado</option>
              <option value="2">Pendiente</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Turno</label>
            </div>
            <select class="custom-select" id="" name="txt-turno" required>
              <option selected>Seleccionar</option>
              <option value="1">Mañana</option>
              <option value="2">Tarde</option>
            </select>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

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