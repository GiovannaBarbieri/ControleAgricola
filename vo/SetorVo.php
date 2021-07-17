<?php

class SetorVo {
    private $idSetor;
    private $nomeSetor;
    
    function getIdSetor() {
        return $this->idSetor;
    }

    function getNomeSetor() {
        return $this->nomeSetor;
    }

    function setIdSetor($idSetor) {
        $this->idSetor = $idSetor;
    }

    function setNomeSetor($nomeSetor) {
        $this->nomeSetor = $nomeSetor;
    }


}
