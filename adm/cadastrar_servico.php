<?php
require_once '../vo/ServicoVO.php';
require_once '../controller/ServicosCTRL.php';
require_once '../controller/ClienteCTRL.php';
require_once '../controller/FuncionarioCTRL.php';

$ctrl_servc = new ServicosCTRL();
$ctrl_cliente = new ClienteCTRL();
$ctrl_func = new FuncionarioCTRL();

if (isset($_POST['btnSalvar'])) {

    $vo = new ServicoVO();

    $vo->setIdCliente($_POST['clientes']);
    $vo->setTipoServico($_POST['tipoServico']);
    $vo->setTipoMaquina($_POST['tipoMaquina']);
    $vo->setIdFuncionario($_POST['funcionario']);
    $vo->setDataInicio($_POST['dataInicio']);
    $vo->setDataFinal($_POST['dataFinal']);
    $vo->setValorHora($_POST['valorHora']);
    $vo->setTotalHoras($_POST['totalHora']);
    
        $sql->bindValue(1, $vo->getId_tipo_servico());
        $sql->bindValue(2, $vo->getId_tipo_maquina());
        $sql->bindValue(3, $vo->getDataInicio());
        $sql->bindValue(4, $vo->getDataFinal());
        $sql->bindValue(5, $vo->getId_valor_hora());
        $sql->bindValue(6, $vo->getTotalHoras());
        $sql->bindValue(7, $vo->getObsServico());
        $sql->bindValue(8, $vo->getDataCadastro());
        $sql->bindValue(9, $vo->getIdCliente());
        $sql->bindValue(10, $vo->getIdFuncionario());
        $sql->bindValue(11, $vo->getIdUsuario());

    $ret = $ctrl_servc->InserirServico($vo);
}

$cliente = $ctrl_cliente->ConsultarCliente();
$func = $ctrl_func->ConsultarFuncionario();
?>
﻿<!DOCTYPE html>
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
                            <h2>Cadastro de Serviço</h2>   
                            <h5>Insira os dados para cadastrar um serviço</h5>
                            <hr />
                            <form method="post" action="cadastrar_servico.php">
                                <div class="form-group">
                                    <label>Selecione o cliente*</label>
                                    <select class="form-control" name="clientes" id="clientes">
                                        <option value="">Selecione</option>
                                        <?php for ($i = 0; $i < count($cliente); $i++) { ?>
                                            <option value="<?= $cliente[$i]['id_cliente'] ?>">
                                                <?= $cliente[$i]['nome_cliente'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Selecione o Serviço*</label>
                                    <select class="form-control" name="tipoServico" id="tipoServico">
                                        <option value="0">Selecione</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Selecione a Máquina*</label>
                                    <select class="form-control" name="tipoMaquina" id="tipoMaquina">
                                        <option value="0">Selecione</option>     
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Selecione o Funcionário*</label>
                                    <select class="form-control" name="funcionario" id="funcionario">
                                        <option value="">Selecione</option>
                                        <?php for ($i = 0; $i < count($func); $i++) { ?>
                                            <option value="<?= $func[$i]['id_funcionario'] ?>">
                                                <?= $func[$i]['nome_funcionario'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Data início*</label>
                                    <input type="date" class="form-control" placeholder="Digite a data de inicio do serviço" name="dataInicio" id="dataInicio" />
                                </div>
                                <div class="form-group">
                                    <label>Data final*</label>
                                    <input type="date" class="form-control" placeholder="Digite a data final do serviço" name="dataFinal" id="dataFinal" />
                                </div>
                                <div class="form-group">
                                    <label>Valor da hora*</label>
                                    <select class="form-control" name="valorHora" id="valorHora">
                                        <option value="0">Selecione</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Total de horas trabalhadas*</label>
                                    <input type="text" class="form-control" placeholder="Digite o total de horas trabalhadas" name="totalHora" id="totalHora" />
                                </div>
                                <div class="form-group">
                                    <label>Observações do serviço</label>
                                    <textarea class="form-control" rows="3" name="obs" id="obs" placeholder="Endereços entre outras informações"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                            </form>
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
