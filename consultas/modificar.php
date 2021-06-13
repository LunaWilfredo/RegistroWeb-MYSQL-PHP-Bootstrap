<?php 

require_once '../conexion/conexion.php';

// $cn = mysqli_connect('localhost','root','','registroweb');

/*Captura de datos */
$idM =$_POST['txt-id'];
$superM = $_POST['txt-super'];
$ipM = $_POST['txt-ip'];
$dniM = $_POST['txt-dni'];
$asesorM = $_POST['txt-as'];
$telefonoM = $_POST['txt-tel'];
$vpnM = $_POST['txt-vpn'];
$tecnicoM = $_POST['txt-tec'];

date_default_timezone_set('UTC');
$fechaM = date("Y-m-d");

$grupoM = $_POST['txt-grupo'];
$estadoM = $_POST['txt-estado'];
$turnoM = $_POST['txt-turno'];

/*consulta SQL */

$sql="UPDATE DATOS SET NOMBRE_SUP_DATO = '$superM',NOMBRE_IP_DATO = '$ipM',DNI_DATO = '$dniM',NOMBRE_USUARIO_DATO = '$asesorM',TELEFONO_DATO = '$telefonoM',NOMBRE_VPN_DATO = '$vpnM',NOMBRE_TECNICO_DATO = '$tecnicoM',FECHA_DATO = CURDATE(),
GRUPO_DATO = '$grupoM',FK_ID_ESTADO = '$estadoM',FK_ID_TURNO = '$turnoM'  WHERE ID_DATO = '$idM'";

$resultado = mysqli_query($cn,$sql);

if($resultado){
        //echo 'Registro exitoso';
        header('location:../index.php');
    }else{
        // echo 'Error de Registro';
        header('location:../index.php?error=datos no resgitrados');
    }

    mysqli_close($cn);
?>

