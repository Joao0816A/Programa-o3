<?php

class Animal {
    public function caminhar() {
        echo "Está correndo pelo quintal <br>";
    }
}

class Cachorro extends Animal {
    public function latir() {
        echo "O cachorro latiu: Ruff Ruff <br>";
    }
}

class Gato extends Animal {
    public function miar() {
        echo "O gato miou: Nyaa <br>";
    }
}

class Pessoa {
    public function comer() {
        echo "Tomou café da manhã <br>";
    }
}

class Rica extends Pessoa {
    public function comprar() {
        echo "Comprou joias caríssimas <br>";
    }
}

class Pobre extends Pessoa {
    public function trabalhar() {
        echo "Foi trabalhar na construção civil <br>";
    }
}

class Miseravel extends Pessoa {
    public function mendigar() {
        echo "Pediu comida no mercado <br>";
    }
}

$cachorro = new Cachorro();
$cachorro->caminhar();
$cachorro->latir();

$gato = new Gato();
$gato->caminhar();
$gato->miar();

echo "<br>";

$rica = new Rica();
$rica->comer();
$rica->comprar();

$pobre = new Pobre();
$pobre->comer();
$pobre->trabalhar();

$miseravel = new Miseravel();
$miseravel->comer();
$miseravel->mendigar();

?>
