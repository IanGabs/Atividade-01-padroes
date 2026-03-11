<?php
class Veiculo
{
    private $nome;
    private $montadora;
    private $anoFabricacao;
    private $anoModelo;
    private $cor;
    private $placa;
    private $valorIPVA;
    private $IPVAPago;

    public function __construct($nome, $montadora, $anoFabricacao, $anoModelo, $cor, $placa, $valorIPVA)
    {
        $this->nome = $nome;
        $this->montadora = $montadora;
        $this->anoFabricacao = $anoFabricacao;
        $this->anoModelo = $anoModelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->valorIPVA = $valorIPVA;
        $this->IPVAPago = false;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getMontadora(){
        return $this->montadora;
    }

    public function setMontadora($montadora){
        $this->montadora = $montadora;
    }

    public function getAnoFabricacao(){
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao){
        $this->anoFabricacao = $anoFabricacao;
    }

    public function getanoModelo(){
        return $this->anoModelo;
    }

    public function setanoModelo($anoModelo){
        $this->anoModelo = $anoModelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getValorIPVA(){
        return $this->valorIPVA;
    }

    public function setValorIPVA($valorIPVA){
        $this->valorIPVA = $valorIPVA;
    }

    public function getIPVAPago(){
        return $this->IPVAPago;
    }

    public function setIPVAPago($IPVAPago){
        $this->IPVAPago = $IPVAPago;
    }

    public function verificarStatusIPVA()
    {
        return $this->IPVAPago;
    }

    public function pagarIPVA()
    {
        $this->IPVAPago = true;
        echo "IPVA do veículo " . $this->nome . " foi pago com sucesso.\n";
    }

    public function atualizarValorIPVA($reajuste)
    {
        $aumento = $this->valorIPVA * ($reajuste / 100);
        $this->valorIPVA += $aumento;
        return true;
    }
}
?>