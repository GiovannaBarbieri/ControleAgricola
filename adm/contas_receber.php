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
                            <h2>Contas a Receber</h2>   
                            <h5>Selecione o cliente</h5>
                            <hr />
                            <form method="post" action="contas_receber.php">
                                <div class="form-group">
                                    <label>Selecione o cliente</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-info" name="btnSalvar">Procurar</button>
                                </center>
                            </form>
                            <hr />

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Advanced Tables -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Gerente de contas
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Tipo serviço</th>
                                                            <th>Data final</th>
                                                            <th>Valor Hora</th>
                                                            <th>Total horas</th>
                                                            <th>Total pagar</th>
                                                            <th>Comandos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>Colheita</td>
                                                            <td>03/05/20</td>
                                                            <td>22</td>
                                                            <td>120,00</td>
                                                            <td>22.000,00</td>
                                                            <td>
                                                                <a href="#" class="btn btn-warning btn-xs">Dar Baixa</a>
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
