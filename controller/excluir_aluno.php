


<?php
       require '../persistence/dao_aluno.php';
   
   $objetoDao = new DAOAluno();
   $objetoDao->removerAluno($_REQUEST['id_aluno']);
 	
	header('Location: ../view/view_aluno.php');
	exit;
?>