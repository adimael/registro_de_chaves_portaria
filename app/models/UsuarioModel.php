<?php

namespace App\Models;

use app\DB\DB;

class UsuarioModel
{
    protected $db;

    public function __construct()
    {
        // Instancia a classe de conexão com o banco de dados
        $this->db = new DB();
    }

    public function cadastrarUsuario($nome, $username, $senha, $role, $dt_registro)
    {
        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Implemente lógica para inserir um novo usuário no banco de dados
        $query = "INSERT INTO usuarios (nome, username, password, role, dt_registro)
                  VALUES (:nome, :username, :senha, :role, NOW())";
        $params = [
            'nome' => $nome,
            'username' => $username,
            'senha' => $senhaHash,
            'role' => $role,
        ];

        return $this->db->execute($query, $params);
    }
}
