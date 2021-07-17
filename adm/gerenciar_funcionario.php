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
                            <h2>Gerenciar Funcionario</h2>   
                            <h5>Neste modulo você ira gerenciar seus funcionarios</h5>
                            <hr />
                            <form method="post" action="gerenciar_funcionario.php">
                                <div class="form-group">
                                    <label>Selecione o cliente</label><!--ira selecionar o tipo funcionario o cliente e trazer as informações-->
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="1">Funcionario</option>
                                        <option value="2">Cliente</option>
                                    </select>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-info" name="btnProcurar">Procurar</button>
                                </center>
                            </form>
                            <hr />

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Advanced Tables -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Gerenciar Funcionarios
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>CPF</th>
                                                            <th>Telefone</th>
                                                            <th>E-mail</th>
                                                            <th>Endereço</th>
                                                            <th>Função</th>
                                                            <th>Salario</th>
                                                            <th>Data do Pag</th>
                                                            <th>Data cad</th>
                                                            <th>Comando</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>Colheita</td>
                                                            <td>03/05/20</td>
                                                            <td>22</td>
                                                            <td>120,00</td>
                                                            <td>22.000,00</td>
                                                            <td>22.000,00</td>
                                                            <td>22.000,00</td>
                                                            <td>22.000,00</td>
                                                            <td>22.000,00</td>
                                                            <td>
                                                                <a href="alterar_funcionario.php" class="btn btn-warning btn-xs">Alterar</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /. ROW  -->
                            </div>
                            <!-- /. PAGE INNER  -->
                        </div>
                        <!-- /. PAGE WRAPPER  -->
                    </div>
                    <!-- /. WRAPPER  -->
                    </body>
                    </html>
