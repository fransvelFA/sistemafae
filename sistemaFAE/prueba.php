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
                <th>Disponibilidad</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
          <!--Conexion y visualizacion de los datos-->
          <?php
          include 'db.php';
          $sql="SELECT * FROM docentes";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){

          
          ?>
          <tr>
                <td><?php echo $mostrar ['nombre']?></td>
                <td><?php echo $mostrar ['asignatura']?></td>
                <td><?php echo $mostrar ['dia']?></td>
                <td><?php echo $mostrar ['hora']?></td>
                <td><?php echo $mostrar ['carrera']?></td>
                <td>
  <button class="btn btn-warning">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
  <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
  <path d="M16 5l3 3" />
</svg>
  </button>              
<button class="btn btn-danger">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-filled" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" stroke-width="0" fill="currentColor" />
  <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" stroke-width="0" fill="currentColor" />
</svg>
</button>
</td>
            </tr>
            <?php 
          }
            ?>

        </tbody>
    </table>
      
</div>
<!--Agregar datos al registro del docente-->
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
                <input type="text" name="nombre" class="form-control" required />
                <label class="form-label">Nombre del docente</label>
              </div>

              
              <div class="form-outline mb-4">
                <input type="text" name="asignatura" class="form-control" required />
                <label class="form-label">Asignatura</label>
              </div>

              <div class="form-outline mb-4">
                <table> 
                  <th>
                  <select name="hora" id="$hora" class="form-select" required>
                <option value="#">--Selecciona la Hora--</option>
                <option type="checkbox" value="4:00 a 5:00">4:00 a 5:00</option>
                <option value="5:00 a 6:00">5:00 a 6:00</option>
                <option value="6:00 a 7:00">6:00 a 7:00</option>
                <option value="7:00 a 8:00">7:00 a 8:00</option>
                <option value="8:00 a 9:00">8:00 a 9:00</option>
                <option value="9:00 a 10:00">9:00 a 10:00</option>
               </select>
               </div>
                  </th>
              <th>
              <div>
                  <select id="carrera" name="carrera" class="form-select" required>
                    <option value="#">--Seleciona la Carrera--</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Derecho">Derecho</option>
                    <option value="Ing. en computacion">Ing. en Computacion</option>
                  </select>
              </div>
               </th>
              <div>
                <select name="dia" id="dia" class="form-select">
                  <option  value="#">--Selecciona Dia--</option>
                  <option value="Lunes">Lunes</option>
                  <option value="Martes">Martes</option>
                  <option value="Miercoles">Miercoles</option>
                  <option value="Jueves">Jueves</option>
                  <option value="Viernes">Viernes</option>
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
