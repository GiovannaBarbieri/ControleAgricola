<?php

function ExibirMsg($ret) {
    if (isset($ret)) {
        switch ($ret) {
            case -1:
                echo '<div class="alert alert-danger">
                         Ocorreu um erro na operação!
                     </div>';
                break;
            case 0:
                echo '<div class="alert alert-warning">
                        Preencher o(s) campo(s) obrigatório(s)
                     </div>';
                break;
            case 1:
                echo '<div class="alert alert-success">
                         Ação realizada com sucesso!
                     </div>';
                break;
            case 2:
                echo '<center><div class="alert alert-info">
                         Não foi encontrado registro!
                     </center></div>';
                break;
            case -2:
                echo '<div class="alert alert-danger">
                         Login inexistentes!
                     </div>';
                break;
            case -3:
                echo '<div class="alert alert-danger">
                         A senha não confere!
                     </div>';
                break;
            case 5:
                echo '<center><div class="alert alert-danger">
                Imagem inválida, somemente jpg.
                </div></center>';
            break;
        case 6:
            echo '<center><div class="alert alert-danger">
                O campo imagem não pode ser vazio.
                </div></center>';
            break;
                
        }
    }
}

?>
