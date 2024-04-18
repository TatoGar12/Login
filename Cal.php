<?php
$_POST;
$gmailweb = $_POST["Gmail"];
$ConWeb = $_POST["Con"];

// Credenciales de la base de datos
$servername = "localhost";
$username = "tato";
$password = "47314244";
$database = "Sistema";
// Conectar a la base de datos
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
  }
// Consultar la base de datos
$sql = "SELECT gmail, Contraseña
FROM usuarios
WHERE gmail = '$gmailweb'";
$stmt = $pdo->query($sql);

// Recorrer los resultados y mostrarlos
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $gmail = $row["gmail"]; 
  $Con = $row["Contraseña"];


}

//Comprobación de credenciales
if (empty($Con)) {
  echo "Gmail o Contraseña incorrectos";
}else{
  if ($ConWeb == $Con){
    echo "Correcto";
  }else{  
    echo "Gmail o Contraseña incorrectos";
  };
};

// Cerrar la conexión
$pdo = null;

?>
