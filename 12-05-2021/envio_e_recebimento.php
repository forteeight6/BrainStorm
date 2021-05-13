<?php
//Escreva um objeto que insira um valor dentro dele e o salve dentro de um arquivo;
//Escreva um objeto que recupere os dados de um objeto que esteja savo dentro de um arquivo;

class Template
{
    public function salvarTemplate($template)
    {
        file_put_contents("dados.save", $template, FILE_APPEND);
    }
}


$teste = new Template;

$teste->salvarTemplate("Testando 1 2 3");

echo $teste->file_get_contents("dados.save");

?>