<?php

namespace App\Controllers;

class Auth
{
    public static function isUserAuthenticated()
    {
        session_start(); // Inicia a sessão
        // Lógica para verificar se o usuário está autenticado
        // Retorne true se estiver autenticado, false caso contrário
        // Este é apenas um exemplo, adapte conforme a lógica de autenticação real da sua aplicação
        return isset($_SESSION['id_user']);
    }

    public static function fazerLogout()
    {
        session_start();
        session_unset();
        session_destroy();

        // Redireciona para a página de login
        header('Location: /');
        exit();
    }
}
