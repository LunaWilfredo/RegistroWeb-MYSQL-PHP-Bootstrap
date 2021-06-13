<?php  

    require_once '../conexion/conexion.php';

    /*CAPTURA DE DATOS */
    $idD = $_GET['id'];
    /*CONSULTA SQL */
    $sql = "DELETE FROM datos where id_dato = '$idD' ";

    $resultado = mysqli_query($cn,$sql);

    if($resultado){
        //echo 'Borrado exitoso';
        header('location:../index.php');
    }else{
        //echo 'Error de Borrado';
        header('location:../index.php');
    }

    mysqli_close($cn);

?>