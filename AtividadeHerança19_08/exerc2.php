<?php

class Animal {
    private $nome;
    private $raca;

    
    public function __construct($nome = "", $raca = "") {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }

    public function caminha() {
        return "O animal está se movimentando lentamente.";
    }
}

class Cachorro extends Animal {
    public function late() {
        return "O cachorro está latindo: Woof Woof!";
    }
}

class Gato extends Animal {
    public function mia() {
        return "O gato está miando: Meow!";
    }
}

$dog = new Cachorro("Thor", "Labrador");
$cat = new Gato("Luna", "Siamês");

echo $dog->getNome() . " - " . $dog->late() . "<br>";
echo $cat->getNome() . " - " . $cat->mia() . "<br>";
echo $dog->caminha() . "<br>";
echo $cat->caminha() . "<br>";
?>

<br>
<br>


<?php

class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    public function __construct($nome, $idade, $dinheiro) {
        parent::__construct($nome, $idade);
        $this->dinheiro = $dinheiro;
    }

    public function fazCompras() {
        echo $this->nome . " está comprando roupas de grife com R$" . $this->dinheiro . "<br>";
    }
}


class Pobre extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    public function trabalha() {
        echo $this->nome . " está trabalhando em um restaurante.<br>";
    }
}


class Miseravel extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    public function mendiga() {
        echo $this->nome . " está pedindo ajuda nas ruas.<br>";
    }
}

$rica = new Rica("Beatriz", 35, 150000.0);
$pobre = new Pobre("Lucas", 28);
$miseravel = new Miseravel("Paulo", 50);

$rica->fazCompras();
$pobre->trabalha();
$miseravel->mendiga();
?>

