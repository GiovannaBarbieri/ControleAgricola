<?php
require_once '../vo/DespesaVO.php';
require_once '../controller/DespesaCTRL.php';

$ctrl = new DespesaCTRL();


if (isset($_POST['btnProcurar'])) {

    $despesa = $ctrl->GerenciarDespesa();
}
$desp = $ctrl->ConsultarDespesa();
?>
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
                            <h2>Gerenciar Despesas</h2>   
                            <h5>Selecione a despesa que vai gerenciar</h5>
                            <hr />
                            <form method="post" action="gerenciar_despesa.php">
                                <div class="form-group">
                                    <label>Selecione a despesa</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <?php for ($i = 0; $i < count($desp); $i++) { ?>
                                            <option value="<?= $desp[$i]['id_despesa'] ?>"> 
                                                <?= $desp[$i]['titulo_despesa'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-info" name="btnProcurar" onclick="return Validar(8)">Procurar</button>
                                    </center>
                                </form>
                                <hr />
                                <?php
                                if (isset($despesa)) {
                                    if (count($despesa) > 0) {                                      
                                    ?>

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
                                                                    <th>Categoria</th>
                                                                    <th>Título</th>
                                                                    <th>Valor</th>
                                                                    <th>Data cad</th>
                                                                    <th>Data venc</th>
                                                                    <th>Observação</th>
                                                                    <th>Gerenciar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php for ($i = 0; $i < count($despesa); $i++) { ?>
                                                                    <tr class="odd gradeX">
                                                                        <td><?= $despesa[$i]['categoria_despesa'] ?></td>
                                                                        <td><?= $despesa[$i]['titulo_despesa'] ?></td>
                                                                        <td><?= $despesa[$i]['valor_despesa'] ?></td>
                                                                        <td><?= $despesa[$i]['data_vencimento'] ?></td>
                                                                        <td><?= $despesa[$i]['data_cadastro'] //trazer direto do banco?></td>
                                                                        <td><?= $despesa[$i]['obs_despesa'] ?></td>
                                                                        <td>
                                                                            <a href="#" class="btn btn-warning btn-xs">Baixa Total</a>
                                                                            <a href="#" class="btn btn-warning btn-xs">Baixa Parcial</a>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /. ROW  -->
                                    </div>
                                <?php } else {
                                    ExibirMsg(2);
                                } ?>
                            <?php } ?>
                            <!-- /. PAGE INNER  -->
                        </div>
                        <!-- /. PAGE WRAPPER  -->
                    </div>
                    <!-- /. WRAPPER  -->
                </div>
            </div>
        </div>
                </body>
</html>