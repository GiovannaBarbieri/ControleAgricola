<?php
require_once '../vo/DespesaVO.php';
require_once '../controller/DespesaCTRL.php';

$ctrl = new DespesaCTRL();

if (isset($_POST['btnSalvar'])) {
    $vo = new DespesaVO();

    $vo->setTituloDespesa($_POST['titulo']);
    $vo->setCategoriaDespesa($_POST['categoria']);
    $vo->setValorDespesa($_POST['valor']);
    $vo->setDataVencimento($_POST['data']);
    $vo->setObsDespesa($_POST['obs']);

    $ret = $ctrl->InserirDespesa($vo);
}
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
                            <h2>Cadastro de Despesas</h2>   
                            <h5>Insira os dados para cadastrar uma nova despesa</h5>
                            <hr />
                            <form method="post" action="cadastrar_despesa.php">

                                <div class="form-group">
                                    <label>Categoria despesa*</label>
                                    <select class="form-control" name="categoria" id="categoria">
                                        <option value="0">Selecione</option>
                                        <option value="1">Oficina</option>
                                        <option value="2">Lazer</option>
                                        <option value="3">Médico</option>
                                        <option value="4">Mercado</option>
                                        <option value="5">Esporte</option>
                                        <option value="6">Investimento</option>
                                        <option value="7">Conta de Água</option>
                                        <option value="8">Conta Luz</option>
                                        <option value="9">Telefone</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Título*</label>
                                    <input type="text" class="form-control" placeholder="Digite um título para a despesa " name="titulo" id="titulo" />
                                </div>

                                <div class="form-group">
                                    <label>Valor*</label>
                                    <input type="text" class="form-control" placeholder="Digite o valor da despesa" name="valor" id="valor" />
                                </div>
                                <div class="form-group">
                                    <label>Data vencimento*</label>
                                    <input type="date" class="form-control" placeholder="Digite a data de vencimento da despesa" name="data" id="data" />
                                </div>     
                                <div class="form-group">
                                    <label>Observação da despesa</label>
                                    <textarea class="form-control" rows="3" name="obs" id="obs" placeholder="Preencha com dados persistentes a esta despesa"></textarea>
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
