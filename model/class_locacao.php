


<?php

class Dadosaluno {

    private $codigo;
    private $dataLocacao;
    private $dataDevolucao;
    private $nomeFilme;
    private $nomeCliente;

    public function __construct($codigo = 0, $dataLocacao = "", $dataDevolucao = "", $nomeFilme = "", $nomeCliente = "") {
        $this->codigo = $codigo;
        $this->dataLocacao = $dataLocacao;
        $this->dataDevolucao = $dataDevolucao;
        $this->nomeFilme = $nomeFilme;
        $this->nomeCliente = $nomeCliente;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setDataLocacao($dataLocacao) {
        $this->dataLocacao = $dataLocacao;
    }

    public function getDataLocacao() {
        return $this->dataLocacao;
    }

    public function setDataDevolucao($dataDevolucao) {
        $this->dataDevolucao = $dataDevolucao;
    }

    public function getDataDevolucao() {
        return $this->dataDevolucao;
    }

    public function setNomeFilme($nomeFilme) {
        $this->nomeFilme = $nomeFilme;
    }

    public function getNomeFilme() {
        return $this->nomeFilme;
    }

    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

}
?>