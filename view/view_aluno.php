<?php
//Testes
require '../persistence/dao_aluno.php';
$daoAluno = new DAOAluno();
$listaAluno = $daoAluno->listarAluno();
?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <title>ESESC - Boletim</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Aluno</a></li>
                        <li><a href="view_professor.php">Professor</a></li>
                        <li><a href="view_turma_anoletivo.php">Turma Ano Letivo</a></li>
                        <li><a href="view_turma.php">Turma</a></li>
                        <li><a href="view_anoletivo.php">Ano Letivo</a></li>
                        <li><a href="view_tpsanguineo.php">Tipo Sanguíneo</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav>

        <div class="jumbotron" style="background-image:url('red.jpeg'); color: #FFFFFF;">
            <div class="container" >
                <h1>ESESC - Boletim</h1>
            </div><!-- fim .container dentro do jumbotron -->
        </div><!-- fim .jumbotron -->


        <div class="container">

            <form class="form-horizontal" action="../controller/incluir_aluno.php" method="post">
                <fieldset>
                    <legend>Novo Aluno</legend>

                    <div class="form-group">
                        <input type="text" class="form-control" id="carteira" name="carteira" placeholder="Carteira Sesc">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome_aluno" name="nome_aluno" placeholder="Nome do Aluno">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="data_nasc" name="data_nasc" placeholder="Data Nascimento">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="cpf_aluno" name="cpf_aluno" placeholder="CPF">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="rg_aluno" name="rg_aluno" placeholder="RG">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Cadastrar
                    </button>
                </fieldset>
            </form>
        </div> <!-- fim .container 1 -->

        <div class="container">
            <br /> <br />
        </div> <!-- fim .container 2 -->


        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Lista de Alunos</h2>
                </div><!-- fim .panel-heading -->

                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Código</th>
                            <th>Carteira Sesc</th>
                            <th>Nome do Aluno</th>
                            <th>Data Nasc.</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th></th>
                        </tr>
                        <?php
                        while ($objetoAluno = array_shift($listaAluno)) {
                            ?>
                            <tr>
                                <td class="col-md-1"><?php echo $objetoAluno->getId_aluno(); ?></td>
                                <td class="col-md-1"><?php echo $objetoAluno->getCarteira(); ?></td>
                                <td class="col-md-3"><?php echo $objetoAluno->getNome_aluno(); ?></td>
                                <td class="col-md-1"><?php echo $objetoAluno->getData_nasc(); ?></td>
                                <td class="col-md-1"><?php echo $objetoAluno->getCpf_aluno(); ?></td>
                                <td class="col-md-1"><?php echo $objetoAluno->getRg_aluno(); ?></td>

                                <td class="col-md-1">
                                    <a class="btn btn-danger" href="../controller/excluir_aluno.php?codigo=<?= $objetoAluno->getId_aluno(); ?>" role="button">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                    </table>

                </div><!-- fim .panel-body -->
            </div><!-- fim .panel -->
        </div><!-- fim .container 3 -->

    </body>
</html>