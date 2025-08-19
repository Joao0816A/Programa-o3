<?php

class Imovel {
    public $endereco;
    public $preco;

    public function imprimePreco() {
        echo "Localização: $this->endereco <br>";
        echo "Valor base: R$ $this->preco <br>";
    }
}

class Novo extends Imovel {
    public $adicional;

    public function precoFinal() {
        return $this->preco + $this->adicional;
    }
}

class Velho extends Imovel {
    public $desconto;

    public function precoFinal() {
        return $this->preco - $this->desconto;
    }
}

$novo = new Novo();
$novo->endereco = "Avenida Central, 1540";
$novo->preco = 450000;
$novo->adicional = 75000;
$novo->imprimePreco();
echo "Preço Final (Imóvel Novo): R$ " . $novo->precoFinal();
echo "<br><br>";

$velho = new Velho();
$velho->endereco = "Travessa das Flores, 89";
$velho->preco = 380000;
$velho->desconto = 45000;
$velho->imprimePreco();
echo "Preço Final (Imóvel Antigo): R$ " . $velho->precoFinal();

?>
