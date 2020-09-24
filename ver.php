<?php

  include __DIR__ . "/includes/dados.php";
  include __DIR__ . "/includes/layout-functions.php";
  include __DIR__ . "/includes/layout/head.php";

  $estilo_escolhido = isset($_GET['estilo']) ? $_GET['estilo'] : null;

  include __DIR__ . "/includes/layout/header.php";
    // operador ternario(coalesce) do php
    // faz a mesma coisa que o if else a baixo
    $codigoX = $_GET['codigo'] ?? -1;

    //if (isset($_GET['codigo'])) 
    //{

     //   $codigoX = $_GET['codigo'];

    //} else 
    //{

    //    $codigoX = -1;

    //}
    

    $estilos = listar_estilos();

    $album = recuperar_album($codigoX);

?>
<!doctype html>
<html lang="pt-br">

<body>

<main role="main">

    <?php if ($album): ?>

    <?=criar_jumbotron(
        $album['titulo'], 
        $album['descricao'], 
        $estilos)
    ?>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    Lista de Músicas
                </div>
            </div>
    <?php else: ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">Álbum não encontrado</div>
            </div>
        </div>

    <?php endif; ?>
</main>
    <?php include __DIR__ . "/includes/layout/footer.php"; ?>
</body>
</html>