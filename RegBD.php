<?php
$_POST;
$gmailweb = $_POST["Gmail"];
$usr = $_POST["User"];
$Con = $_POST["Con"];

// Credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "47314244";
$database = "Sistema";

// Conectar a la base de datos
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Funciona1";
} catch (PDOException $e) {
  die("Error al conectar a la base de datos: " . $e->getMessage());
}

// Consultar la base de datos
try {
  $sql = "INSERT INTO usuarios (gmail, Contraseña, nombre) VALUES 
  ('$gmailweb','$Con','$usr');";
  $stmt = $pdo->query($sql);

  //Redirige al login
  header("Location: Index.php");
} catch(Exception $e) {
  echo "El correo que estas usando, ya existe";
  
};

// Cerrar la conexión

$pdo = null;

?>
