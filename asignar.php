<?php
// Obtén el nombre del usuario del parámetro GET
$usuario = $_GET['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Tarea a <?php echo $usuario; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Asignar Tarea a <strong><?php echo $usuario; ?></strong></h1>
        <form action="submit_task.php" method="post">
            <input type="hidden" name="user" value="<?php echo $usuario; ?>">
            <div class="mb-3">
                <label for="task" class="form-label">Tarea</label>
                <textarea class="form-control" id="task" name="task" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Asignar Tarea</button>
        </form>
    </div>
</body>
</html>
