<?php
if(!empty($_POST["btn_send"])){
    if (
        !empty($_POST["i_email"]) and !empty($_POST["i_nom"]) and !empty($_POST["i_ape"]) and
        !empty($_POST["i_nmu"]) and !empty($_POST["text_a"])
    ) {
        $nombre = $_POST["i_nom"];
        $apellido = $_POST["i_ape"];
        $nombre_usuario = $_POST["i_nmu"];
        $email = $_POST["i_email"];
        $comentario = $_POST["text_a"];
        $fecha = date("Y-m-d");
        $sql = $conn->query(
            "insert into comentarios(nombre, apellido, nombre_usuario, email, comentario, fecha)
            values('$nombre', '$apellido', '$nombre_usuario', '$email', '$comentario', '$fecha')"
        );
        //echo "<div class='alert alert-success'>Enviado exitosamente.</div>"
        ?>
        <meta http-equiv="refresh" content="0;url=index.php">
        <?php
    } else {
        echo "<div class='alert alert-danger'>Rellena todas las casillas.</div>Rellena todas las casillas.";
    }


}



?>