<?php

abstract class Forma  {
    abstract protected function area();   
}

class Retangulo extends Forma{
    private  $largura;
    private $comprimento;

    public function __construct($largura, $comprimento) {
        $this->largura = $largura;
        $this->comprimento = $comprimento;
    }

    public function area() {
        return $this->largura * $this->comprimento;
    }
}

class Circulo extends Forma{
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function area() {
        return 3.14 * ($this->raio ** 2); 
    }
}

$retangulo = new Retangulo(2,5);
$circulo = new Circulo(3);

echo "Área do retângulo: " . $retangulo->area();
echo "<br>";
echo "Área do circulo: " . $circulo->area();
?>