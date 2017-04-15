


<?php
   require '../persistence/dao_locacao.php';
   
   $objetoLocacao = new Locacao();
   $objetoLocacao->setDataLocacao($_REQUEST['dataLocacao']);
   $objetoLocacao->setDataDevolucao($_REQUEST['dataDevolucao']);
   $objetoLocacao->setNomeFilme($_REQUEST['nomeFilme']);
   $objetoLocacao->setNomeCliente($_REQUEST['nomeCliente']);
   
   $dao = new DAOLocacao();
   $dao->cadastrarLocacao($objetoLocacao); 
 	
	header('Location: ../view/view_locacao.php');
	exit;
?>