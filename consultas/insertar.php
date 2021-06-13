<?php 
    
    require '../conexion/conexion.php';

    /*CAPTURA DE DATOS*/
    $super = $_POST['txt-super'];
    $ip = $_POST['txt-ip'];
    $dni = $_POST['txt-dni'];
    $asesor = $_POST['txt-as'];
    $telefono = $_POST['txt-tel'];
    $vpn = $_POST['txt-vpn'];
    $tecnico = $_POST['txt-tec'];

    date_default_timezone_set('UTC');
    $fecha = date("Y-m-d");

    $grupo = $_POST['txt-grupo'];
    $estado = $_POST['txt-estado'];
    $turno = $_POST['txt-turno'];
    
    /*conexion 
   // $cn = mysqli_connect('localhost','root','','registroweb');

    if($cn){
        echo 'Conexion Exitosa';
    }else{
        echo 'conexion errada';
    }
    */

    $sql = " INSERT INTO datos (nombre_sup_dato,nombre_ip_dato,dni_dato,nombre_usuario_dato,telefono_dato,nombre_vpn_dato,nombre_tecnico_dato,fecha_dato,
    grupo_dato,fk_id_estado,fk_id_turno) VALUES ('$super','$ip','$dni','$asesor','$telefono','$vpn','$tecnico','$fecha','$grupo','$estado','$turno')";

    $resultado = mysqli_query($cn ,$sql);

    if($resultado){
        echo '<script type="text/javascript">
        alert("Tarea Guardada");
        </script>';
        header('location:../index.php');
    }else{
        echo '<script type="text/javascript">
        alert("Error de Guardado");
        window.location.href="../index.php";
        </script>';
    }

    mysqli_close($cn);
?>