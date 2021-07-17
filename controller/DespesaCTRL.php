<?php

require_once '../dao/DespesaDAO.php';
require_once 'UtilCTRL.php';

class DespesaCTRL {
    
    public function InserirDespesa(DespesaVO $vo) {
        if($vo->getTituloDespesa() == '' || $vo->getCategoriaDespesa() == '' || $vo->getValorDespesa() == '' || $vo->getDataVencimento() == ''){
            return 0;
        }
        $vo->setDataCadastro(UtilCtrl::DataAtual());
        
        $vo->setIdUsuario(UtilCTRL::UsuarioLogado());
        
        $dao = new DespesaDAO();
        
        $ret = $dao->InserirDespesa($vo);
        
        return $ret;
    }
    
    public function GerenciarDespesa(){
        $dao = new DespesaDAO();
        return $dao->GerenciarDespesa($idDespesa, UtilCTRL::UsuarioLogado());
    }
    public function ConsultarDespesa() {
        $dao = new DespesaDAO();
        return $dao->ConsultarDespesa();
    }
    
}
