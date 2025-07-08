<?php 

class ObraLiteraria {
    // atributos da obra
    private string $nome;
    private string $escritora;
    private int $anoLancamento;
    private bool $estaDisponivel;

    // Construtor
    public function __construct(string $nome = "", string $escritora = "", int $anoLancamento = 0, bool $estaDisponivel = true) {
        $this->nome = $nome;
        $this->escritora = $escritora;
        $this->anoLancamento = $anoLancamento;
        $this->estaDisponivel = $estaDisponivel;
    }

    // Métodos de acesso para o nome
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    // Métodos de acesso 
    public function getEscritora(): string {
        return $this->escritora;
    }

    public function setEscritora(string $escritora): void {
        $this->escritora = $escritora;
    }

    // Métodos ano de lançamento
    public function getAnoLancamento(): int {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $ano): void {
        $this->anoLancamento = $ano;
    }

    // Métodos disponibilidade
    public function estaDisponivel(): bool {
        return $this->estaDisponivel;
    }

    public function definirDisponibilidade(bool $disponivel): void {
        $this->estaDisponivel = $disponivel;
    }

    // dados da obra
    public function mostrarDetalhes(): void {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Escritora: " . $this->escritora . PHP_EOL;
        echo "Ano de Lançamento: " . $this->anoLancamento . PHP_EOL;
        echo "Está disponível? " . ($this->estaDisponivel ? "Sim" : "Não") . PHP_EOL;
    }
}

// output(saida)
$autobiografia = new ObraLiteraria("Em Busca de Mim", "Viola Davis", 2022, true);
$autobiografia->mostrarDetalhes();

?>
