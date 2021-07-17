<?php

class Funcionario_sql {
    public static function InserirFuncionario(){
        $sql = '
            INSERT INTO
                tb_funcionario 
                    (nome_funcionario, 
                    cpf_funcionario,
                    rg_funcionario,
                    num_pis,
                    email_funcionario,
                    telefone_funcionario,  
                    setor_funcionario, 
                    imagem_funcionario,
                    data_cadastro,
                    id_usuario,
                    id_endereco,
                    id_pagamento)
            VALUES
                (?,?,?,?,?,?,?,?,?,?,?,?)';
        return $sql;
    }
    
    public static function InserirSetor(){
        $sql = '';
        
        $sql = 'insert into tb_endereco (id_setor, nome_setor) values (?,?,?,?,?)';
        
        return $sql;
    }
    
    public static function PagamentoSalFunc(){
        $sql = '';
        
        $sql = ' insert into (nome_banco, agencia_banco, num_conta, tipo_conta) values (?,?,?,?)';
        
        return $sql;
    }

    public static function ConsultarFuncionario(){
        $sql = 'SELECT
                    nome_funcionario, id_funcionario
                FROM
                    tb_funcionario order by nome_funcionario
                 ';
        return $sql;
    }
}
