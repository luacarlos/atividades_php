<?php

namespace App\Controle;

class Usuario {
    public $nome;
    public $login;

    public function __construct($nome, $login) {
        $this->nome = $nome;
        $this->login = $login;
    }
}

?>
