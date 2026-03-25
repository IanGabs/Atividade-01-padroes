<?php
class EquipeEsport
{
    private $nome;
    private $numeroCampeonatosVencidos;
    private $valorTotalPremiacoes;
    private $dataEstreia;

    public function __construct($nome, $numeroCampeonatosVencidos, $valorTotalPremiacoes, $dataEstreia)
    {
        $this->nome = $nome;
        $this->numeroCampeonatosVencidos = $numeroCampeonatosVencidos;
        $this->valorTotalPremiacoes = $valorTotalPremiacoes;
        $this->dataEstreia = $dataEstreia;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNumeroCampeonatosVencidos()
    {
        return $this->numeroCampeonatosVencidos;
    }

    public function setNumeoCampeonatosVencidos($numeroCampeonatosVencidos)
    {
        $this->numeroCampeonatosVencidos = $numeroCampeonatosVencidos;
    }

    public function getValorTotalPremiacoes()
    {
        return $this->valorTotalPremiacoes;
    }

    public function setValorTotalPremiacoes($valorTotalPremiacoes)
    {
        $this->valorTotalPremiacoes;
    }

    public function getDataEstreia()
    {
        return $this->dataEstreia;
    }

    public function setDataEstreia($dataEstreia)
    {
        $this->dataEstreia = $dataEstreia;
    }

    public function registrarCampeonatoVencido($valorPremio)
    {
        $this->numeroCampeonatosVencidos++;
        $this->atualizarValorTotalPremiacoes($valorPremio);
    }

    public function atualizarValorTotalPremiacoes($valor)
    {
        $this->valorTotalPremiacoes += $valor;
    }

    public function verificarAnoEstreia()
    {
        $anoAtual = date("Y");

        if($this->dataEstreia == $anoAtual)
            {
                return "Equipe novata.";
            }
            else
            {
                return "Equipe Veterana";
            }
    }

    public function imprimir()
    {
        echo "Nome da Equipe: " . $this->nome . "<br>";
        echo "Campeonatos Vencidos: " . $this->numeroCampeonatosVencidos . "<br>";
        echo "Total de Premiações: R$ " . $this->valorTotalPremiacoes . "<br>";
        echo "Data de Estreia: " . $this->dataEstreia . "<br>";
        echo "Status: " . $this->verificarAnoEstreia() . "<br>";
    }
}
?>