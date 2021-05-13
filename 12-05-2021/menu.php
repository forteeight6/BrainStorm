<?php
    require 'gerador_de_div.php';

    //$id = 'menu';
    $class = 'items';
    //$item = 'Cadastrar';

    $items = ['Cadastrar', 'Logar', 'Noticias'];

    $newDivs = new geradorDivs();

    $newDivs->choice('menuMetro');

    $newDivs->newDivs($items, $class);

    
    
?>

