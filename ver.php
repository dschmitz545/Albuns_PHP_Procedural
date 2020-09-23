<?php

  include __DIR__ . "/includes/dados.php";

  $estilo_escolhido = isset($_GET['estilo']) ? $_GET['estilo'] : null;
  //$b1 = $_GET['b1'];
  //$b2 = $_GET['b2'];
  //index.php?b1=Diego&b2=Schmitz
  //http://localhost:9999/index.php?estilo=samba

?>
<!doctype html>
<html lang="pt-br">
  
<?php include __DIR__ . "/includes/layout/head.php"; ?>

<body>

<?php include __DIR__ . "/includes/layout/header.php"; ?>

<?php

    $codigoX = $_GET['codigo'];

?>

<main role="main">

    

      <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                Lista de Músicas
            </div>
        </div>
    </main>
    <?php include __DIR__ . "/includes/layout/footer.php"; ?>
</body>
</html>