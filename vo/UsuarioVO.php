<?php
require_once '../vo/EnderecoVO.php';

class UsuarioVO extends EnderecoVO{

    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $telefoneUsuario;
    private $fotoUser;
    private $loginUsuario;
    private $senhaUsuario;
    private $dataCad;
    private $endereco;
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmailUsuario() {
        return $this->emailUsuario;
    }

    function getTelefoneUsuario() {
        return $this->telefoneUsuario;
    }

    function getFotoUser() {
        return $this->fotoUser;
    }

    function getLoginUsuario() {
        return $this->loginUsuario;
    }

    function getSenhaUsuario() {
        return $this->senhaUsuario;
    }

    function getDataCad() {
        return $this->dataCad;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setTelefoneUsuario($telefoneUsuario) {
        $this->telefoneUsuario = $telefoneUsuario;
    }

    function setFotoUser($fotoUser) {
        $this->fotoUser = $fotoUser;
    }

    function setLoginUsuario($loginUsuario) {
        $this->loginUsuario = $loginUsuario;
    }

    function setSenhaUsuario($senhaUsuario) {
        $this->senhaUsuario = $senhaUsuario;
    }

    function setDataCad($dataCad) {
        $this->dataCad = $dataCad;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}
