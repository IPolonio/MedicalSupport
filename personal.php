
<?php 
    

<?php














?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Estado de Presencia</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Estado de Presencia <strong>: Maria</strong></h1>

        <form action="personal.php" method="post" onsubmit="return showConfirmation()">

        <form action="personal.php" method="post"  onsubmit="return showConfirmation()">

            <div class="form-check">
                <input class="form-check-input" type="radio" name="presence" id="present" value="present" onclick="hideJustification()">
                <label class="form-check-label" for="present">
                    Presente
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="presence" id="absent" value="absent" onclick="showJustification()">
                <label class="form-check-label" for="absent">
                    Ausente
                </label>
            </div>
            <div class="mb-3" id="justificationPanel" style="display: none;">

                <label for="justification" class="form-label">Justificación de Ausencia</label>
                <textarea class="form-control" id="justification" name="justification" rows="3"></textarea>
                <br>
                <form action="/upload" method="post" enctype="multipart/form-data">
                    <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .gif, .pdf">
                  
                </form>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <div class="d-flex justify-content-end">
                <a href="salir.php" class="btn btn-danger mt-3">Salir</a>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <script>
        function showJustification() {
            document.getElementById('justificationPanel').style.display = 'block';
        }

        function hideJustification() {
            document.getElementById('justificationPanel').style.display = 'none';
        }

        function showConfirmation() {
            alert('El administrador ha recibido la solicitud correctamente.');
            return true;
        }
    </script>
</body>

</html>