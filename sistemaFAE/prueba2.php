<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>FAE INFINITY</title>
</head>
<body>

      <nav>
        <a href="principal.php">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="index.php">Cerrar Sesiòn</a>
      </nav>
<div class="nave">
    <img src="logo.ico" alt="">
</div>

<h2 class="row justify-content-center">Ingenieria en computación</h2>

<?php

// Función para generar un horario escolar aleatorio
// Función para generar el horario
function generateSchedule($days, $hours, $db, $selectedDays, $selectedHours) {
    $schedule = array();

    // Obtener aulas disponibles de la base de datos
    $query_classrooms = "SELECT asignatura FROM docentes";
    $result_classrooms = $db->query($query_classrooms);
    $classrooms = array();
    while ($row = $result_classrooms->fetch_assoc()) {
        $classrooms[] = $row['asignatura'];
    }

    foreach ($days as $day) {
        $schedule[$day] = array();

        foreach ($hours as $hour) {
            // Verificar si el día y la hora están seleccionados por el usuario
            if (in_array($day, $selectedDays) && in_array($hour, $selectedHours)) {
                // Aula aleatoria
                $random_classroom = $classrooms[array_rand($classrooms)];
            } else {
                // Si no están seleccionados, marcar como vacío
                $random_classroom = '';
            }

            $schedule[$day][$hour] = array(
                "classroom" => $random_classroom
            );
        }
    }

    return $schedule;
}

// Lógica para seleccionar días y horas por parte del usuario (puedes obtenerlos de un formulario)
$selectedDays = ['Martes', 'Jueves'];
$selectedHours = ['4:00 a 5:00', '5:00 a 6:00'];




// Días de la semana y horas del día
$days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
$hours = ['4:00 a 5:00', '5:00 a 6:00', '6:00 a 7:00', '7:00 a 8:00', '8:00 a 9:00', '9:00 a 10:00'];

// Conexión a la base de datos
$db = new mysqli("localhost", "root", "", "sistemafae");
if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

// Generar horario aleatorio
$schedule = generateSchedule($days, $hours, $db, $selectedDays, $selectedHours);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="row justify-content-center">Horario Escolar</h2>
    <div class="table-responsive">
        <table id="scheduleTable" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <?php foreach ($days as $day) : ?>
                        <th scope="col"><?php echo $day; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hours as $hour) : ?>
                    <tr>
                        <th scope="row"><?php echo $hour; ?></th>
                        <?php foreach ($days as $day) : ?>
                            <td class="editable-cell"><?php echo isset($schedule[$day][$hour]) ? $schedule[$day][$hour]['classroom'] : ''; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<input type="submit" class=" btn btn-primary justify-content-center" value="Guardar">
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {

    // Función para guardar el horario editado
    $("#saveButton").click(function() {
        var scheduleData = [];
        $("#scheduleTable tbody tr").each(function() {
            var rowData = {};
            $(this).find("td").each(function(index) {
                rowData[index] = $(this).text();
            });
            scheduleData.push(rowData);
        });

        // Aquí puedes enviar los datos a tu servidor para ser guardados en la base de datos
        console.log(scheduleData);
        // Aquí puedes realizar una petición AJAX para guardar los datos en la base de datos
    });
});
</script>
</body>
</html>

<?php
// Cerrar conexión a la base de datos
$db->close();
?>



















      <footer class="bg-light text-lg-start">
  <div class="py-4 text-center">

  </div>

  <hr class="m-0" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

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