<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php require_once '_head.php'; ?>
    </head>
    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2> Cadastro - Controle Agrícola</h2>

                    <h5></h5>
                    <br />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><strong>   Seja bem vindo! Insira seus dados... </strong></center>  
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <br />
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Nome completo*" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="E-mail*" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Telefone*" />
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Rua*" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Número*" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Bairro*" />
                                </div>                            

                                <div class="form-group">
                                    <div class=" input-group" id="divCidade">
                                        <span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                                        <select class="form-control" name="cidade" id="cidade">
                                            <option value="">Escolha uma Cidade*</option>
                                            <?php for ($i = 0; $i < count($cidade); $i++) { ?>
                                                <option value="<?= $cidade[$i]['id_cidade'] ?>"><?= $cidade[$i]['nome_cidade'] ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <label id="val_cidade" class="Validar"></label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Login*" />
                                </div>              
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control"  placeholder="Sua Senha*" />
                                </div>
                                
                                <a href="#" class="btn btn-primary ">Acessar</a>
                                <hr />
                                Já possui conta ? <a href="acesso.php" >clique aqui </a> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
