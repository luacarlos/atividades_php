<?php

class Animal {
    public function fazerSom() {
        return "som: ";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au-Au!" . "<br>"    ;
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau-Miau!" . "<br>";
    }
}

class Zoo{
    public function barulho($animal) {
        return $animal->fazerSom();
    }
}

$coragem = new Cachorro();
$garfield = new Gato();
$zoologico = new Zoo();

echo $zoologico->barulho($coragem);
echo $zoologico->barulho($garfield);
?>
