<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleReg.css">
    <title>Registro</title>
</head>
<body>
<div class="box">
        <div class="container">
            <div class="top-header">
                <header>Registrarse</header>
            </div>
            <div class="User">
                <form action="RegBD.php" method="post">
                  <input class="TextEntr" type="email" name="Gmail" placeholder="Gmail">
                    <br>
                  <input class="TextEntr" type="text" name="User" placeholder="Usuario">
                    <br>
                <input class="TextEntr" type="password" name="Con" placeholder="Contraseña">
                    <br>
                  <input class="Boton" type="submit" value="Iniciar">
                </form>
            </div>
            <div class="Extra">
              <label class="Ex1">¿Olvidaste tu contraseña?</label>
              <a id="Reg" href="Index.php">Iniciar secion</a>
            </div>
        </div>
    </div>
</body>
</html>