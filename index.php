<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Parejas</title>
</head>
<body>
    <h1>Ejercicio Git en parejas: Sergio y Presley</h1>
    <?php
      echo "<h1>Ejercicio Git en parejas: Sergio y Presley</h1>";
      if(isset($_POST['contrasena'])){
          if($_POST['contrasena']=="daw2"){
              echo "Bienvenido $_POST['nombre']";
          }
      }
    ?>
    <form method="post" action="index.php"> 
        <input type="text" name="nombre" placeholder="Nombre" required="required" /> 
        <input type="password" name="contrasena" placeholder="Contraseña" required="required" /> 
        <button type="submit">Pulsame</button> 
    </form>
    
</body>
</html>

