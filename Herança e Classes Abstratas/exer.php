<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;
    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro está se movendo.<br>";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta está se movendo.<br>";
    }
}

$carro = new Carro();
$bicicleta = new Bicicleta();

$carro->mover();
$bicicleta->mover();
?>