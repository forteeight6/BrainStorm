<!--não consegui usar o método getHtml();-->
<?php

//Declara a interface 'iTemplate'

interface iTemplate
{

    public function setVariable($name, $var);

    public function getHtml($template);
}

//Implementa a interface
//Isso funcionará

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
        //print_r($this->vars[$name]);
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value)
        {
            $template = str_replace('{'.$name.'}', $value, $template);
        }

        return $template;
    }
}

$a = '{1}';
$b = [2, 3, 4];
$c = 5;

$teste = new Template;

$teste->setVariable($a, $b);

?>