<?php

namespace App\Controllers;

use app\Controllers\Controller;
use app\Models\LoginModel;
use app\Controllers\Auth; // Certifique-se de incluir a classe Auth

class HomeController
{
  protected $loginModel;

  public function __construct()
  {
    $this->loginModel = new LoginModel();
  }

  public function index($params)
{
  // Verifique se o usuário está autenticado
  if (Auth::isUserAuthenticated()) {
      // Se o usuário estiver autenticado, redirecione para o dashboard
      header("Location: /dashboard");
      exit();
  } else {
      // Se o usuário não estiver autenticado, exiba a tela de login
      Controller::view("home");
  }

}

    
  public function login($params)
    {
        // Certifique-se de que $_POST['username'] e $_POST['password'] contêm os dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        $loginModel = new LoginModel();

        if ($loginModel->autenticarUsuario($username, $password)) {
            // Usuário autenticado com sucesso, redirecione para o dashboard
            header("Location: /dashboard");
            exit;
        } else {
            /// Falha na autenticação, redirecione para a página de login com uma mensagem na URL
            header("Location: /?error=authentication_failed");
            exit;
        }
    }

}