<?php
//fonte: http://www.mauricioprogramador.com.br/posts/copy-como-copiar-arquivos-no-php

$arquivo_origem = "pasta/arquivo.txt";
$arquivo_destino = "copia/arquivo.txt";

if(copy($arquivo_origem, $arquivo_destino))
{
    echo 'Arquivo copiado com Sucesso.';
}
else
{
    echo 'Erro ao copiar arquivo.';
}

?>