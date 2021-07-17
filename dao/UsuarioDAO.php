<?php
include_once 'Conexao.php';
require_once 'SQL/Usuario_sql.php';

class UsuarioDAO extends Conexao {
    
    public function InserirUsuario(UsuarioVO $vo){
        $conexao = parent::retornaConexao();
        
        $comando = Usuario_sql::InserirUsuario();
        
        $sql = new PDOStatement();
        
        $sql = $conexao->prepare($comando);
        
    }

    public function CarregarDados($id_usuario){
        $conexao = parent::retornaConexao();
        
        $comando = Usuario_sql::CarregarDados();
        
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $id_usuario);
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $sql->execute();
        
        return $sql->fetchAll();
    }
    
    public function colocarFotoUser(UsuarioVO $vo, $idUsuario) {
        $conexao = parent::retornaConexao();
        $comando = Usuario_sql::colocarFotoUser();
        
        $sql = new PDOException();
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $vo->getFotoUser());
        $sql->bindValue(2, $idUsuario);
        
        try{
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -1;
        }
    }
    
    public function CarregarFotoUser($idUsuario) {
        $conexao = parent::retornaConexao();
        $comando = Usuario_sql::CarregarFotoUser();
        
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idUsuario);
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        
        return $sql->fetchAll();
    }
    
    public function ExcluirFotoUser(UsuarioVO $vo, $idUsuario) {
        $conexao = parent::retornaConexao();
        $comando = Usuario_sql::ExcluirFotoUser();
        
        $sql = new PDOException($comando);
        $sql = $conexao->prepare($comando);
        
        $sql->bindValue(1, $vo->getFotoUser());
        $sql->bindValue(2, $idUsuario);
        
        try{
            $sql->execute();
            return 2;
        } catch (Exception $ex) {
            return -1;
        }
    }
    
    public function CidadePessoa() {
        $conexao = parent::retornaConexao();
        
        $comando = Usuario_sql::CidadePessoa();
        
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $sql->execute();
        return $sql->fetchAll();
    }
    
    public function Endereco(){
        
    }
    
    
}
