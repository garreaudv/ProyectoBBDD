<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Consultas</title>
  <head>
  <link rel="stylesheet" href="<link rel="stylesheet" href="/shared/css/5.0/css/stylesheet.css" type="text/css">">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $(function() {
      var regiones = [
        "Alabama",
        "Alaska",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Connecticut",
        "Delaware",
        "Florida",
        "Georgia",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Iowa",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Ohio",
        "Oklahoma",
        "Oregon",
        "Pennsylvania",
        "Rhode Island",
        "South Carolina",
        "South Dakota",
        "Tennessee",
        "Texas",
        "Utah",
        "Vermont",
        "Virginia",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming"
      ];

      $("#regionInput1").autocomplete({
        source: regiones
      });

    $("#regionInput2").autocomplete({
        source: regiones
      });
    });
  </script>
  <style>
    /* Estilos CSS para personalizar la apariencia */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1, h3, p {
      text-align: center;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #9ffd82;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: center;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"] {
      width: 200px;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #cccccceb;
    }

    .form-group input[type="submit"] {
      background-color: #3fb043;
      color: #070707;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 align="center">Consultas </h1>
    <p style="text-align:center;">Aquí podrás encontrar información de tus consultas.</p>

    <br>
    <h3>¿Quieres buscar los despachos programados para cierta fecha?</h3>
    <form action="consultas/1.consulta_despacho_fecha.php" method="post">
      <div class="form-group">
        Fecha:
        <input type="text" name="fecha" class="datepicker">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
    <h3>¿Quieres buscar una Compra por su ID?</h3>
    <form action="consultas/2.consulta_id_compra.php" method="post">
      <div class="form-group">
        Id:
        <input type="text" name="id">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
    <h3>¿Quieres conocer el número de cajas que se ocuparán para entregar los productos comprados?</h3>
    <form action="consultas/3.consulta_cajas_id_compra.php" method="post">
      <div class="form-group">
        ID:
        <input type="text" name="id">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
    <h3>¿Quieres conocer el peso total de todos los despachos programados para cierta fecha y vehículo?</h3>
    <form action="consultas/4.consulta_peso_patente.php" method="post">
      <div class="form-group">
        Fecha:
        <input type="text" name="fecha" class="datepicker">
        <br>
        Patente:
        <input type="text" name="patente">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>  
    <h3>¿Quieres conocer numero total de repartidores y su edad promedio para cada genero?</h3>
    <form action="consultas/5.consulta_repartidores_region.php" method="post">
      <div class="form-group">
        Region:
        <input type="text" name="region" id="regionInput1">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
    <h3>¿Quieres conocer todas las compras realizadas por un cliente?</h3>
    <form action="consultas/6.consultas_compra_id_cliente.php" method="post">
      <div class="form-group">
        ID:
        <input type="text" name="id">
      </div>
      <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>
    <h3>¿Quieres conocer los 5 clientes que mas han comprado en una region?</h3>
    <form action="consultas/7.consulta_mayor_plata_region.php" method="post">
      <div class="form-group">
        Region:
        <input type="text" name="region" id="regionInput2">
      </div>
      <input type="submit" value="Buscar">
    </form>
  <br>
  <br>
  <br>
  <br>
<script>
    $(document).ready(function() {
        // Inicializar el datepicker en los campos con la clase "datepicker"
        $(".datepicker").datepicker();
    });
</script>
</body>
</html>

