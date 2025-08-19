<?php

class Ingresso {
    public $valor;

    public function imprimeValor() {
        echo "Preço do ingresso: R$ $this->valor <br>";
    }
}

class Normal extends Ingresso {
    public function tipoIngresso() {
        echo "Ingresso Comum";
    }
}

class VIP extends Ingresso {
    public $valorAdicional;

    public function imprimeValor() {
        $valorTotal = $this->valor + $this->valorAdicional;
        echo "Preço do ingresso VIP: R$ $valorTotal <br>";
    }
}

class CamaroteInferior extends VIP {
    public $localizacao;

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }
}

class CamaroteSuperior extends VIP {
    public $valorAdicionalSuperior;

    public function imprimeValor() {
        $valorTotal = $this->valor + $this->valorAdicional + $this->valorAdicionalSuperior;
        echo "Preço do ingresso Camarote Superior: R$ $valorTotal <br>";
    }
}

$normal = new Normal();
$normal->valor = 60;
$normal->tipoIngresso();
$normal->imprimeValor();
echo "<br>";

$vip = new VIP();
$vip->valor = 60;
$vip->valorAdicional = 40;
$vip->imprimeValor();
echo "<br>";

$camaroteInferior = new CamaroteInferior();
$camaroteInferior->valor = 60;
$camaroteInferior->valorAdicional = 40;
$camaroteInferior->setLocalizacao("Área Premium - Lado B");
$camaroteInferior->imprimeValor();
echo "Localização: " . $camaroteInferior->getLocalizacao();
echo "<br><br>";

$camaroteSuperior = new CamaroteSuperior();
$camaroteSuperior->valor = 60;
$camaroteSuperior->valorAdicional = 40;
$camaroteSuperior->valorAdicionalSuperior = 70;
$camaroteSuperior->imprimeValor();

?>
