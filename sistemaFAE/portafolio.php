<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>

      <nav>
        <a href="principal.php">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="index.php">Cerrar Sesiòn</a>
      </nav>
<div class="nave">
    <img src="logo.ico">
</div>

<h2 class="row justify-content-center">Horario Escolar General</h2>
<hr>
<p></p>
<p></p>
<div>
<div id="intro1" class="bg-image shadow-2-strong">
    <div>
      <div class="container">
        <table>
        <div class="col modal">
          <div class="col-xl-8 col-md-8 modal-body">
            <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>4:00-5:00</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5:00-6:00</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6:00-7:00</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
              <td>7:00-8:00</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>8:00-9:00</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>9:00-10:00</td>
              <td></td>
              <td></td>
            </tr>
        </tbody>
    </table>
      
</div>

</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<input type="submit" class="btn btn-success" value="Imprimir" data-bs-toggle="modal" data-bs-target="#exampleModal">
<a href="prueba.php" class="btn btn-primary btn-block">Registrar Docente</a>
<a href="" class="btn btn-warning btn-block">Generar horario</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Imprimir en PDF?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            // Ejemplo de contenido generado por PHP en el modal
            echo "¡Hola! Estas seguro de imprimir el horario?.";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Imprimir</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>










      <footer class="bg-light text-lg-start">
  <div class="py-4 text-center">

  </div>
  <!-- Copyright -->
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
  <!-- Copyright -->
</footer>
</body>
</html>