<?php

require_once 'Conexao.php';
require_once 'SQL/Funcionario_sql.php';

class FuncionarioDAO extends Conexao {

    public function InserirFuncionario(FuncionarioVO $vo, BancoVO $banco, SetorVo $setor) {
        $conexao = parent::retornaConexao();
        //tb_funcionario
        $comando = Funcionario_sql::InserirFuncionario();

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->bindValue(1, $vo->getNomeFunc());
        $sql->bindValue(2, $vo->getEmailFunc());
        $sql->bindValue(3, $vo->getTelefoneFunc());
        $sql->bindValue(4, $vo->getImagemFunc());
        $sql->bindValue(5, $vo->getDocIdent());
        $sql->bindValue(6, $vo->getCpf());
        $sql->bindValue(7, $vo->getNumCarteira());
        $sql->bindValue(8, $vo->getDataPagamento());
        $sql->bindValue(9, $vo->getValorSalario());
        $sql->bindValue(10, $vo->getDataCad());
        $sql->bindValue(11, $$vo->getIdSetorFunc());
        $sql->bindValue(12, $vo->getIdEnd());
        $sql->bindValue(13, $vo->getIdContaSalario());
        $sql->bindValue(14, $vo->getIdUser());

        $conexao->beginTransaction();

        try {
            $sql->execute();
            //tb_endereco
            $id_funcionario = $conexao->lastInsertId();
            $comando = Usuario_sql::Endereco();
            $sql = $conexao->prepare($comando);

            $sql->bindValue(1, $vo->getRua());
            $sql->bindValue(2, $vo->getNumero());
            $sql->bindValue(3, $vo->getBairro());
            $sql->bindValue(4, $vo->getIdCidade());
            $sql->bindValue(5, $id_funcionario);

            $sql->execute();
            //tb_pagamento
            $comando = Funcionario_sql::PagamentoSalFunc();
            $sql = $conexao->prepare($comando);

            $sql->bindValue(1, $banco->getNomeBanco());
            $sql->bindValue(2, $banco->getAgencia());
            $sql->bindValue(3, $banco->getConta());
            $sql->bindValue(4, $banco->getTipoConta());
            $sql->bindValue(5, $banco->getNumAgencia());
            $sql->bindValue(6, $id_funcionario);

            $sql->execute();
            //tb_setor
            $comando = Funcionario_sql::PagamentoSalFunc();
            $sql = $conexao->prepare($comando);
            
            $sql->bindValue(1, $setor->getNomeSetor());
            $sql->bindValue(2, $id_funcionario);
            
            $sql->execute();
            $conexao->commit();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $conexao->rollBack();
            return -1;
        }
    }

    public function ConsultarFuncionario() {
        $conexao = parent::retornaConexao();

        $comando = Funcionario_sql::ConsultarFuncionario();

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

}
