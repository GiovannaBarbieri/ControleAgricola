<?php

class ServicoVO {
    private $idServico;
    private $id_tipo_servico;
    private $id_tipo_maquina;
    private $dataInicio;
    private $dataFinal;
    private $id_valor_hora;
    private $totalHoras;
    private $obsServico;
    private $dataCadastro;
    private $idCliente;
    private $idFuncionario;
    private $idUsuario;
    
    function getIdServico() {
        return $this->idServico;
    }

    function getId_tipo_servico() {
        return $this->id_tipo_servico;
    }

    function getId_tipo_maquina() {
        return $this->id_tipo_maquina;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }

    function getId_valor_hora() {
        return $this->id_valor_hora;
    }

    function getTotalHoras() {
        return $this->totalHoras;
    }

    function getObsServico() {
        return $this->obsServico;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdServico($idServico) {
        $this->idServico = $idServico;
    }

    function setId_tipo_servico($id_tipo_servico) {
        $this->id_tipo_servico = $id_tipo_servico;
    }

    function setId_tipo_maquina($id_tipo_maquina) {
        $this->id_tipo_maquina = $id_tipo_maquina;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

    function setId_valor_hora($id_valor_hora) {
        $this->id_valor_hora = $id_valor_hora;
    }

    function setTotalHoras($totalHoras) {
        $this->totalHoras = $totalHoras;
    }

    function setObsServico($obsServico) {
        $this->obsServico = $obsServico;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
}