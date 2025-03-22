<?php

if (!empty($_POST["btn_update"])) {
    if (!empty($_POST["i_email"]) and !empty($_POST["i_nom"]) and !empty($_POST["i_ape"]) and !empty($_POST["i_nmu"]) and !empty($_POST["text_a"]))
    {
        $id = $_POST["id"];
        $nombre = $_POST["i_nom"];
        $apellido = $_POST["i_ape"];
        $nombre_usuario = $_POST["i_nmu"];
        $email = $_POST["i_email"];
        $comentario = $_POST["text_a"];
        $fecha = date("Y-m-d");

        $sql = $conn->query("update comentarios set nombre='$nombre', apellido='$apellido', nombre_usuario='$nombre_usuario', email='$email', comentario='$comentario' where id=$id ");
        if ($sql == 1) {
           header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar.</div>";
        }

    }else{
        echo "<div class='alert alert-danger'>Habian casillas vacias.</div>";
    }
}
?>