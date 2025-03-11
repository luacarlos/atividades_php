<?php

class Carro {
    public $marca;
    public $modelo;
    public $anoFabricacao;

    public function __construct($marca, $modelo, $anoFabricacao) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
    }

    public function exibir() {
        return 'O carro é da marca: ' . $this->marca . " Modelo: " . $this->modelo . " Fabricado em: " . $this->anoFabricacao;
    }
}

$novoCarro = new Carro("Nissan", "GTR-R35", 2007);

echo $novoCarro->exibir();
?>
