<?php
//Para cada acerto um ponto;
echo "<meta charset='utf8'/>";

$sobremesas = ["Suflê de Goiaba", "Sorvete de Creme Light", "Sorvete de Flocos", "Sorvete de Creme", "Sorvete de Chocolate", "Abacaxi", "Petit Gateau de Doce de Leite", "Petit Gateau de Chocolate", "Petit Gateau de Amêndoas e Limão Siciliano", "Pavê Crocante", "Creme de Papaya", "Cookie com Sorvete", "Cartola", "Brownie de Caramelo", "Bolo Quente", "Brigadeiro de Colher", "Cheesecake", "Cocada Mole com Sorvete", "Pudim de Leite O Melhor do Mundo", "Mousse de Chocolate", "Churros com Doce de Leite Argentino", "Cocada ao Forno", "Brownie de Chocolate", "Trufa de Colher", "Torta de Pavê de Chocolate Truffada", "Torta de Maçã", "Torta de Limão", "Torta de Banana Cremosa"];

$saladas = ["Salada de Carpaccio", "Salada de Caeser de Frango", "Salada Costa Azul", "Salada Verão", "Salada Tropical", "Salada Sertão", "Salada Oriental", "Salada Mucuripe", "Salada Light", "Salada Italiana", "Salada Gourmet", "Salada de Salmão", "Salada de Frutos do Mar", "Salada Caprese Coco Bambu", "Salada Caeser de Camarão"];

$tortas_inteiras = ["Torta Pavê de Chocolate Truffada", "Torta de Maçã", "Torta de Limão Inteira", "Torta de Banana Cremosa Inteira", "Sorvete para Torta Inteira", "O Melhor Pudim do Mundo", "Pavê de Chocolate Inteiro", "Cocada de Forno", "Chessecake Inteiro", "Brownie Grande", "Brownie Gigante"];

$pasteis = ["Pastel Socadinho de Camarão", "Pastel de Queijo", "Pastel de Palmito", "Pastel Lagosta", "Pastel de Filé Mignon", "Pastel de Carne Moída", "Pastel de Carne de Sol", "Pastel de Camarão", "Pastel de Bacalhau"];

$pizzas = ["Pizza Vegetariana", "Pizza Portuguesa", "Pizza de Peperoni", "Pizza Parmegiana de Berinjela", "Pizza Napolitana", "Pizza Mexicana", "Pizza Maguerita", "Pizza Italianíssima", "Pizza de Camarão", "Pizza de Calabresa com Catupiry", "Pizza de Chocolate", "Pizza de Carne de Sol"];

$moquecas = ["Moqueca de Camarão", "Moqueca Frutos do Mar", "Moqueca Cearense Mista", "Moqueca Cearense"];

$lagostas = ["Lagosta Internacional", "Lagosta Imperial", "Lagosta Grelhada", "Lagosta Gratinada", "Lagosta com Arroz dos Mares", "Lagosta Coco Bambu", "Lagosta a Thermidor"];

$kids = ["Kid's Peixe Parmegiana", "Kid's Peixe", "Kid's Pasta", "Kid's Parmegiana", "Kid's Frango", "Kid's Filé"];

$hamburguer = ["Sanduiche de Carne de Sol", "Hambúrguer de Salmão Filadélfia", "Sanduiche de Camarão", "Cheeseburguer com Fritas Rústicas Trufadas", "Cheeseburguer", "Cheeseburguer com Fritas"];

$frutos_do_mar = ["Rede de Pescador", "Arroz de Polvo Caldoso", "Polvo e Provençal", "Frutos do Mar à Italiana", "Arroz de Mariscos"];

$frango = ["Robata de Frango", "Paillard de Frango", "Frango Primavera", "Frango Desossado", "Filé de Frango com Estragão", "Filé de Frango à Parmegiana"];

$escondidinhos = ["Escondidinho de Salmão", "Escondidinho de Palmito", "Escondidinho de Carne Moída", "Escondidinho de Carne de Sol", "Escondidinho de Caranguejo", "Escondidinho de Camarão", "Escondidinho de Bacalhau"];

$entradas = ["Escondidinho de Camarão", "Escondidinho de Bacalhau", "Pastel de Queijo em Tiras", "Mini Carne de Sol", "Espetinho de Picanha", "Escondidinho de Camarão", "Escondidinho de Bacalhau", "Empada de Camarão", "Cubos de Peixes Crocantes", "Crostine de Salmão", "Coquetel de Camarão", "Casquinha de Carangueijo", "Carpaccio", "Camarão Recife", "Camarão na Manteiga Acebolado", "Camarão ao forno", "Camarão ao Catupiry", "Caldo de Peixe", "Caldo de Camarão", "Batata Rústica Coco Bambu", "Pipoca de Camarão", "Empada de Queijo do Reino", "Polvo ao Azeite de Tomates Secos", "Mini Croquete de Bacalhau", "Lula à Italiana", "Lula à Daré", "Filé de Camarão no Alho", "Filé com Fritas", "Isca de Peixe", "Espetinho de Queijo Coalho", "Espetinho de Camarão", "Filé aos Quatro Queijos", "Camarão no Azeite de Tomate Seco", "Camarão Crocante", "Fílé aos Quatro Queijos", "Entrada de Filé ao Molho Madeira", "Dadinhos de Tapioca", "Crostine de Camarão", "Croquete de Bacalhau(4 unidades)", "Couvert Especial", "Ceviche de Salmão", "Cesta de Pães e Torradas", "Carne de Sol", "Camarão Jangadeiro", "Camarão a Milanesa", "Batata Frita Especial"];

$dietas_especiais = ["Ratatouille", "Penne com Cogumelos", "Lasanha de berinjela"];

$carnes = ["Paillard de Filé Mignon", "Strogonoff de Filé Mignon", "Steak Coco Bambu", "Picanha Coco Bambu", "Filé Três Pimentas", "Filé Paris", "Filé com Ervas", "Picadinho Filé Coco Bambu", "Filé à Paulista", "Filé à Parmegiana", "Filé aos Quatro Queijos", "Filé ao Molho de Mostarda", "Filé ao Molho Madeira", "Filé ao Funghi Secchi", "Carne de Sol Coco Bambu", "Costela Suina", "Feijoada Completa", "Carne de Sol do Sertão", "Carne de Sol do Maranhão"];

$camaroes = ["Camarão Light", "Camarão Jangadeiro", "Camarão Florentina", "Camarão Flambado", "Camarão em Crosta", "Camarão do Sertão", "Camarão Iracema", "Camarão Beira Mar", "Camarão ao Thermidor", "Camarão ao Curry", "Arroz de Camarão", "Camarão à Delícia", "Camarão aos Quatro Queijos", "Camarão ao Coco", "Camarão Tropical", "Camarão Praia de Tamandaré", "Camarão Provençal", "Camarão Mucuripe", "Camarão Mediterrâneo", "Camarão Jurerê", "Camarão Ipanema", "Camarão Internacional", "Camarão Imperial", "Camarão Ilha Bela", "Camarão Grelhado", "Camarão em Crosta", "Camarão Praia de Olinda", "Camarão Praia de Itamaracá", "Camarão Coco Bambu", "Camarão Canoa Quebrada", "Camarão Búzios", "Camarão Praia de Boa Viagem", "Camarão ao Forno", "Camarão ao Catupiry", "Camarão à Grega", "Bobo de Camarão"];

$peixes = ["Tilápia à Meunière", "Tilápia Pescador", "Tilápia à Parmegiana", "Tilápia Coco Brasil", "Peixe Pizzaiolo", "Peixe c/ Crosta de Pão", "Peixe Praiano", "Peixe à Delícia", "Peixe ao Molho de Coco", "Peixe Crocante", "Peixe Jeri", "Peixada Cearense", "Peixe Inteiro", "Peixe ao Molho de Camarão", "Peixe Amalfitana", "Peixe Meunière", "Peixe à Belle Meunière", "Bacalhau com Natas", "Bacalhau à Espanhola", "Bacalhau em Crosta", "Salmão à Matias Beck", "Salmão em Crosta de Gergelim", "Peite Light", "Sirigado Mix de Pimentões", "Sirigado com Camarões", "Sirigado ao Forno", "Sirigado Meunière", "Sirigado à Belle Meunière", "Sirigado Pirarucu Meunière", "Pirarucu Mix de Pimentões", "Pirarucu de Forno", "Pirarucu à Belle Meunière", "Pirarucu  com Camarões"];

$cardapio = [$sobremesas, $saladas, $tortas_inteiras, $pasteis, $pizzas, $moquecas, $lagostas, $kids, $hamburguer, $frutos_do_mar, $frango, $escondidinhos, $entradas, $dietas_especiais, $carnes, $camaroes, $peixes];

$vetor = ['SOBREMESA', 'SALADAS', 'TORTAS INTEIRAS', 'PASTEIS', 'PIZZAS', 'MOQUECAS', 'LAGOSTAS', 'KIDS', 'HAMBURGUER', 'FRUTOS DO MAR', 'FRANGO', 'ESCONDIDINHOS', 'ENTRADAS', 'DIETAS ESPECIAIS', 'CARNES', 'CAMARÕES', 'PEIXES'];

$total_de_itens = null;
for($linha=0;$linha<count($cardapio); $linha+=1)
{
    $cardapio2[$vetor[$linha]] = $cardapio[$linha];
    $total_de_itens += count($cardapio[$linha]);
}

//echo $total_de_itens;
//echo "<pre>";
//print_r($cardapio2);
//echo "</pre>";

?>