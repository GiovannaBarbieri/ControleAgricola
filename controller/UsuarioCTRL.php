<?php
include_once '../dao/UsuarioDAO.php';
include_once 'UtilCTRL.php';

class UsuarioCTRL {
    
    public function CarregarDados() {
        $dao = new UsuarioDAO();
        
        $dados = $dao->CarregarDados(UtilCTRL::UsuarioLogado());
        
        return $dados;
    }
    public function colocarFotoUser(UsuarioVO $vo){
        $dao = new UsuarioDAO();
        
        $dados = $dao->colocarFotoUser($vo, UtilCTRL::UsuarioLogado());
        return $dados;
    }
    public function CarregarFotoUser(){
        $dao = new UsuarioDAO();
        $dados = $dao->CarregarFotoUser(UtilCTRL::UsuarioLogado());
        return $dados;
    }
    public function ExcluirFotoUser(UsuarioVO $vo){
        $dao = new UsuarioDAO();
        $dados = $dao->ExcluirFotoUser($vo, UtilCTRL::UsuarioLogado());
        return $dados;
    }
    public function CidadePessoa(){
        $dao = new UsuarioDAO();
        $ret = $dao->CidadePessoa();
        
        return $ret;
    }
}
