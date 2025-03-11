<?php

interface Movimentavel {
    public function mover();
}

class Carro implements Movimentavel {
    public function mover() {
        echo "O carro está se movendo!\n";
    }
}

class Bicicleta implements Movimentavel {
    public function mover() {
        echo "A bicicleta está se movendo!\n";
    }
}

$carro = new Carro();
$carro->mover();
$bicicleta = new Bicicleta();
$bicicleta->mover();
?>
