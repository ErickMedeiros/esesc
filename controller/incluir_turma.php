



<?php
   require '../persistence/dao_turma.php';
   
   $objetoTurma = new Turma();
   $objetoTurma->setNome_turma($_REQUEST['nome_turma']);
         
   $dao = new DAOTurma();
   $dao->cadastrarTurma($objetoTurma); 
 	
	header('Location: ../view/view_turma.php');
	exit;
?>