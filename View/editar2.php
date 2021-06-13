<!doctype html>
<html lang="en">
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
      $idA=$_GET['id'];
      error_reporting(0);
      // conexion
      require_once '../conexion/conexion.php';
      // $cn = mysqli_connect('localhost','root','','registroweb');
      // <!-- barra de navegacion -->
      include_once '../View/header2.php';
      // consultas
      $sql = "SELECT * FROM DATOS D INNER JOIN ESTADOS E ON D.FK_ID_ESTADO = E.ID_ESTADO INNER JOIN TURNOS T ON T.ID_TURNO = D.FK_ID_TURNO WHERE D.id_dato = '$idA'";

      $resultados = mysqli_query($cn,$sql);
      ?>
    </header>

    <div class="titulo">..</div>

    <!-- FORMULARIO DE EDITAR  -->
    <form action="../consultas/modificar.php" method="POST">
    <?php 
        // $idM =$_POST['txt-id'];
        
        while($row= mysqli_fetch_array($resultados)) :
          ?>
          <div class="container">
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="text-id">ID</label>
                    <input type="text" class="form-control" name="txt-id" value="<?php echo $row['id_dato'] ?>" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-super">Supervisor</label>
                    <input type="text" class="form-control"  name="txt-super" value="<?php echo $row['nombre_sup_dato']; ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="txt-ip">IP</label>
                    <input type="text" class="form-control"  name="txt-ip" value="<?php echo $row['nombre_ip_dato']; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-dni">DNI</label>
                    <input type="text" class="form-control" name="txt-dni" value="<?php echo $row['dni_dato']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txt-as">ASESOR</label>
                  <input type="text" class="form-control" name="txt-as" value="<?php echo $row['nombre_usuario_dato']; ?>">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="txt-tel">Telefono</label>
                    <input type="text" class="form-control" name="txt-tel" value="<?php echo $row['telefono_dato']; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-vpn">VPN</label>
                    <input type="text" class="form-control" name="txt-vpn" value="<?php echo $row['nombre_vpn_dato']; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-tec">Tecnico</label>
                    <input type="text" class="form-control" name="txt-tec" value="<?php echo $row['nombre_tecnico_dato']; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-grupo">Grupo</label>
                    <input type="text" class="form-control" name="txt-grupo" value="<?php echo $row['grupo_dato']; ?>" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-estado">Estado</label>
                    <input type="text" class="form-control" name="txt-estado" value="<?php echo $row['fk_id_estado']; ?>" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="txt-turno">Turno</label>
                    <input type="text" class="form-control" name="txt-turno" value="<?php echo $row['fk_id_turno']; ?>" readonly>
                  </div>
                </div>
        <?php endwhile; ?>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="../index.php" class="btn btn-danger">Cancelar</a>
          </div>
    </form>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  </body>
</html>