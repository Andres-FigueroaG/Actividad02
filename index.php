<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoundMania</title>
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="javascript" href="./assets/js/main.js">

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
        <a href="create.php" class="boton-usuario">
        <img src="./img/register.svg" alt="Registrarse" class="icon-usuario"></a>
      </div>
    </div>

  </div>
</header>



  <nav>
    <ul>
      <li><a href="/musica-nueva">Música nueva</a></li>
      <li><a href="/musica-popular">Música popular</a></li>
      <li><a href="user.php">CRUD</a></li>
      </ul>
  </nav>





  <?php
    // Conexión a la base de datos (reemplaza con tu configuración)
    $conn = new mysqli("mysql", "root", "root", "CRUD");

    // Consulta a la tabla "musica"
    $sql = "SELECT * FROM musica";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
       // Se agrega el atributo cols='4'
      
      while ($fila = $resultado->fetch_assoc()) {
          $imagen = $fila["imagen"];

          echo "<div class='celda-imagen'><a href='$enlace'</a><img src='$imagen' width='200' height='200' alt='$artista - $cancion'></a></div>";
      }
      
      
    } else {
        echo "No hay registros en la tabla música.";
    }

    $conn->close();
?>



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
