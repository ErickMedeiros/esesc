
<?php
require_once 'conexao.php';
include '../model/class_turma.php';

class DAOTurma {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
        if ($this->conexao->conectar() == false) {
            echo "Não é possível conectar ao banco de dados!" . mysql_error();
        }
    }

    public function cadastrarTurma(Turma $turma) {
        $nome_turma = $turma->getNome_turma();
        


        $sql = "INSERT INTO turma (nome_turma) VALUES ('$nome_turma')";
        $this->conexao->executarQuery($sql);
    }

    public function listarTurma() {
        $lista = $this->conexao->executarQuery("SELECT * FROM turma");
        $arrayTurma = array();

        while ($linha = mysqli_fetch_array($lista)) {
            $turma = new Turma($linha['id_turma'], $linha['nome_turma']);
            array_push($arrayTurma, $turma);
        }
        return $arrayTurma;
    }

    public function remover_Turma($id_turma) {
        $sql = "DELETE FROM turma WHERE id_turma = '$id_turma'";
        $this->conexao->executarQuery($sql);
    }

}
?>