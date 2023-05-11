<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $fecha = $_POST["fecha"];
  #$altura = intval($altura);

  #Se construye la consulta como un string ###################
 	$query = "SELECT id, nombre, altura FROM pokemones where altura>=$altura order by altura desc;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$despachos = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre_Cliente</th>
      <th>Direccion</th>>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($despachos as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>