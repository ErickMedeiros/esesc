
<?php
require_once 'conexao.php';
include '../model/class_aluno.php';

class DAOAluno {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
        if ($this->conexao->conectar() == false) {
            echo "Não é possível conectar ao banco de dados!" . mysql_error();
        }
    }

    public function cadastrarAluno(Aluno $aluno) {
        $carteira = $aluno->getCarteira();
        $nome_aluno = $aluno->getNome_aluno();
        $data_nasc = $aluno->getData_nasc();
        $cpf_aluno = $aluno->getCpf_aluno();
        $rg_aluno = $aluno->getRg_aluno();
        

        $sql = "INSERT INTO aluno (carteira, nome_aluno, data_nasc, cpf_aluno, rg_aluno) VALUES ('$carteira', '$nome_aluno', '$data_nasc', '$cpf_aluno', '$rg_aluno')";
        $this->conexao->executarQuery($sql);
    }

    public function listarAluno() {
        $lista = $this->conexao->executarQuery("SELECT * FROM aluno");
        $arrayAluno = array();

        while ($linha = mysqli_fetch_array($lista)) {
            $aluno = new Aluno($linha['id_aluno'], $linha['carteira'], $linha['nome_aluno'], $linha['data_nasc'], $linha['cpf_aluno'], $linha['rg_aluno']);
            array_push($arrayAluno, $aluno);
        }
        return $arrayAluno;
    }

    public function removerAluno($id_aluno) {
        $sql = "DELETE FROM aluno WHERE id_aluno = '$id_aluno'";
        $this->conexao->executarQuery($sql);
    }

}
?>