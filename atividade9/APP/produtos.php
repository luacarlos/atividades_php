<?php

namespace App\Models;

class Produto {
    public $nome;
    public $descricao;

    public function __construct($nome, $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
}

?>
