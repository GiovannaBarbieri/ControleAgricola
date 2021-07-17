<?php


class Servico_sql {
    public static function InserirServico(){
        $sql = 'INSERT INTO tb_servico 
                    (id_tipo_servico,
                    id_tipo_maquina,
                    data_inicio,
                    data_final,
                    id_valor_hora,
                    total_hora,
                    obs_servico,
                    data_cadastro,
                    id_cliente,
                    id_funcionario,
                    id_usuario)
                VALUES
                    (?,?,?,?,?,?,?,?,?,?,?)';
        return $sql;
    }
    
}
