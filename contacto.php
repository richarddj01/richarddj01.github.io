<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RDJP | Contacto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <header>
  <!--Aqui puede ir contenido del encabezado, pero solo estoy utilizando el nav-->  
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <div class="container">
        <!--Logo-->
        <a class="navbar-brand" href="./index.html">
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
    <!--Aqui pongo el color de texto blanco-->
    <div class="bg-secondary text-white text-center containter container-fluid vh-100 align-items-center d-inline-flex justify-content-center">
        <div class="row justify-content-center">
            <div class="col-sm bg-black py-4">
              <h1 class="my-3">Formulario de Contacto:</h1>

              <!--Formulario, aqui creo el llamado al metodo insertar de la clase DAO-->
              <form class="form-floating mx-5" method="POST" action="./php/enviar_correo.php">
                  <div class="row">
                    <div class="col-6 text-secondary">
                      <div class="form-floating">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder=" " required>
                        <label class="form-label" for="nombre">Nombre:</label>
                      </div>
                    </div>

                    <div class="col-6 text-secondary">
                      <div class="form-floating">
                        <input class="form-control" type="email" id="email" name="email" placeholder=" " required>
                        <label class="form-label" for="email">Correo:</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col text-secondary">
                      <div class="form-floating mt-4">
                        <textarea class="form-control h-100" id="mensaje" name="mensaje" rows="10" placeholder=" " required></textarea>
                        <label class="form-label" for="mensaje">Mensaje:</label>
                      </div>
                    </div>
                  </div>
                  <input class="btn btn-success col-6 my-4" type="submit" value="Enviar">
              </form>

              <!-- Mensaje de éxito -->
              <div class="alert alert-success mt-3 mx-5" role="alert" id="mensaje-exito" style="display: none;">
                El formulario se ha enviado correctamente.
              </div>

              <!-- Mensaje de error -->
              <div class="col-6 alert alert-danger mt-3" role="alert" id="mensaje-error" style="display: none;">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
