<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de usuario</title>
</head>
<body>

<header>
  <style>
    #intro {
      background-image: url(descarga.jpg);
      height: 100vh;
      background-size:cover;
    }

    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
  </style>


  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">

            <form class="bg-white rounded shadow-5-strong p-5" action="registroform.php" method="POST">
              <!-- Email input -->
              <div class="form-outline mb-4" data-mdb-input-init>
              <h1>Registro de Usuario</h1>
                <input type="email" name="usuario" class="form-control" />
                <label class="form-label">Correo Electronico</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="password" name="contra" class="form-control" />
                <label class="form-label">Ingresa contraseña</label>
              </div>

              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="password" name="contrac" class="form-control" />
                <label class="form-label">Confirmar contraseña</label>
              </div>

              

              <!--botones de registro e inicio de sesion-->
              <input type="submit" class="btn btn-primary btn-block" value="Registrarse">
              <td></td>
              <a href="index.php" class="btn btn-primary btn-block" data-mdb-ripple-init>Iniciar Sesiòn</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!--Footer-->
<footer class="bg-light text-lg-start">
  <div class="py-4 text-center">

  </div>

  <hr class="m-0" />


  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg>
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
  <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M16.5 7.5l0 .01" />
</svg>
  </div>
</footer>
</body>
</html>