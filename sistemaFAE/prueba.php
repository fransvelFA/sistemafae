<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<nav>
        <a href="principal.php">Inicio</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="index.php">Cerrar Sesiòn</a>
      </nav>
<div class="nave">
    <img src="logo.ico" alt="">
</div>
<h1 class="row justify-content-center">Registro de docentes</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Asignatura</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Carrera</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        </tbody>
    </table>
      
</div>

<!-- Botón para abrir el modal -->
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos que desea ingresar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            // Ejemplo de contenido generado por PHP en el modal
            echo "¡Hola! bienvenido al registro de docente.";
        ?>
      </div>
      <div>
      <form class="bg-white rounded shadow-5-strong p-5" action="registrodocente.php" method="POST">
              
              <div class="form-outline mb-4">
                <input type="text" name="nombre" class="form-control" />
                <label class="form-label">Nombre del docente</label>
              </div>

              
              <div class="form-outline mb-4">
                <input type="text" name="asignatura" class="form-control" />
                <label class="form-label">Asignatura</label>
              </div>

              <div class="form-outline mb-4">
                <table> 
                  <th>
                  <select name="hora" id="$hora" class="form-select">
                <option value="#">--Selecciona la Hora--</option>
                <option value="4">4:00 a 5:00</option>
                <option value="5">5:00 a 6:00</option>
                <option value="6">6:00 a 7:00</option>
                <option value="7">7:00 a 8:00</option>
                <option value="8">8:00 a 9:00</option>
                <option value="9">9:00 a 10:00</option>
               </select>
               </div>
                  </th>
              <th>
              <div>
                  <select id="carrera" name="carrera" class="form-select">
                    <option value="#">--Seleciona la Carrera--</option>
                    <option value="1">Administracion</option>
                    <option value="2">Derecho</option>
                    <option value="3">Ing. en Computacion</option>
                  </select>
              </div>
               </th>
              <div>
                <select name="dia" id="dia" class="form-select">
                  <option  value="#">--Selecciona Dia--</option>
                  <option value="1">Lunes</option>
                  <option value="2">Martes</option>
                  <option value="3">Miercoles</option>
                  <option value="4">Jueves</option>
                  <option value="5">Viernes</option>
                </select>
              </div>
              </th>
              </table>
              <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Guardar cambios">
      </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
