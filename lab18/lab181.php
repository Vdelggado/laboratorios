<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 18.1</title>
</head>
<body>
  <h1>Formulario</h1>
    <form action="lab181.php" method ="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <br>
        <br>
        <input type="text" placeholder="Apellido" name="apellido">
        <br>
        <br>
        <input type="email" placeholder="Email" name="email">
        <br>
        <br>
        <input type="password" placeholder="Password" name="password">
        <br>
        <br>
        <input type="password" placeholder="Password" name="repedirPassword">
        <br>
        <br>
        <input type="text" placeholder="IP del equipo" name="ip">
        <br>
        <br>
        <input type="submit" name="enviar" value="validar">
    </form>

    <?php
    // Incluir el archivo funciones.php
    include 'funciones.php';
    // se verifica que se haya enviado el formulario
    if (isset($_POST['nombre'])) {
      // se verifica que el nombre de usuario no esté vacío
      if ($_POST['nombre'] == "") {
        echo "Debe ingresar un nombre de usuario";
      }
      // se verifica que el apellido no esté vacío
      elseif ($_POST['apellido'] == "") {
        echo "Debe ingresar un apellido";
      }
      // se verifica que el email no esté vacío
      elseif ($_POST['email'] == "") {
        echo "Debe ingresar un email";
      }
      // se verifica que el email sea válido
      elseif (!verificar_email($_POST['email'])) {
        echo "Debe ingresar un email válido";
      }
      // se verifica que el password no esté vacío
      elseif ($_POST['password'] == "") {
        echo "Debe ingresar un password";
      }
      // se verifica que el password sea válido
      elseif (!verificar_password_strenght($_POST['password'])) {
        echo "Debe ingresar un password válido";
      }
      // se verifica que el password sea igual al password2
      elseif ($_POST['password'] != $_POST['repetirPassword']) {
        echo "Los passwords no coinciden";
      }
      // se verifica que la IP no esté vacía
      elseif ($_POST['ip'] == "") {
        echo "Debe ingresar una IP";
      }
      // se verifica que la IP sea válida
      elseif (!verificar_ip($_POST['ip'])) {
        echo "Debe ingresar una IP válida";
      }
      // si todo está bien, se muestra un mensaje de éxito
      else {
       echo "<script>alert('Usuario registrado con éxito');</script>";
      }
    }
    ?>
</body>
</html>