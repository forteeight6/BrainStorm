<?php

// Class definitions
class Cat {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>