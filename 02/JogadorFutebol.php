<?php
class JogadorFutebol
{
    private $nome;
    private $clube;
    private $numeroCartoesAmarelos;
    private $numeroCartoesVermelhos;

    public function __construct($nome, $clube, $numeroCartoesAmarelos, $numeroCartoesVermelhos)
    {
        $this->nome = $nome;
        $this->clube = $clube;
        $this->numeroCartoesAmarelos = $numeroCartoesAmarelos;
        $this->numeroCartoesVermelhos = $numeroCartoesVermelhos;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_clube()
    {
        return $this->clube;
    }

    public function set_clube($clube)
    {
        $this->clube = $clube;
    }

    public function get_numeroCartoesAmarelos()
    {
        return $this->numeroCartoesAmarelos;
    }

    public function set_numeroCartoesAmarelos($numeroCartoesAmarelos)
    {
        $this->numeroCartoesAmarelos = $numeroCartoesAmarelos;
    }

    public function get_numeroCartoesVermelhos()
    {
        return $this->numeroCartoesVermelhos;
    }

    public function set_numeroCartoesVermelhos($numeroCartoesVermelhos)
    {
        $this->numeroCartoesAmarelos = $numeroCartoesVermelhos;
    }

    public function registrarNumeroCartoesAmarelos()
    {
        $this->numeroCartoesAmarelos++;
    }

    public function registrarNumeroCartoesVermelhos()
    {
        $this->numeroCartoesVermelhos++;
    }

    public function verificarVinculoClube()
    {
        return !empty($this->clube);
    }

    public function imprimir()
    {
        $vinculo = $this->verificarVinculoClube() ? $this->clube : "Sem clube";
        echo "Nome: " . $this->nome . "<br>";
        echo "Clube: " . $vinculo . "<br>";
        echo "Cartões Amarelos: " . $this->numeroCartoesAmarelos . "<br>";
        echo "Cartões Vermelhos: " . $this->numeroCartoesVermelhos . "<br>";
    }
}
?>