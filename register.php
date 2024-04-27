
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoundMania</title>
  <link rel="stylesheet" href="./assets/css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>


<header>
  <div class="contenedor-header">
    <a href="index.php">
      <img src="./img/logo2.ico" alt="Logo del sitio web" class="logo">
    </a>

    <div class="busqueda-acciones">
      <form action="#">
        <input type="text" placeholder="Buscar música">
        <button type="submit">Buscar</button>
      </form>

      <div class="acciones-usuario">
        <a href="login.php" class="boton-usuario">
        <img src="./img/login.svg" alt="Iniciar sesión" class="icon-usuario"></a>
        <a href="register.php" class="boton-usuario">
        <img src="./img/register.svg" alt="Registrarse" class="icon-usuario"></a>
      </div>
    </div>

  </div>
</header>

<div class="contenedor-formulario">
    <h2>Registro</h2>

    

    <form action="#">
      <div class="fila-formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="fila-formulario">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
      </div>

      <div class="fila-formulario">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
      </div>

      <div class="fila-formulario">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="fila-formulario">
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
      </div>

      <div class="fila-formulario">
        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
          <option value="">Seleccione...</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select>
      </div>

      <button type="submit">Registrarse</button>
    </form>
</div>


<footer>
  <div class="contenedor-footer">
    <table>
      <tr>
        <td>
          <h3>Información</h3>
          <ul>
            <li><a href="#">Acerca de nosotros</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Política de privacidad</a></li>
          </ul>
        </td>

        <td>
          <h3>Redes sociales</h3>
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
          </ul>
        </td>

      </tr>

      
    </table>

    <div class="seccion-derechos">
            <p>&copy; 2024 SoundMania. Todos los derechos reservados.</p>
    </div>

  </div>
</footer>



</body>
