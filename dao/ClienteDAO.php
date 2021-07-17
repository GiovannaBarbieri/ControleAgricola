<?php
require_once 'Conexao.php';
require_once 'SQL/Cliente_sql.php';

class ClienteDAO extends Conexao {
    
    public function InserirCliente(ClienteVO $vo) {
        $conexao = parent::retornaConexao();
        
        $comando = Cliente_sql::InserirCliente();
        
        $sql = new PDOStatement();
        
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $vo->getNomeCliente());
        $sql->bindValue(2, $vo->getDocumento());
        $sql->bindValue(3, $vo->getEmailCliente());
        $sql->bindValue(4, $vo->getTelefoneCliente());
        $sql->bindValue(5, $vo->getDataCadastro());
        $sql->bindValue(6, $vo->getIdUsuario());
        
        $conexao->beginTransaction();
        
        try{
            $sql->execute();
            $id_cliente = $conexao->lastInsertId();
            
            $sql = $conexao->prepare(Cliente_sql::EnderecoCliente());
            
            $sql->bindValue(1, $vo->getRua());
            $sql->bindValue(2, $vo->getBairro());
            $sql->bindValue(3, $vo->getNumero());
            $sql->bindValue(4, $vo->getCep());
            $sql->bindValue(5, $vo->getIdCidade());
            $sql->bindValue(6, $vo->getIdUsuario());
            $sql->bindValue(7, $id_cliente);
            
            $sql->execute();
            
            $conexao->commit();
            
            return 1;
        } catch (Exception $ex) {
            $conexao->rollBack();
            echo $ex->getMessage();
            return -1;
        }
    }
    
     public function ConsultarCliente() {
        $conexao = parent::retornaConexao();

        $comando = Cliente_sql::ConsultarCliente();

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
     public function FiltrarCliente($idUser) {
        $conexao = parent::retornaConexao();

        $comando = Cliente_sql::FiltrarCliente();

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $tipo);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
