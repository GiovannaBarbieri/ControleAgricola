<?php

class Usuario_sql {
    
    public static function InserirUsuario(){
        $sql = "";
        
        $sql = "insert into tb_usuario
                                nome_usuario,
                                email_usuario,
                                telefone_usuario,
                                foto_usuario,
                                login_usuario,
                                senha_usuario,
                                data_cadastro,
                                id_endereco
                            values (?,?,?,?,?,?,?,?)";                               
        return $sql;
                
    }

    public static function CarregarDados(){
        
        $sql = '
                SELECT 
                    usu.nome_usuario,
                    usu.email_usuario,
                    usu.documento_usuario,
                    usu.telefone_usuario,
                    end.rua,
                    end.bairro,
                    end.numero,
                    end.cep,
                    end.id_cidade
                FROM 
                    tb_usuario as usu
                INNER JOIN 
                    tb_endereco as end
                on
                    end.id_cidade = usu.id_usuario
                WHERE
                    usu.id_usuario = ?
                ';
        return $sql;
    }
    
    public static function colocarFotoUser(){
        $sql = '';
        
        $sql = 'update 
                    tb_usuario 
                set 
                    imagem_usuario = ? 
                where 
                    id_usuario = ?';
        return $sql;
    }
    
    public static function CarregarFotoUser(){
        $sql = '';
        
        $sql = 'select
                    imagem_usuario 
                from 
                    tb_usuario 
                where 
                    id_usuario = ?';
        return $sql;
    }
    
    public static function ExcluirFotoUser(){
        $sql = '';
        
        $sql = 'update 
                    tb_usuario 
                set 
                    imagem_usuario = ? 
                where 
                    id_usuario = ?';
        return $sql;
    }
    
    public static function CidadePessoa(){
        $sql = '';
        
        $sql = 'select id_cidade, nome_cidade from tb_cidade';
        
        return $sql;
    }
    
    public static function Endereco(){
        $sql = '';
        
        $sql = 'inset into tb_endereco
                                rua, 
                                numero,
                                bairro,
                                id_cidade
                            values(?,?,?,?);
                ';
        return $sql;
    }
}
