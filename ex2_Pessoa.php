<?php

class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function falar() {
        return 'Olá! Me chamo ' . $this->nome . " tenho " . $this->idade . " anos e sou do sexo  " . $this->sexo;
    }
}

$people = new Pessoa("Neymar", 32, "masculino");

echo $people->falar();
?>
