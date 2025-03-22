<?php

if (!empty($_GET["id"]) ){
    $id =$_GET["id"];
    $sql = $conn->query("delete from comentarios where id=$id");

    if ($sql == 1) {
        #header("location:index.php");
        ?>
        <meta http-equiv="refresh" content="0;url=index.php">
        <?php
     } else {
         echo "<div class='alert alert-danger'>Error al borrar el comentario.</div>";
     }

};

?>