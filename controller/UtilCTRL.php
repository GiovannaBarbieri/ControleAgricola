<?php

class UtilCTRL {

    private static function IniciarSessao() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public static function Deslogar() {
        self::IniciarSessao();
        unset($_SESSION['tipo']);
        unset($_SESSION['idUser']);

        if (isset($_SESSION['idUser'])) {
            unset($_SESSION['idUser']);
        }
        header('location: login.php');
    }

    public static function UsuarioLogado() {
        return 1;
    }

    private static function SetarFusoHorario() {
        date_default_timezone_set('America/Sao_Paulo');
    }

    public static function DataAtual() {
        self::SetarFusoHorario();
        return date('Y-m-d');
    }

    public static function HoraAtual() {
        self::SetarFusoHorario();
        return date('H:i:s');
    }

    public static function MostrarData($data) {
        return explode('-', $data)[2] . '/' . explode('-', $data)[1] . '/' . explode('-', $data)[0];
    }

    public static function MostraHora($hora) {
        return explode(':', $hora)[0] . explode(':', $hora)[1];
    }
}
