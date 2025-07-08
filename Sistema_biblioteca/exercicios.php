<?php 

class Livro {
    // Atributos privados Livro
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;

    // Construtor
    public function __construct(string $titulo = "", string $autor = "", int $anoPublicacao = 0, bool $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }

    // acesso para o título
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    // autor
    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    // ano de publi
    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao(int $ano): void {
        $this->anoPublicacao = $ano;
    }

    // Métodos de acesso para a disponibilidade
    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }

    // info livro
    public function exibirInformacoes(): void {
        echo "Título: " . $this->titulo . PHP_EOL;
        echo "Autor: " . $this->autor . PHP_EOL;
        echo "Ano de Publicação: " . $this->anoPublicacao . PHP_EOL;
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . PHP_EOL;
    }
}

// output(saída)
$exemploLivro = new Livro("Em Busca de Mim", "Viola Davis", 2022, true);
$exemploLivro->exibirInformacoes();

?>
