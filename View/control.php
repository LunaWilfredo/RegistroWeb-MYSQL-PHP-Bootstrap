<?php
  error_reporting(0);
    //require '../conexion/conexion.php';
    require '../consultas/control_cantidad.php';
    include '../View/header.php';
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Total'],
          ['PENDIENTE', '<?php echo $conteo_est_pen ;?>'],
          ['HABILITADO', '<?php echo $conteo_est_hab ;?>']
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-----GRAFICO 2----------------->
  
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Total'],
          ['Tarde','<?php echo $conteo_turno_m;?>'],
          ['Mañana','<?php echo $conteo_turno_t;?>']

        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  </head>
  <body>
    <div class="contenedor-cuerpo-dash">
        <!----GRAFICO 1----->
        <div class="contenedor-grafico-1">
            <div class="titulo-g-1">Estado </div>
            <div id="barchart_material" style="width: 600px; height: 100px;"></div>
        </div>
        <!----GRAFICO 2----->
        <div class="contenedor-grafico-2">
          <div class="titulo-g-2">TURNO </div>
          <div id="columnchart_material" style="width: 600px; height: 100px;"></div>
        </div>
    
    <!---OTROS DATOS A MOSTRAR--->
    <div class="contenedor-cuadro-datos">
      <p>Detallado General</p>        
      <div class="cuadrado-cuerpo">
            <p>Total de Supervisores</p>
            <h5><?php echo $conteo_sup;?></h5>
            <p>Total de Asesores Registrados</p>
            <h5><?php echo $conteo_g;?></h5>
            <p>Total de Grupos Registrados</p>
            <h5><?php echo $conteo_grup;?></h5>
            <p>Total de IP's Registrados</p>
            <h5><?php echo $conteo_ip;?></h5>       
      </div>
    </div>
    <div class="tabla-contenido">
        <table class="tabla-conteo">
            <tr>
                <th>EQUIPO REMOTO</th>
                <th>CANTIDAD </th>
            </tr>
            <tr>
                <td>10.201.0.0</td>
                <td><?php echo $conteo_ip_1 ;?></td>
            </tr>
            <tr>
                <td>10.201.0.1</td>
                <td><?php echo $conteo_ip_2 ;?></td>
            </tr>
            <tr>
                <td>10.201.0.2</td>
                <td><?php echo $conteo_ip_3 ;?></td>
            </tr>
        </table>
    </div>
    </div>
    <?php include '../View/footer.html'; ?>
  </body>
</html>
