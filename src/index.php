<?php
$conexion = new mysqli("db", "root", "root", "testdb");

if ($conexion->connect_error) {
  die("<h2>Error de conexion: " . $conexion->connect_error . "</h2>");
}

$result = $conexion->query("SELECT DATABASE() AS db");
echo "<h1>Conexion exitosa a la base de datos:</h1>";
while ($row = $result->fetch_assoc()) {
  echo "<p>".$row["db"]."</p>";
}

$result = $conexion->query("SELECT * FROM personas;");
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row["nombre"] . "</li>";
}
echo "</ul>";

$conexion->close();

?>
