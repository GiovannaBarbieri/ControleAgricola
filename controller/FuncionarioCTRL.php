<?php
require_once '../dao/FuncionarioDAO.php';
require_once 'UtilCTRL.php';

class FuncionarioCTRL {
    public function InserirFuncionario(FuncionarioVO $vo, BancoVO $banco, SetorVo $setor) {
//        if($vo->getNomeFuncionario() == '' || $vo->getDocumentoFuncionario() == '' || $vo->getTelefoneFuncionario() == '' || $vo->getEmailFuncionario() == '' || $vo->getEnderecoFuncionario() == '' || $vo->getSalario() == '' || $vo->getDataCadastro() == '' || $vo->getDataPagamento() == ''){
//            return 0;
//        }
        
        $vo->setDataCad(UtilCTRL::DataAtual());
        $vo->setIdUsuario(UtilCTRL::UsuarioLogado());
        
        $dao = new FuncionarioDAO();
        
        return $dao->InserirFuncionario($vo, $banco, $setor);
    }
    
    
    
    
    
    public function ConsultarFuncionario() {
        $dao = new FuncionarioDAO();
        return $dao->ConsultarFuncionario();
    }
}
