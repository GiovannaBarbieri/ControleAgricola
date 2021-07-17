<?php

require_once '../vo/UsuarioVO.php';

class FuncionarioVO extends UsuarioVO{
    private $idFunc;
    private $nomeFunc;
    private $emailFunc;
    private $telefoneFunc;
    private $imagemFunc;
    private $docIdent;
    private $cpf;
    private $numCarteira;
    private $dataPagamento;
    private $valorSalario;
    private $dataCad;
    private $idSetorFunc;
    private $idEnd;
    private $idContaSalario;
    private $idUser;
    
    function getIdFunc() {
        return $this->idFunc;
    }

    function getNomeFunc() {
        return $this->nomeFunc;
    }

    function getEmailFunc() {
        return $this->emailFunc;
    }

    function getTelefoneFunc() {
        return $this->telefoneFunc;
    }

    function getImagemFunc() {
        return $this->imagemFunc;
    }

    function getDocIdent() {
        return $this->docIdent;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNumCarteira() {
        return $this->numCarteira;
    }

    function getDataPagamento() {
        return $this->dataPagamento;
    }

    function getValorSalario() {
        return $this->valorSalario;
    }

    function getDataCad() {
        return $this->dataCad;
    }

    function getIdSetorFunc() {
        return $this->idSetorFunc;
    }

    function getIdEnd() {
        return $this->idEnd;
    }

    function getIdContaSalario() {
        return $this->idContaSalario;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdFunc($idFunc) {
        $this->idFunc = $idFunc;
    }

    function setNomeFunc($nomeFunc) {
        $this->nomeFunc = $nomeFunc;
    }

    function setEmailFunc($emailFunc) {
        $this->emailFunc = $emailFunc;
    }

    function setTelefoneFunc($telefoneFunc) {
        $this->telefoneFunc = $telefoneFunc;
    }

    function setImagemFunc($imagemFunc) {
        $this->imagemFunc = $imagemFunc;
    }

    function setDocIdent($docIdent) {
        $this->docIdent = $docIdent;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNumCarteira($numCarteira) {
        $this->numCarteira = $numCarteira;
    }

    function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }

    function setValorSalario($valorSalario) {
        $this->valorSalario = $valorSalario;
    }

    function setDataCad($dataCad) {
        $this->dataCad = $dataCad;
    }

    function setIdSetorFunc($idSetorFunc) {
        $this->idSetorFunc = $idSetorFunc;
    }

    function setIdEnd($idEnd) {
        $this->idEnd = $idEnd;
    }

    function setIdContaSalario($idContaSalario) {
        $this->idContaSalario = $idContaSalario;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }
}
