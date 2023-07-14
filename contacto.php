<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RDJP | Contacto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <header>
  <!--Aqui puede ir contenido del encabezado, pero solo estoy utilizando el nav-->  
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <div class="container">
        <!--Logo-->
        <a class="navbar-brand" href="#">
          <img src="./img/RDJmini.png" alt="Logo" height="30">
        </a>
        <!--Botón para dispositivos moviles-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--Elementos del menú de navegación-->
        <!--Aqui se centra el menu de los dispositivos móviles-->
        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <article>
    <!--Aqui pongo la imagen de fondo y en el mismo div pongo el color de texto blanco-->
    <div class="imagen-de-fondo text-white text-center container-fluid vh-100 bg-image bg-size-cover">
        <div class="row">
            <div class="col">
              <h1>Formulario de ejemplo</h1>

              <!--Formulario, aqui creo el llamado al metodo insertar de la clase DAO-->
              <form method="POST" action="./php/FormularioProcesar.php">
                  <label for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" required><br>

                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required><br>

                  <label for="mensaje">Mensaje:</label><br>
                  <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br>
                  
                  <input type="submit" value="Enviar">
              </form>

              <!-- Mensaje de éxito -->
              <div class="alert alert-success mt-3" role="alert" id="mensaje-exito" style="display: none;">
                El formulario se ha enviado correctamente.
              </div>

              <!-- Mensaje de error -->
              <div class="alert alert-danger mt-3" role="alert" id="mensaje-error" style="display: none;">
                Se produjo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.
              </div>

              <!-- Script para mostrar el mensaje -->
              <script>
                <?php
                // Verificar si se ha enviado el formulario y mostrar el mensaje correspondiente
                if (isset($_GET['enviado'])) {
                    $enviado = $_GET['enviado'];
                    if ($enviado) {
                        echo '$("#mensaje-exito").show();';
                    } else {
                        echo '$("#mensaje-error").show();';
                    }
                }
                ?>
              </script>
            </div>
          </div>
    </div>
  </article>
  <aside></aside>
  <footer>
    <div class="footer bg-black text-white text-center p-2">
        <p>Ricardo de Jesús Pineda Fuentes</p>
        <p>© 2023 | RDJ Productions</p>
    </div>
  </footer>
  <!-- Resto del contenido de la página -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
