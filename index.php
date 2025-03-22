<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Proyecto Portafolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<header>
    <div id="id_inicio"></div>
    <ul class="header_ul">
        <div class="logo">
            <img src="assets/logo/cocodrilo.png" alt="cocodrilo.jpg" height="65px">
        </div>
        <li class="header_li"><a href="https://github.com/DS2062">Sobre mi</a></li>
        <li class="header_li"><a href="#id_sugerir">Sugerencias</a></li>
        <li class="header_li"><a href="#id_inicio">Inicio</a></li>
    </ul>
</header>
<body>
    <div> <!-- resumen -->
        <h1>Tejón de la miel (Mellivora capensis)</h1>
        <p>
            Es un mamífero carnívoro que habita en África, Oriente Medio y el subcontinente indio.
            A pesar de su tamaño relativamente pequeño, es un animal conocido por su valentía, tenacidad y resistencia.
        </p>
    </div>
    <div> <!-- caracteristicas -->
        <h1>Características físicas</h1>
        <div class="tejon">
            <img src="assets/img/tejon.jfif" alt="tejon_de_la_miel.jpg" height="200px">
        </div>
        <ul class="lista">
            <li>Tamaño: Mide entre 60 y 77 cm de longitud, con una cola de 23 a 30 cm.</li>
            <li>Peso: Los machos adultos pesan entre 9 y 14 kg, mientras que las hembras son más pequeñas.</li>
            <li>Piel: Posee una piel gruesa y flexible que le protege de mordeduras y picaduras.</li>
            <li>Garras: Tiene garras fuertes y afiladas que utiliza para cavar, trepar y defenderse.</li>
            <li>Tiene una gran resistencia al veneno de serpientes.</li>
        </ul>
    </div>
    <div> <!-- Comportamiento -->
        <h1>Comportamiento</h1>
        <p>
            Es un animal solitario y nocturno, aunque a veces se le puede ver durante el día.
            Habita en una variedad de entornos, desde bosques y sabanas hasta desiertos y montañas.
            Es omnívoro, su dieta incluye miel, insectos, pequeños mamíferos, reptiles, aves y frutas.
            Es conocido por su valentía y agresividad, y no duda en enfrentarse a animales mucho más grandes que él.
            Su nombre se debe a su gusto por la miel, siendo capaz de enfrentarse a colmenas de abejas para obtenerla.
        </p>
    </div>
    <div> <!-- Dieta -->
        <h1>Dieta</h1>
        <p>Su dieta pasa desde grandes presas a, en ocasiones, carroña, aunque su plato preferido lo encuentra
            destrozando colmenas. Su costumbre de saquear colmenas para alimentarse de miel les ha llevado a enfrentarse
            con los apicultores, que a veces les disparan, les ponen trampas o los envenenan. Pese a su gusto por la
            miel es principalmente carnívoro y devora cualquier animal, incluyendo roedores, aves, pequeños antílopes,
            lagartos, tortugas, ranas, serpientes e invertebrados. Comen también alimentos vegetales como las bayas,
            raíces y bulbos.
            Para cazar roedores como los jerbos y ardillas de tierra, excavan sus madrigueras. Son capaces de
            alimentarse de tortugas, sin dificultad, debido a sus poderosas mandíbulas. Puede matar a las serpientes
            venenosas, como las cobras, o las más grandes; se registró, por ejemplo, como un ratel mató y se comió una
            pitón de 3 m de longitud. Devoran todas las partes de sus presas, incluyendo la piel, pelo, plumas, carne y
            huesos, sosteniendo su comida con sus patas delanteras. Cuando buscan alimentos vegetales, levantan piedras
            o rompen la corteza de los árboles.</p>
    </div>
    <div> <!-- Distribucion -->
        <h1>Distribucion</h1>
        <p>
            Está ampliamente distribuido en África, encontrándose en la mayor parte del África subsahariana desde el sur
            de Marruecos y Argelia hasta Sudáfrica. En Asia se encuentra en la península arábiga, Jordania, Palestina,
            sur de Líbano, Irak, Irán occidental, Azerbaiyán, Turkmenistán, Pakistán, India y Nepal.
        </p>
    </div>
    <section> <!-- zona de Notas -->
        <h1 class="leave_coments">Deja un comentario!</h1>
        <div class="container-fluid row coments">
            <form class="col-4" method="POST">
            <?php
                include "controller/conn.php";
                include "controller/new_user.php";
            ?>
                <div class="mb-3"><!-- input email -->
                    <label for="i_email" class="form-label">Direccion de E-mail *</label>
                    <input type="email" class="form-control" name="i_email" maxlength="255" aria-describedby="email">
                    <div class="form-text">No compartiremos tu direccion E-mail con nadie. Los campos
                        requeridos estan marcados *</div>
                </div>
                <div class="mb-3"><!-- input nom -->
                    <label for="i_nma" class="form-label">Nombre *</label>
                    <input type="text" class="form-control" name="i_nom" maxlength="255" aria-describedby="nom">
                </div>
                <div class="mb-3"><!-- input ape -->
                    <label for="i_ape" class="form-label">Apellido *</label>
                    <input type="text" class="form-control" name="i_ape" maxlength="255" aria-describedby="ape">
                </div>
                <div class="mb-3"><!-- input nomu -->
                    <label for="i_nmu" class="form-label">Nombre de Usuario *</label>
                    <input type="text" class="form-control" name="i_nmu" maxlength="255" aria-describedby="nomu">
                    <div class="form-text">Solo tu nombre de usuario sera visible.</div>

                </div>
                <div class="mb-3"><!-- text area crear comentario -->
                    <label for="text_a" class="form-label">Comentario *</label>
                    <textarea class="form-control" name="text_a" maxlength="1000" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_send" value="Enviado">Comentar</button><!-- btn send comment -->
            </form>
            <section class="col-5 comment_zone"><!-- zona de comentarios -->
                <?php
                include "controller\conn.php";
                $sql = $conn->query("select * from comentarios");
                while ($comments = $sql->fetch_object()) { ?>


                    <label for="comment" class="form-label label_nomu"> <?= $comments->nombre_usuario?>&nbsp;</label>
                    <label for="comment" class="form-label label_date"> <?= $comments->fecha?></label>
                    <div class="card">
                        <div class="card-body" id="comment"><?= $comments->comentario?></div>
                    </div>
                    <div class="btn_comment">
                        <a href="edit_index.php?id=<?= $comments->id ?>" class="btn btn-small btn-warning">Editar</a>
                        <a href="" class="btn btn-small btn-danger">Eliminar</a>
                    </div>
                <?php }
                ?>
            </section>
        </div>
    </section>
</body>
<footer> <!-- zona de sugerencias y footer -->
    <div>
        <h4>Sugerir un animal</h4>
        <form action="" class="footer">

            <div class="forms">
                <input type="text" placeholder="Nombre y Apellido">
                <input type="email" placeholder="E-mail">
                <input type="date" placeholder="">
            </div>
            <div class="bt_send">
                <input type="button" value="Enviar">
            </div>

        </form>
    </div>
    <div id="id_sugerir"></div>
</footer>

</html>