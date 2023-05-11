<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $region = $_POST["region"];
  #$altura = intval($altura);

  #Se construye la consulta como un string ###################
 	$query = "SELECT c.nombre, SUM(p.precio * co.cantidad) AS total_gastado
     FROM Clientes c
     INNER JOIN Compras co ON c.id = co.id_cliente
     INNER JOIN Productos p ON co.producto = p.id
     INNER JOIN Tiendas t ON co.id_tienda = t.id
     WHERE c.región = $region
     GROUP BY c.id
     ORDER BY total_gastado DESC
     LIMIT 5;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$clientes = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Clientes que mas gastaron</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($clientes as $p) {
          echo "<tr><td>$p[0]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>