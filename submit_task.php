
<div></div>

<?php

require_once('./Libreria/Principal.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = new Task();
    $task->user = $_POST["user"];

    $tarea = $_POST["task"];
    $tarea = array('id' => hash('md5', GUID()), 'task' => $tarea);

    $path = DATABASE . '/assigned_tasks';

    if (!is_dir($path)) {
        mkdir($path);
    }

    $usertask = "$path/$task->user.json";

    // var_dump($usertask);

    if (!is_file($usertask)) {
        $task->tasks = array($tarea);
    }
    else {
        $task = json_decode(file_get_contents($usertask)); 
        array_push($task->tasks, $tarea);
    }

    $data = json_encode($task);

    file_put_contents($usertask, $data);

    echo "Tarea asignada a " . $task->user . ": " . $tarea['task'];
}
?>
    <div class="d-flex justify-content-end">
        <a href="panel.php" class="btn btn-primary mt-3">Volver</a>

                <a href="salir.php" class="btn btn-danger mt-3">Salir</a>
            </div>
            <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">