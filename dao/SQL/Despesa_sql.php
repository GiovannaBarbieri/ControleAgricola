<?php


class Despesa_sql {
    public static function InserirDespesa(){
        $sql = '
                INSERT INTO
                    tb_despesa (titulo_despesa, categoria_despesa, valor_despesa, data_vencimento,data_cadastro, obs_despesa, id_usuario)
                VALUES
                    (?,?,?,?,?,?,?)
                 ';
        return $sql;
    }
    
    public static function GerenciarDespesa(){
        $sql = '';
        
        $sql = ' select
                    id_despesa,
                    titulo_despesa,
                    categoria_despesa,
                    valor_despesa,
                    data_vencimento,
                    data_cadastro,
                    obs_despesa,
                    id_usuario
                from
                    tb_despesa
                where
                    id_despesa = ?
                and
                    id_usuario = ?
                ';
        return $sql;
    }
    public static function ConsultarDespesa(){
        
        $sql = 'SELECT 
                    titulo_despesa, id_despesa
                FROM
                    tb_despesa order by titulo_despesa
                ';
        
        return $sql;
    }
}
