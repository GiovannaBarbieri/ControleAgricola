<?php
require_once '../vo/UsuarioVO.php';

class EnderecoVO extends UsuarioVO{
    private $rua;
    private $numero;
    private $bairro;
    private $idCidade;
    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getIdCidade() {
        return $this->idCidade;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }
}
