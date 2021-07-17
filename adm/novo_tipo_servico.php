<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php require_once '_head.php'; ?>
    </head>
    <body>
        <div id="wrapper">
            <?php require_once '_topo.php'; ?>
            <?php require_once '_menu.php'; ?>
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                             <?php
                            if (isset($ret)) {
                                ExibirMsg($ret);
                            }
                            ?>
                            <h2>Inserir novo serviço</h2>   
                            <h5>Cadastre um novo tipo de serviço</h5>
                            <hr />

                            <form method="post" action="novo_tipo_servico.php">
                                <div class="form-group" id="">
                                    <label>Nome do tipo</label>
                                    <input class="form-control" name="nomeTipo" id="nomeTipo" placeholder="Digite aqui..." />
                                    <label id="" class=""></label>
                                </div>
                                <button type="submit" name="btnSalvar" class="btn btn-success">Salvar</button>
                            </form>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Advanced Tables -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Tipos cadastrados
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>Ação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>Safra</td>
                                                            <td>
                                                                <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modAlterar" onclick="">Alterar</a>
                                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modExcluir" onclick="">Excluir</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        <!-- /. WRAPPER  -->                            
    </body>                            
</html>
