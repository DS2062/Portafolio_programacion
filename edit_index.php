<?php

include "controller/conn.php";

$id = $_GET["id"];
$sql = $conn->query("select * from comentarios where id = $id")

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>editar comentario</title>
</head>

<body>
    <div class="container-fluid row coments">
        <form class="col-4 m-auto" method="POST">
            <h1 class="leave_coments">Editar comentario</h1>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controller/edit_user.php";
            while ($edit_comment = $sql->fetch_object()) { ?>
                <div class="mb-3"><!-- input email -->
                    <label for="i_email" class="form-label">Modificar E-mail</label>
                    <input type="email" class="form-control" name="i_email" maxlength="255" aria-describedby="email"
                        value="<?= $edit_comment->email ?>">
                    <div class="form-text">No compartiremos tu direccion E-mail con nadie.</div>
                </div>
                <div class="mb-3"><!-- input nom -->
                    <label for="i_nma" class="form-label">Modificar Nombre</label>
                    <input type="text" class="form-control" name="i_nom" maxlength="255" aria-describedby="nom"
                        value="<?= $edit_comment->nombre ?>">
                </div>
                <div class="mb-3"><!-- input ape -->
                    <label for="i_ape" class="form-label">Modificar Apellido</label>
                    <input type="text" class="form-control" name="i_ape" maxlength="255" aria-describedby="ape"
                        value="<?= $edit_comment->apellido ?>">
                </div>
                <div class="mb-3"><!-- input nomu -->
                    <label for="i_nmu" class="form-label">Modificar Nombre de Usuario</label>
                    <input type="text" class="form-control" name="i_nmu" maxlength="255" aria-describedby="nomu"
                        value="<?= $edit_comment->nombre_usuario ?>">
                    <div class="form-text">Solo tu nombre de usuario sera visible.</div>
                </div>
                <div class="mb-3"><!-- text area crear comentario -->
                    <label for="text_a" class="form-label">Modificar Comentario</label>
                    <textarea class="form-control" name="text_a" maxlength="1000" rows="3"><?= $edit_comment->comentario ?>
                    </textarea>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary" name="btn_update" value="Enviado">Guardar
                        cambios</button><!-- btn send comment -->
                </div>
            </form>
        <?php } ?>
</body>

</html>