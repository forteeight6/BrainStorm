<?php
//trait: https://www.php.net/manual/pt_BR/language.oop5.traits.php

trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>