<?php

require_once '../dao/ClienteDAO.php';
require_once 'UtilCTRL.php';

class ClienteCTRL {

    public function InserirCliente(ClienteVO $vo) {
        if ($vo->getNomeCliente() == '' || $vo->getDocumento() == '' || 
            $vo->getEmailCliente() == '' || $vo->getTelefoneCliente() == '' ||  
            $vo->getRua() == '' || $vo->getBairro() == '' ||
            $vo->getCep() == '' || $vo->getNumero() == '' || $vo->getIdCidade() == '') {
            return 0;
        }
        
        $vo->setDataCadastro(UtilCTRL::DataAtual());
        $vo->setIdUsuario(UtilCTRL::UsuarioLogado());
        
        $dao = new ClienteDAO();

        $ret = $dao->InserirCliente($vo);

        return $ret;
    }

    public function ConsultarCliente() {
        $dao = new ClienteDAO();
        return $dao->ConsultarCliente();
    }

    public function FiltrarCliente($idUser) {
        if ($idUser == '') {
            return 0;
        }
        $dao = new ClienteDAO();
        return $dao->FiltrarCliente($idUser);
    }
}
