


<?php
       require '../persistence/dao_turma.php';
   
   $objetoDao = new DAOTurma();
   $objetoDao->remover_Turma($_REQUEST['id_turma']);
 	
	header('Location: ../view/view_turma.php');
	exit;
?>