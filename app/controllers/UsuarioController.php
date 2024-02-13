<?php

namespace app\Controllers;

use app\Models\UsuarioModel;

class UsuarioController
{
    public function index()
    {
        // Implemente lógica para exibir o formulário de cadastro (HTML/CSS)
        Controller::view("cadastroUser");
    }

    public function cadastrarUsuario($params)
    {
        // Obtém os dados do formulário
        $nome = $params->nome;
        $username = $params->username;
        $senha = $params->senha;
        $role = $params->role;
        $dt_registro = date("Y-m-d H:i:s"); // Obtém a data e hora atual

        // Instancia a model de usuários
        $usuarioModel = new UsuarioModel();

        // Chama o método de cadastro
        $result = $usuarioModel->cadastrarUsuario($nome, $username, $senha, $role, $dt_registro);

        if ($result) {
            // Sucesso no cadastro
            echo "Usuário cadastrado com sucesso!";
        } else {
            // Falha no cadastro
            echo "Falha ao cadastrar o usuário.";
        }
    }
}
