<?php

namespace app\Models;

use app\DB\db;

class LoginModel 
{
    protected $db;

    public function __construct()
    {
        // Instancia a classe de conexão com o banco de dados
        $this->db = new DB();
    }

    public function autenticarUsuario($username, $password)
    {
        // Use declarações preparadas para proteger contra injeção de SQL
        $query = "SELECT * FROM usuarios WHERE username = :username";
        $params = ['username' => $username];
        $result = $this->db->query($query, $params);

        // Verifique se há um usuário correspondente
        if (count($result) > 0) {
            // Use password_verify para comparar senhas criptografadas
            if (password_verify($password, $result[0]['password'])) {
                // Inicie a sessão e armazene o ID do usuário na sessão
                session_start();
                $_SESSION['id_user'] = $result[0]['id_user'];

                // Registre as informações na tabela de logs
                $this->registrarLog($result[0]['id_user'], $result[0]['username']);

                return true;
            }
        }

        return false;
    }

    private function registrarLog($id_user, $username)
    {
        // Obtenha o endereço IP do usuário
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Insira as informações na tabela de logs
        $query = "INSERT INTO logs (id_user, username, ip_address, dt_registro) VALUES (:id_user, :username, :ip_address, NOW())";
        $params = [
            'id_user' => $id_user,
            'username' => $username,
            'ip_address' => $ipAddress,
        ];

        $this->db->execute($query, $params);
    }

    public function isUserAuthenticated()
    {
        // Inicie a sessão no início do script
        session_start();

        // Adicione sua lógica de verificação de autenticação aqui
        // ...

        // Verifique se a variável está definida e é true
        return isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0;
    }

    public function getUserNameById($userId)
    {
        $query = "SELECT nome FROM usuarios WHERE id_user = :userId";
        $params = ['userId' => $userId];

        $result = $this->db->query($query, $params);

        if (count($result) > 0) {
            return $result[0]['nome'];
        }

        return null;
    }
}
