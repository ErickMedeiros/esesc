<?php

class Dadosaluno {

    private $id_dadosaluno;
    private $nome_pai;
    private $cpf_pai;
    private $rg_pai;
    private $profissao_pai;
    private $nome_mae;
    private $cpf_mae;
    private $rg_mae;
    private $profissao_mae;
    private $naturalidade;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $uf;
    private $cidade;
    private $cep;
    private $fone_fixo;
    private $fone_celular;
    private $email;
    private $tipo_sanguineo;
    private $obs;
    private $data_cadastro;
    private $aluno_id_aluno;

    public function __construct($id_dadosaluno = 0, $nome_pai = "", $cpf_pai = "", $rg_pai = "", $profissao_pai = "", $nome_mae = "", $cpf_mae = "", $rg_mae = "", $profissao_mae = "", $naturalidade = "", $endereco = "", $numero = "", $complemento = "", $bairro = "", $uf = "", $cidade = "", $cep = "", $fone_fixo = "", $fone_celular = "", $email = "", $tipo_sanguineo = "", $obs = "", $data_cadastro = "") {

        $this->id_dadosaluno = $id_dadosaluno;
        $this->nome_pai = $nome_pai;
        $this->cpf_pai = $cpf_pai;
        $this->rg_pai = $rg_pai;
        $this->profissao_pai = $profissao_pai;
        $this->nome_mae = $nome_mae;
        $this->cpf_mae = $cpf_mae;
        $this->rg_mae = $rg_mae;
        $this->profissao_mae = $profissao_mae;
        $this->naturalidade = $naturalidade;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->fone_fixo = $fone_fixo;
        $this->fone_celular = $fone_celular;
        $this->email = $email;
        $this->tipo_sanguineo = $tipo_sanguineo;
        $this->obs = $obs;
        $this->data_cadastro = $data_cadastro;
    }

    public function getId_dadosaluno() {
        return $this->id_dadosaluno;
    }
    
    public function getNome_pai() {
        return $this->nome_pai;
    }

    public function getCpf_pai() {
        return $this->cpf_pai;
    }

    public function getRg_pai() {
        return $this->rg_pai;
    }

    public function getProfissao_pai() {
        return $this->profissao_pai;
    }

    public function getNome_mae() {
        return $this->nome_mae;
    }

    public function getCpf_mae() {
        return $this->cpf_mae;
    }

    public function getRg_mae() {
        return $this->rg_mae;
    }

    public function getProfissao_mae() {
        return $this->profissao_mae;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getFone_fixo() {
        return $this->fone_fixo;
    }

    public function getFone_celular() {
        return $this->fone_celular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTipo_sanguineo() {
        return $this->tipo_sanguineo;
    }

    public function getObs() {
        return $this->obs;
    }

    public function getData_cadastro() {
        return $this->data_cadastro;
    }

    
    public function setId_dadosaluno($id_dadosaluno) {
        $this->id_dadosaluno = $id_dadosaluno;
    }
    
    public function setNome_pai($nome_pai) {
        $this->nome_pai = $nome_pai;
    }

    public function setCpf_pai($cpf_pai) {
        $this->cpf_pai = $cpf_pai;
    }

    public function setRg_pai($rg_pai) {
        $this->rg_pai = $rg_pai;
    }

    public function setProfissao_pai($profissao_pai) {
        $this->profissao_pai = $profissao_pai;
    }

    public function setNome_mae($nome_mae) {
        $this->nome_mae = $nome_mae;
    }

    public function setCpf_mae($cpf_mae) {
        $this->cpf_mae = $cpf_mae;
    }

    public function setRg_mae($rg_mae) {
        $this->rg_mae = $rg_mae;
    }

    public function setProfissao_mae($profissao_mae) {
        $this->profissao_mae = $profissao_mae;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setFone_fixo($fone_fixo) {
        $this->fone_fixo = $fone_fixo;
    }

    public function setFone_celular($fone_celular) {
        $this->fone_celular = $fone_celular;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTipo_sanguineo($tipo_sanguineo) {
        $this->tipo_sanguineo = $tipo_sanguineo;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }

    public function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

}
?>