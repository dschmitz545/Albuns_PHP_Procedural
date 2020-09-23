<?php

function criar_jumbotron($titulo, $descricao, array $estilos)
{
    $lista_html = '<p>';
    $lista_html .= '<a href="index.php" class="btn btn-primary my-2">Todos</a>';
    foreach ($estilos as $estilo) {
        $url = 'index.php?estilo=' . $estilo;
        $lista_html .= "<a href=\"$url\">$estilo</a>";
    }
    $lista_html .= '</p>';

    $html = '
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">
                '.$titulo.'
            </h1>
            <p class="lead text-muted">
                '.$descricao.'
            </p>
            '.$lista_html.'
         </div>
    </section>
    ';

    return $html;
}