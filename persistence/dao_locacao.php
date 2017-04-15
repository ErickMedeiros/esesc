


<?php

require_once 'conexao.php';
include '../model/class_locacao.php';

class DAOLocacao {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
        if ($this->conexao->conectar() == false) {
            echo "Não é possível conectar ao banco de dados!" . mysql_error();
        }
    }

    public function cadastrarLocacao(Locacao $locacao) {
        $dataLocacao = $locacao->getDataLocacao();
        $dataDevolucao = $locacao->getDataDevolucao();
        $nomeFilme = $locacao->getNomeFilme();
        $nomeCliente = $locacao->getNomeCliente();

        $sql = "INSERT INTO locacao (dataLocacao, dataDevolucao, nomeFilme, nomeCliente) VALUES ('$dataLocacao', '$dataDevolucao', '$nomeFilme', '$nomeCliente')";
        $this->conexao->executarQuery($sql);
    }

    public function listarLocacoes() {


        $lista = $this->conexao->executarQuery("SELECT * FROM locacao");
        $arrayLocacoes = array();

        while ($linha = mysqli_fetch_array($lista)) {
            $locacao = new Locacao($linha['codigo'], $linha['dataLocacao'], $linha['dataDevolucao'], $linha['nomeFilme'], $linha['nomeCliente']);
            array_push($arrayLocacoes, $locacao);
        }
        return $arrayLocacoes;
    }

    public function removerLocacao($codigo) {
        $sql = "DELETE FROM locacao WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

}
?>