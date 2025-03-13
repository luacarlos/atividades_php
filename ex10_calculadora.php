<?php

class Calculadora {
    public $numA;
    public $numB;

    public function dividir($numA, $numB) {
        if ($numB > 0) {
            $res = $numA / $numB;
            return $res;
        } elseif ($numB <= 0 && $numA > 0) {
            echo "!ERRO!... O Valor B deve ser maior que 0.";
        }
    }
}

$operacao = new Calculadora();
echo $operacao->dividir(10, 5);

?>
