
<?php
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($usuario == 'usuario' && $password == '1234'){
    // Guardo en la sesión el usuario.
    $_SESSION['usuario'] = $usuario;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: index.php"); 
  }else{
    echo 'El usuario o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>