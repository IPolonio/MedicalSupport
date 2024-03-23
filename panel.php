<!DOCTYPE html>
<html>
<head>
    <title>Panel de Asistencia</title>
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Panel de Asistencia</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Justificación</th>
                    <th>Feedback</th>
                    <th>Tareas</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí puedes agregar las filas de la tabla con los datos de tu personal -->
                <tr>
                    <td>Maria</td>
                    <td>Presente</td>
                    <td></td>
                    <td><a href="feedback.php?user=Maria" class="btn btn-primary">Dar Feedback</a></td>
                    <td><a href="asignar.php?user=Maria" class="btn btn-success">Asignar Tarea</a></td>
                </tr>
                <tr>
                    <td>Juan</td>
                    <td>Ausente</td>
                    <td>Enfermedad</td>
                    <td><a href="asignar.php?user=Juan" class="btn btn-primary">Dar Feedback</a></td>
                    <td><a href="asignar.php?user=Juan" class="btn btn-success">Asignar Tarea</a></td>
                </tr>
                <!-- ... -->
            </tbody>
            <div class="d-flex justify-content-end">
                <a href="salir.php" class="btn btn-danger mt-3">Salir</a>
            </div>
        </table>
    </div>
</body>
</html>
