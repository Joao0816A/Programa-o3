<?php 

class ObraLiteraria {
    // Definição dos atributos da obra
    private string $nome;
    private string $escritora;
    private int $anoLancamento;
    private bool $estaDisponivel;

    // Construtor básico com parâmetros padrão
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

    // Métodos de acesso para a escritora
    public function getEscritora(): string {
        return $this->escritora;
    }

    public function setEscritora(string $escritora): void {
        $this->escritora = $escritora;
    }

    // Métodos de acesso para o ano de lançamento
    public function getAnoLancamento(): int {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $ano): void {
        $this->anoLancamento = $ano;
    }

    // Métodos de acesso para disponibilidade
    public function estaDisponivel(): bool {
        return $this->estaDisponivel;
    }

    public function definirDisponibilidade(bool $disponivel): void {
        $this->estaDisponivel = $disponivel;
    }

    // Mostrar os dados da obra
    public function mostrarDetalhes(): void {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Escritora: " . $this->escritora . PHP_EOL;
        echo "Ano de Lançamento: " . $this->anoLancamento . PHP_EOL;
        echo "Está disponível? " . ($this->estaDisponivel ? "Sim" : "Não") . PHP_EOL;
    }
}

// Exemplo de uso da classe
$autobiografia = new ObraLiteraria("Em Busca de Mim", "Viola Davis", 2022, true);
$autobiografia->mostrarDetalhes();

?>
