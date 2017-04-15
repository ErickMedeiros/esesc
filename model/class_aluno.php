<?php

class Aluno {

    private $id_aluno;
    private $carteira;
    private $nome_aluno;
    private $data_nasc;
    private $cpf_aluno;
    private $rg_aluno;
    
    public function __construct($id_aluno = 0, $carteira = "", $nome_aluno = "", $data_nasc = "", $cpf_aluno = "", $rg_aluno = "") {

        $this->id_aluno = $id_aluno;
        $this->carteira = $carteira;
        $this->nome_aluno = $nome_aluno;
        $this->data_nasc = $data_nasc;
        $this->cpf_aluno = $cpf_aluno;
        $this->rg_aluno = $rg_aluno;
       
    }

    public function getId_aluno() {
        return $this->id_aluno;
    }

    public function getCarteira() {
        return $this->carteira;
    }

    public function getNome_aluno() {
        return $this->nome_aluno;
    }

    public function getData_nasc() {
        return $this->data_nasc;
    }

    public function getCpf_aluno() {
        return $this->cpf_aluno;
    }

    public function getRg_aluno() {
        return $this->rg_aluno;
    }

    public function setId_aluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function setCarteira($carteira) {
        $this->carteira = $carteira;
    }

    public function setNome_aluno($nome_aluno) {
        $this->nome_aluno = $nome_aluno;
    }

    public function setData_nasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }

    public function setCpf_aluno($cpf_aluno) {
        $this->cpf_aluno = $cpf_aluno;
    }

    public function setRg_aluno($rg_aluno) {
        $this->rg_aluno = $rg_aluno;
    }

    
}
?>