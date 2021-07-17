<?php
require_once '../vo/UsuarioVO.php';
require_once '../vo/FuncionarioVO.php';
require_once '../controller/UsuarioCTRL.php';
require_once '../controller/FuncionarioCTRL.php';
require_once '../vo/BancoVO.php';
require_once '../vo/SetorVo.php';

$ctrl_func = new FuncionarioCTRL();
$ctrl_user = new UsuarioCTRL();

if (isset($_POST['btnSalvar'])) {

    $voFunc = new FuncionarioVO();
    //cadastra o funcionario
    $voFunc->setNomeFunc($nomeFunc);
    $voFunc->setEmailFunc($emailFunc);
    $voFunc->setTelefoneFunc($telefoneFunc);
    $voFunc->setDocIdent($docIdent);
    $voFunc->setCpf($cpf);
    $voFunc->setNumCarteira($numCarteira);
    $voFunc->setDataPagamento($dataPagamento);
    $voFunc->setValorSalario($valorSalario);
    $voFunc->setIdSetorFunc($idSetorFunc);
    $voFunc->setIdEnd($idEnd);
    $voFunc->setIdContaSalario($idContaSalario);
    $voFunc->setIdUsuario($idUsuario);

    //cadastra endereço
    $voFunc->setRua($rua);
    $voFunc->setNumero($numero);
    $voFunc->setBairro($bairro);
    $voFunc->setIdCidade($idCidade);

    //cadastra o banco
    $voBanco = new BancoVO();

    $voBanco->setNomeBanco($nomeBanco);
    $voBanco->setAgencia($Agencia);
    $voBanco->setConta($Conta);
    $voBanco->setTipoConta($tipoConta);

    //cadastra o setor
    $voSetor = new SetorVo();

    $voSetor->setNomeSetor($nomeSetor);
}

$cidade = $ctrl_user->CidadePessoa();
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
                            <h2>Cadastro de Funcionário</h2>   
                            <h5>Insira os dados para cadastrar um funcionário</h5>
                        </div>
                    </div>
                    <hr />
                    <form method="post" action="cadastrar_funcionario.php" enctype="multipart/form-data">
                        <div class="col-md-11">
                            <h4 style="color: red">Documentação funcionário(a)</h4>
                            <br>
                        </div>
                        <div class="col-md-11">
                            <div class="form-group" id="divImagem">
                                <label>Anexar foto funcionário (.JPEG)</label>
                                <input type="file"  name="imagem" id="imagem"/>
                                <label id="val_imagem" class="Validar"></label>
                            </div>
                        </div><br/>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Nome Completo*</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nomeFunc" id="nomeFunc" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="Digite aqui..." name="emailFunc" id="emailFunc" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telefone*</label>
                                <input type="text" class="form-control tel" maxlength="11" placeholder="Digite aqui..." name="telefoneFunc" id="telefoneFunc" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>RG*</label>
                                <input type="text" class="form-control" maxlength="9" placeholder="Digite aqui... " name="rg" id="rg" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF*</label>
                                <input type="text" class="form-control" maxlength="11" placeholder="Digite aqui..." name="cpf" id="cpf" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Número PIS*</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="numPis" id="numPis" /><!--carteira de trabalho-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Selecione o setor*</label>
                                <select class="form-control" name="setorFunc" id="setorFunc">
                                    <option value="0">Selecione</option>
                                </select>
                            </div>       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Pagamento*</label>
                                <input type="date" class="form-control" placeholder="Digite aqui..." name="dataPagamento" id="dataPagamento" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salário R$*</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="salario" id="salario" />
                            </div>   
                        </div>

                        <div class="col-md-10">
                            <h4 style="color: red">Inserir endereço do funcionário(a)</h4>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rua</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="rua" id="rua" />
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Número</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="numero" id="numero" />
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="bairro" id="bairro" />
                            </div>   
                        </div>                   
                        <div class="col-md-6">
                            <div class="form-group" id="divCidade">
                                <label>Cidade</label>
                                <select class="form-control" name="cidade" id="cidade">    
                                    <option value="">Selecione</option>
                                    <option value="<?= $cidade[0]['id_cidade'] ?>"><?= $cidade[0]['nome_cidade'] ?></option>
                                </select>
                                <label id="val_cidade" class="Validar"></label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 style="color: red">Inserir dados do pagamento</h4>
                            <br>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo conta</label>
                                <select class="form-control" name="tipoConta" id="tipoConta">
                                    <option value="0">Selecione</option>
                                    <option value="1">Conta Poupança</option>
                                    <option value="2">Conta Corrente</option>
                                </select> 
                            </div>  
                        </div>                          
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Banco</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="banco" id="banco" />
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Num. agencia</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="agencia" id="agencia" />
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Num. conta</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="conta" id="conta" />
                            </div>   
                        </div>       
                        <div class="col-md-12">
                            <br>
                                <center><button type="submit" name="btnSalvar" class="btn btn-success" onclick="return Validar()">Salvar</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
