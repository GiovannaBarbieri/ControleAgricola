<?php

class Cliente_sql {

    public static function InserirCliente() {
        $sql = '';
        
        $sql = '
            insert into 
                tb_cliente 
                    (nome_cliente, 
                    documento, 
                    email_cliente, 
                    telefone_cliente, 
                    data_cadastro, 
                    id_usuario)
                values
                    (?,?,?,?,?,?)';

        return $sql;
    }
    public static function EnderecoCliente(){
        $sql = '';
        
        $sql = 'insert into
                    tb_endereco
                        (rua,
                        bairro,
                        numero,
                        cep,
                        id_cidade,
                        id_usuario,
                        id_cliente)
                values
                        (?,?,?,?,?,?,?)';
    }

    public static function ConsultarCliente(){
        
        $sql = 'SELECT 
                    nome_cliente, id_cliente
                FROM
                    tb_cliente order by nome_cliente
                ';
        
        return $sql;
    }
    public static function FiltrarCliente(){
        
        $sql = ' select
                    nome_cliente,
                    documento,
                    email_cliente,
                    telefone_cliente,
                    endereco_cliente
                from 
                    tb_cliente
                where
                    id_usuario = ?
                order by
                    nome_cliente
                ';
        return $sql;
    }

}
