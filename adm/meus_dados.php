<?php
require_once '../controller/UtilCTRL.php';
require_once '../vo/UsuarioVO.php';
require_once '../controller/UsuarioCTRL.php';

UtilCTRL::UsuarioLogado(1);

$nome_foto = '';
$ctrl = new UsuarioCTRL();
$vo = new UsuarioVO();

if (isset($_POST['btnEnviarFoto'])) {
    $foto = $_FILES['foto'];

    if ($foto['type'] == '') {
        $ret = 6;
    } else if ($foto['type'] != 'image/jpeg') {
        $ret = 5;
    } else {
        $nome_foto = md5(microtime()) . '.jpg';

        move_uploaded_file($foto['tmp_name'], 'assets/imgUser/' . $nome_foto);

        $vo->setFotoUser($nome_foto);
        $ret = $ctrl->colocarFotoUser($vo);
    }
} else if (isset($_POST['btnExcluirFoto'])) {
    unlink('assets/imgUser/' . $_POST['nome_foto']);
    $excluir = 'null';
    $vo->setFotoUser($excluir);
    $ret = $ctrl->ExcluirFotoUser($vo);
}

$foto = $ctrl->CarregarFotoUser();
$dados = $ctrl->CarregarDados();
$cidade = $ctrl->CidadePessoa();
?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        include_once '_head.php';
        ?>
    </head>
    <body>
        <div id="wrapper">
            <?php
            include_once '_topo.php';
            include_once '_menu.php';
            ?>
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if (isset($ret)) {
                                ExibirMsg($ret);
                            }
                            ?>
                            <h2>Meus Dados</h2>   
                            <h5>Aqui você poderá manter seus dados atualizados.</h5>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="panel-body">
                        <div class="form-group">
                            <form method="post" action="meus_dados.php" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $imagem = $foto[0]['imagem_usuario'] ?>">    
                                    <?php if ($imagem == '' || $imagem == 'null') { ?>
                                        <img src="assets/imgUser/" class="user-image img-responsive"/>
                                    <?php } elseif ($imagem != '') { ?>
                                        <img src="assets/imgUser/<?= $imagem ?>" class="user-image img-responsive"/>
                                        <input type="hidden" name="nome_foto" value="<?= $imagem ?>"/>
                                        <button class="btn-xs btn-danger" name="btnExcluirFoto"><i class="fa fa-trash-o"></i></button>
                                    <?php } ?>
                                    <?php if ($imagem == '' || $imagem == 'null') { ?>    
                                        <input type="file" name="foto" />
                                        <button class="btn-xs btn-success" name="btnEnviarFoto">Carregar foto</button> 
                                    <?php } ?>    
                            </form> <br />
                            <form method="post" action="dados_doador.php">
                                <div class="form-group">
                                    <label>Nome Completo</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="nome" id="nome" value="<?= $dados[0]['nome_usuario'] ?>"/>
                                </div>                
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="email" id="email" value="<?= $dados[0]['email_usuario'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label>CNPJ</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="documento" id="documento" value="<?= $dados[0]['documento_usuario'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="telefone" id="telefone" value="<?= $dados[0]['telefone_usuario'] ?>" />
                                </div>                                
                                <div class="form-group">
                                    <label>Rua</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="rua" id="rua" value="<?= $dados[0]['rua'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="bairro" id="bairro" value="<?= $dados[0]['bairro'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Número</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="numero" id="numero" value="<?= $dados[0]['numero'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Cep</label>
                                    <input class="form-control" placeholder="Digite aqui..." name="cep" id="cep" value="<?= $dados[0]['cep'] ?>" />
                                </div>
                                <div class="form-group input-group" id="divCidade">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <select class="form-control" name="cidade" id="cidade">
                                            <option value="">Escolha uma Cidade</option>
                                            <?php for ($i = 0; $i < count($cidade); $i++) { ?>
                                                <option value="<?= $cidade[$i]['id_cidade'] ?>"><?= $cidade[$i]['nome_ciadade'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <label id="val_cidade" class="Validar"></label>
                                    </div>
                                <br />
                                <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                            </form>
                        </div>
                    </div>
                    <!--ROW-->                    
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
    </body>
</html>

