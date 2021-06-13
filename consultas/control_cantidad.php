<?php 

    require_once '../conexion/conexion.php';

    /*CANTIDAD TOTAL DE REGISTROS ASESORES */
    $sql_g = "SELECT * FROM DATOS ";
    $resultado_g = mysqli_query($cn,$sql_g);

    $conteo_g =  mysqli_num_rows($resultado_g);
    //echo 'CANTIDAD DE ASESORES-'.$conteo_g.'<BR>';

    /*CANTIDAD TOTAL DE IPS*/
    $sql_ip = "SELECT DISTINCT NOMBRE_IP_DATO FROM DATOS ";
    $resultado_ip = mysqli_query($cn,$sql_ip);

    $conteo_ip =  mysqli_num_rows($resultado_ip);
    //echo 'CANTIDAD DE IP-'.$conteo_ip.'<BR>';

    /*CANTIDAD POR IP*/
    $sql_ip_1 = "SELECT NOMBRE_IP_DATO FROM DATOS WHERE NOMBRE_IP_DATO ='10.201.0.0' ";
    $resultado_ip_1 = mysqli_query($cn,$sql_ip_1);

    $conteo_ip_1 =  mysqli_num_rows($resultado_ip_1);
    //echo 'CANTIDAD DE IP-'.$conteo_ip_1.'<BR>';

    $sql_ip_2 = "SELECT NOMBRE_IP_DATO FROM DATOS WHERE NOMBRE_IP_DATO ='10.201.0.1' ";
    $resultado_ip_2 = mysqli_query($cn,$sql_ip_2);

    $conteo_ip_2 =  mysqli_num_rows($resultado_ip_2);
    //echo 'CANTIDAD DE IP-'.$conteo_ip_1.'<BR>';

    $sql_ip_3 = "SELECT NOMBRE_IP_DATO FROM DATOS WHERE NOMBRE_IP_DATO ='10.201.0.2' ";
    $resultado_ip_3 = mysqli_query($cn,$sql_ip_3);

    $conteo_ip_3 =  mysqli_num_rows($resultado_ip_3);
    //echo 'CANTIDAD DE IP-'.$conteo_ip_1.'<BR>';


    /*TOTAL DE SUPERVISORES*/
    $sql_sup = "SELECT DISTINCT NOMBRE_SUP_DATO FROM DATOS ";
    $resultado_sup = mysqli_query($cn,$sql_sup);

    $conteo_sup =  mysqli_num_rows($resultado_sup);
    //echo 'CANTIDAD DE SUP-'.$conteo_sup.'<BR>';

    /*TOTAL DE GRUPOS */
    $sql_grup = "SELECT DISTINCT GRUPO_DATO FROM DATOS ";
    $resultado_grup = mysqli_query($cn,$sql_grup);

    $conteo_grup =  mysqli_num_rows($resultado_grup);
    //echo 'CANTIDAD DE GRUPOS-'.$conteo_grup.'<BR>';

    /*TABLERO GENERAL*/
    //CANTIDAD DE HABILITADO
    $sql_est_hab = "SELECT FK_ID_ESTADO FROM DATOS WHERE FK_ID_ESTADO = 1 ";
    $resultado_est_hab = mysqli_query($cn,$sql_est_hab);

    $conteo_est_hab =  mysqli_num_rows($resultado_est_hab);
    //echo 'CANTIDAD DE HABILITADOS-'.$conteo_est_hab.'<BR>';
    //CANTIDAD DE PENDIENTES
    $sql_est_pen = "SELECT FK_ID_ESTADO FROM DATOS WHERE FK_ID_ESTADO = 2 ";
    $resultado_est_pen = mysqli_query($cn,$sql_est_pen);

    $conteo_est_pen =  mysqli_num_rows($resultado_est_pen);
    //echo 'CANTIDAD DE PENDIENTES-'.$conteo_est_pen.'<BR>';
    
    /*CANTIDAD POR TURNOS*/
    //CANTIDAD TURNO MAÑANA
    $sql_turno_m = "SELECT FK_ID_TURNO FROM DATOS WHERE FK_ID_TURNO = 1 ";
    $resultado_turno_m = mysqli_query($cn,$sql_turno_m);

    $conteo_turno_m =  mysqli_num_rows($resultado_turno_m);
    //echo 'CANTIDAD DE TUNO MAÑANA-'.$conteo_turno_m.'<BR>';
    //CANTIDAD TURNO TARDE
    $sql_turno_t = "SELECT FK_ID_TURNO FROM DATOS WHERE FK_ID_TURNO = 2 ";
    $resultado_turno_t = mysqli_query($cn,$sql_turno_t);

    $conteo_turno_t =  mysqli_num_rows($resultado_turno_t);
    //echo 'CANTIDAD DE TUNO TARDE-'.$conteo_turno_t.'<BR>';
    

?>