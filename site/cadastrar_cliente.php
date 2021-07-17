<?php

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
                            <h2>Cadastro de cliente</h2>   
                            <h5>Insira os dados para cadastrar um cliente</h5>
                            <hr />
                            <form method="post" action="cadastrar_cliente.php">
                                <div class="col-md-12">
                                    <h4 style="color: red">Dados clientes</h4>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="divNome">
                                        <label>Nome completo*</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="nome" id="nome" />
                                        <label id="val_nome" class="Validar"></label>
                                    </div>
                                    <div class="form-group" id="divDoc">
                                        <label>Documento</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="documento" id="documento" />
                                        <label id="val_doc" class="Validar"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="divEmail">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="Digite aqui..." name="emailCliente" id="email" />
                                        <label id="val_email" class="Validar"></label>
                                    </div>
                                    <div class="form-group" id="divTelefone">
                                        <label>Telefone*</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="telefoneCliente" id="telefone" />
                                        <label id="val_telefone" class="Validar"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 style="color: red">Endereço clientes</h4>
                                    <br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group" id="divTelefone">
                                        <label>Rua</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="rua" id="rua" />
                                        <label id="val_telefone" class="Validar"></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" id="divTelefone">
                                        <label>Número</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="numero" id="numero" />
                                        <label id="val_telefone" class="Validar"></label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group" id="divTelefone">
                                        <label>Bairro</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="bairro" id="bairro" />
                                        <label id="val_telefone" class="Validar"></label>
                                    </div>
                                </div>                           
<!--                                <div class="col-md-4">
                                    <div class="form-group" id="divTelefone">
                                        <label>Cep</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..." name="cep" id="cep" />
                                        <label id="val_telefone" class="Validar"></label>
                                    </div>                                                      
                                </div>-->
                                <div class="col-md-4">
                                    <div class="form-group input-group" id="divCidade">
                                        <label>Selecione a cidade</label>
                                        <select class="form-control" name="cidade" id="cidade">
                                            <option value="">Selecione</option>
                                            <?php for ($i = 0; $i < count($cidade); $i++) { ?>
                                                <option value="<?= $cidade[$i]['id_cidade'] ?>"><?= $cidade[$i]['nome_cidade'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <label id="val_cidade" class="Validar"></label>
                                    </div>
                                </div>   
                                
                                <div class="col-md-12"><br/>
                                    <center><button type="submit" class="btn btn-success" name="btnSalvar" onclick="return Validar()">Salvar</button></center>
                                </div>
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
