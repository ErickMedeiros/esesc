

<?php

class Turma {

    private $id_turma;
    private $nome_turma;
   
    public function __construct($id_turma = 0, $nome_turma = "") {
        $this->id_turma = $id_turma;
        $this->nome_turma = $nome_turma;
        
    }

    public function setId_turma($id_turma) {
        $this->id_turma = $id_turma;
    }

    public function getId_turma() {
        return $this->id_turma;
    }

    public function setNome_turma($nome_turma) {
        $this->nome_turma = $nome_turma;
    }

    public function getNome_turma() {
        return $this->nome_turma;
    }
    
}
?>