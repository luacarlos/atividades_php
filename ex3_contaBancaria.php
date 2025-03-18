<?php

class ContaBancaria {
    public $titular;
    protected $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $resultado = $this-> saldo+$valor;
        return "O novo saldo da conta após o depósito é de: " . $resultado . "<br>";
    }

    public function sacar($valor){
        if ($this->saldo > 0 && $valor <= $this->saldo){
            $resultado= $this-> saldo-$valor;
            return "O novo saldo da conta após o saque é de: " . $resultado . "<br>";
        }
        else{
            return "Não foi possível realizar o saque." . "<br>";
        }
    }

    public function consultar() {
        return 'O saldo atual da conta é de:  ' . $this->saldo . "<br>";
    }
}

$contas = new ContaBancaria("Luã", 3200);

echo $contas->depositar(1500);
echo $contas->sacar(2000);
echo $contas->consultar(3200, 1500);
?>
