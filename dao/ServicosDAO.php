<?php

require_once 'Conexao.php';
require_once 'SQL/Servico_sql.php';

class ServicosDAO extends Conexao {

    public function InserirServico(ServicoVO $vo) {
        $conexao = parent::retornaConexao();

        $comando = Servico_sql::InserirServico();

        $sql = $conexao->prepare($comando);

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
        
        try {
            $sql->execute();
            return -1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
}
