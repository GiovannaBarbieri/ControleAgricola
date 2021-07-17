<?php

class BancoVO {
    
    private $id_conta_salario;
    private $nomeBanco;
    private $Agencia;
    private $Conta;
    private $tipoConta;
    
    function getId_conta_salario() {
        return $this->id_conta_salario;
    }

    function getNomeBanco() {
        return $this->nomeBanco;
    }

    function getAgencia() {
        return $this->Agencia;
    }

    function getConta() {
        return $this->Conta;
    }

    function getTipoConta() {
        return $this->tipoConta;
    }

    function setId_conta_salario($id_conta_salario) {
        $this->id_conta_salario = $id_conta_salario;
    }

    function setNomeBanco($nomeBanco) {
        $this->nomeBanco = $nomeBanco;
    }

    function setAgencia($Agencia) {
        $this->Agencia = $Agencia;
    }

    function setConta($Conta) {
        $this->Conta = $Conta;
    }

    function setTipoConta($tipoConta) {
        $this->tipoConta = $tipoConta;
    }
}
