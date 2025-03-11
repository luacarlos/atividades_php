<?php

class Animal {
    public function fazerSom() {
        return "som: ";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au-Au!" . "<br>";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau-Miau!" . "<br>";
    }
}

$coragem = new Cachorro();
$garfield = new Gato();


echo $coragem->fazerSom();
echo $garfield->fazerSom();
?>
