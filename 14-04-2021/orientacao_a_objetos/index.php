<?php

interface PainelDoAdministrador 
{
    public function logar();
}

class Administrador implements PainelDoAdministrador
{
    public function logar() 
    {
        include 'login_administrador.php';
    }
}

$administrador = new Administrador();

$administrador->logar();

?>