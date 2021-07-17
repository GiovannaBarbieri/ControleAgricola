<?php
require_once '../vo/UsuarioVO.php';

class ClienteVO extends UsuarioVO{
    
    private $idCliente;
    private $nomeCliente;
    private $emailCliente;
    private $telefoneCliente;
    private $documento;
    private $dataCadastro;
    private $idEndereco;
    private $idUser;

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getEmailCliente() {
        return $this->emailCliente;
    }

    function getTelefoneCliente() {
        return $this->telefoneCliente;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    function setTelefoneCliente($telefoneCliente) {
        $this->telefoneCliente = $telefoneCliente;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }   
}
