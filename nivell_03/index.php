<?php

include_once 'inicicine.php';

?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pelis</title>
</head>

<body>
    <div class="container">

    <?php  
                echo '<h1>'. $entradadadescinema1->nomsala.'</h1>';
                echo '</br>';
                echo '<h2>'.$entradadadescinema1->poblacio.'</h2>';
                echo '</br>';
    ?>
        <div class="row">
            <?php


            foreach ($entradadadescinema1->pelicules as $peli) {
                echo '
        <div class="col-3">
        <div class="card-group">
        <div class="card mt-3 text-center bg-info border-dark w-auto">';
                echo '<img class="card-img-top  bg-info " src="https://picsum.photos/200" alt="Imagen random de lorempicsum">';
                echo '<div class="card-body">';
                echo '<h4 class="card-title text-white  bg-info  mb-3">' . $peli->nompeli . '</h4>';
                echo '<p class="card-text text-white  bg-info  mb-3">' . $peli->duracio . ' minuts</p>';
                echo '<p class="card-text text-white  bg-info  mb-3">Director: ' . $peli->director . '</p>';
                echo '<a href="#" class="btn btn-primary">Detalls</a>';
                echo '</div>';
                echo '</div></div></div>';
            }
            ?>

        </div>
    </div>
</body>

</html>