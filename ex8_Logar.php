<?php

trait Logar{
    public function logavel(){
        return "logando...";
    }
}

class Administrador extends Logar{
    public $nome;
    public $login;

    public function __construct($nome, $login) {
        $this->nome = $nome;
        $this->login = $login;
    }

    

}



?>