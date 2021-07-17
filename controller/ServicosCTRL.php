<?php
require_once '../dao/ServicosDAO.php';
require_once 'UtilCTRL.php';

class ServicosCTRL {
    public function InserirServico(ServicoVO $vo) {
        //inserir validações//
        
        $vo->setIdUsuario(UtilCTRL::UsuarioLogado());
        $vo->setDataCadastro(UtilCTRL::DataAtual());
        $vo->setDataInicio(UtilCTRL::DataAtual());
        $vo->setDataFinal(UtilCTRL::DataAtual());
        
        $dao = new ServicosDAO();
        $ret = $dao->InserirServico($vo);
        
        return $ret;
    }
}