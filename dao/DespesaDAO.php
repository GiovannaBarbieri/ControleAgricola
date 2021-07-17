<?php
require_once 'Conexao.php';
require_once 'SQL/Despesa_sql.php';

class DespesaDAO extends Conexao {
    public function InserirDespesa(DespesaVO $vo) {
        $conexao = parent::retornaConexao();
        
        $comando = Despesa_sql::InserirDespesa();
        
        $sql = new PDOStatement();
        
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $vo->getTituloDespesa());
        $sql->bindValue(2, $vo->getCategoriaDespesa());
        $sql->bindValue(3, $vo->getValorDespesa());
        $sql->bindValue(4, $vo->getDataVencimento());
        $sql->bindValue(5, $vo->getDataCadastro());
        $sql->bindValue(6, $vo->getObsDespesa());
        $sql->bindValue(7, $vo->getIdUsuario());
        
        try{
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
    public function GerenciarDespesa($idDespesa, $idUser){ /// tras na tabela
        $conexao = parent::retornaConexao();
        $comando = Despesa_sql::GerenciarDespesa();
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $idDespesa);
        $sql->bindValue(2, $idUser);
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        
        return $sql->fetchAll();
    }
    public function ConsultarDespesa() { ///traz para o select
        $conexao = parent::retornaConexao();

        $comando = Despesa_sql::ConsultarDespesa();

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
