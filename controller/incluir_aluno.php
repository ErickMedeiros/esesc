


<?php
   require '../persistence/dao_aluno.php';
   
   $objetoAluno = new Aluno();
   $objetoAluno->setCarteira($_REQUEST['carteira']);
   $objetoAluno->setTurma($_REQUEST['turma']);
   $objetoAluno->setTurno($_REQUEST['turno']);
   $objetoAluno->setNome_aluno($_REQUEST['nome_aluno']);
   $objetoAluno->setData_nasc($_REQUEST['data_nasc']);
   $objetoAluno->setCpf_aluno($_REQUEST['cpf_aluno']);
   $objetoAluno->setRg_aluno($_REQUEST['rg_aluno']);
   
      
   $dao = new DAOAluno();
   $dao->cadastrarAluno($objetoAluno); 
 	
	header('Location: ../view/view_aluno.php');
	exit;
?>