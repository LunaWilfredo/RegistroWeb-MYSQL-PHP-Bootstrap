<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
        <?php
            $idA=$_GET['id']; 
            error_reporting(0);
            require_once '../conexion/conexion.php';
            //$cn = mysqli_connect('localhost','root','','registroweb');
            /*$sql= "SELECT * FROM datos";*/
    
            $sql = "SELECT * FROM DATOS D INNER JOIN ESTADOS E ON D.FK_ID_ESTADO = E.ID_ESTADO INNER JOIN TURNOS T ON T.ID_TURNO = D.FK_ID_TURNO WHERE D.id_dato = '$idA'";
            

            $resultados = mysqli_query($cn,$sql);

            $n = mysqli_num_rows($resultados);

            include '../View/header.php';

        ?>
        <!--<header>
            <div class="titulo"><i class="far fa-circle"></i>RDEN</div>
            <nav>
                <ul>
                    <li><i class="fas fa-database"></i> <?php echo $n; ?> </li>
                    <li><input type="text" name="txt-buscar" placeholder="Buscar"></li>
                    <li><button name="btn-buscar" class="btn"><i class="fas fa-search"></i></button></li>
                </ul>
            </nav>
        </header>-->
        
    </form>
    <!-----------------------------------------CUERPO----------------------------------------------->
    <form action="../consultas/modificar.php" method="POST">
        <div class="contenedor-cuerpo">
        <?php 
        $idM = $_POST['txt-id'];
        while($row= mysqli_fetch_array($resultados)) {
        ?>
            <!----------------------------------------REGISTRO DE DATOS----------------------------------------->
            <div class="contenedor-registro">
                <div class="titulo-registro"><i class="far fa-id-badge"></i> Registra los datos</div>
                <input type="text" name="txt-id" value="<?php echo $row['id_dato'] ?>" readonly >
                <label for="">Supervisor</label>
                <input type="text" name="txt-super" value="<?php echo $row['nombre_sup_dato'] ?>" >
                <label for="">IP</label>
                <input type="text" name="txt-ip" value="<?php echo $row['nombre_ip_dato']; ?>" >
                <label for="">DNI</label>
                <input type="text" name="txt-dni" value="<?php echo $row['dni_dato']; ?>" readonly>
                <label for="">Asesor</label>
                <input type="text" name="txt-as" value="<?php echo $row['nombre_usuario_dato']; ?>" >
                <label for="">Telefono</label>
                <input type="text" name="txt-tel" value="<?php echo $row['telefono_dato']; ?>" >
                <label for="">VPN</label>
                <input type="text" name="txt-vpn" value="<?php echo $row['nombre_vpn_dato']; ?>" >
                <label for="">Tecnico</label>
                <input type="text" name="txt-tec" value="<?php echo $row['nombre_tecnico_dato']; ?>" >
                <!-- <label for="">Fecha de Registro</label>--->
                <!--<input type="text" name="txt-fecha" value="" readonly>-->
                <label for="">Grupo</label>
                <input type="text" name="txt-grupo" value="<?php echo $row['grupo_dato']; ?>" >
                
                <label for="">Estado</label>
                <!--<select name="txt-estado" id="" required> 
                    <option value="">Seleccionar</option>
                    <option value="1">Habilitado</option>
                    <option value="2">Pendiente</option>
                </select>-->
                <input type="text" name="txt-estado" value="<?php echo $row['fk_id_estado']; ?>" readonly>

                <label for="">Turno</label>
                <!--<select name="txt-turno" id="" required>
                    <option value="">Seleccionar</option>
                    <option value="1">Mañana</option>
                    <option value="2">Tarde</option>
                </select>-->
                <input type="text" name="txt-turno" value="<?php echo $row['fk_id_turno']; ?>" readonly>
                <!-------BOTON REGISTRAR------>
                <a href="../consultas/modificar.php?id='<?php echo $row['id_dato'] ?>'"><button name="btn-registrar" class="btn-form"><i class="fas fa-save"></i></button></a>
                <a href="../index.php"><button name="btn-cancelar" class="btn-form"><i class="far fa-window-close"></i></button></a>
            <?php // } ?>
            </div>
    </form>
            <!---------------------------------------MOSTRAR DATOS------------------------------------>
            <div class="contenedor-mostrar">
                <table class="tabla-datos">
                    <tr>
                        <th>ID</th>
                        <th>SUPERVISOR</th>
                        <th>IP</th>
                        <th>DNI</th>
                        <th>ASESOR</th>
                        <th>TELEFONO</th>
                        <th>VPN</th>
                        <th>TECNICO</th>
                        <th>FECHA REGISTRO</th>
                        <th>GRUPO</th>
                        <th>ESTADO</th>
                        <th>TURNO</th>
                    </tr>
    <?php 
    $idM=$_GET['id']; 
       // while($row= mysqli_fetch_array($resultados)) {
    ?>
                    <tr>
                        <td><?php echo $row['id_dato']; ?></td>
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
                    </tr>
    <?php } ?>
                </table>
            </div>
            <!--------------------------------------------------PIE DE PAGINA ----------------------------------------->
        </div>
    <?php include '../View/footer.html'; ?>
</body>
</html>